<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\tokenMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\ResetPassword;

use Session;
use Carbon\Carbon;


class UserController extends Controller
{
    //Function to Showing Index 
    public function index_edit($username){
        if(!Session::has('role')){
            return redirect('/')->with('warning','Silahkan Login Untuk Mengakses Halaman');
        }else{
            $data_user = User::where('username', $username)->first();
            $email =  User::where('username', $username)->value('email');
            // Session::put('username_edit', $username);
            // Session::put('email_edit', $email);
            return view('Dashboard.adminManagement.edit-ui', compact('data_user'));
        }
    }

    public function index_tambah(){
        if(!Session::has('role')){
            return redirect('/')->with('warning','Silahkan Login Untuk Mengakses Halaman');
        }else{
            return view('Dashboard.adminManagement.tambah-ui');
        }
    }

    public function index_reset(){
        return view('Login.reset_password');
    }

    public function index_token(){
        return view('Login.token_password');
    }


    //CRUD Function for User Data
    public function add_data(Request $request){
        $credentials = $request->validate([
            'nama' => 'required', 
            'username' => 'required',
            'email' => 'required|email:dns',
            'no_hp' => 'required',
            'password' => 'required', 
            'role_user' => 'required'
        ]); 

        $data_username =  User::where('username', $request->username)->where('email',$request->email)->value('username');
        if ((User::where('username', $request->username)->exists()) && ($request->username != $data_username)) {
            return redirect('dashboard-admin')->with('error', "Data gagal ditambahkan username sudah digunakan");
        }
        if(User::where('email', $request->email)->exists()){
            return redirect('dashboard-admin')->with('error', "Data gagal ditambahkan email sudah digunakan");
        }
        $data = array(
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'hashed_password' => Hash::make($request->password),
            'role' => $request->role_user,
            'created_at' => Carbon::now()->format('Y-m-d'),
            'updated_at' => Carbon::now()->format('Y-m-d')
        );
        User::insert($data);
        return redirect('dashboard-admin')->with('success', 'Data Berhasil Ditambahkan');

    }


    public function update_data(Request $request){
        $credentials = $request->validate([
            'nama' => 'required', 
            'username' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required', 
            'role_user' => 'required'
        ]); 
        
        //$time = Carbon::parse(Carbon::now()->toDateTimeString())->format('Y-m-d H:i:00');
        $username = $request->username;
        $email = $request->email;
        $time = Carbon::now()->format('Y-m-d');
        $data_username =  User::where('username', $username)->value('username');
        $data_email =  User::where('username', $username)->value('email');
  
        if ((User::where('username', $username)->exists()) && ($username != $data_username)) {
            return redirect('dashboard-admin')->with('error', "Data gagal diperbaharui username sudah digunakan");
        }
        if((User::where('email', $email)->exists()) && (($email != $data_email))){
            return redirect('dashboard-admin')->with('error', "Data gagal ditambahkan email sudah digunakan");
        }

        $id = User::where('username', $username)->where('email',$request->email)->value('id');
        $data = array(
            'name' => $request->nama,
            'hashed_password' => Hash::make($request->password),
            'role' => $request->role_user,
            'updated_at' => $time  
        );
        User::find($id)->update($data);
        return redirect('dashboard-admin')->with('success', 'Data Berhasil Diperbaharui');
    }

    private function generate_token(){
        $token = Str::random(10);
        return $token;
    }

    private function get_user_by_id($token){
        $id_user = ResetPassword::where('token', $token)->value('data_user');
        return $id_user;
    }  
    
    private function reset_token($id, $time){
        $updateData = array(
            'status' => 'disable'
        );
        return ResetPassword::where('data_user', $id)->where('created_at',$time)->update($updateData);
    }

    public function send_email($token, $email, $id){
        // $token = self::generate_token();
        // return view('Login.email_template', compact('token'));
        
        $mailInfo = new \stdClass();
        $mailInfo->subject = "Permohonan Ganti Password Monitoring Agent 46";
        $mailInfo->token = $token;
 
        Mail::to($email)
           ->send(new tokenMail($mailInfo));
    }

    private function token_generate($username){
        $email = User::where('username', $username)->value('email');
        $user_id = User::where('username', $username)->value('id');
        $token = self::generate_token();
        $time = Carbon::now()->format('Y-m-d');
        $data_insert = array(
            'email' => $email,
            'token' => $token,
            'data_user' => $user_id,
            'status' => 'active',
            'created_at' => $time
        );
        return $data_insert;
    }

    public function reset_password(Request $request){
        if(!User::where('username', $request->username)->first()){
            return Back()->with('error', 'Username yang dimasukan tidak ditemukan');
        }
        $data_insert = self::token_generate($request->username);
        ResetPassword::insert($data_insert);
        self::send_email($data_insert['token'], $data_insert['email'], $data_insert['data_user']);
        Session::put('username', $request->username);
        return redirect('index-token')->with('success', 'Silahkan Cek Email Anda'); 
    }

    
    public function regenerate_token(){
        $username = Session::get('username');
        $data = self::token_generate($username);
        $time = Carbon::now()->format('Y-m-d');
        $id = User::where('username',$username)->value('id');
        self::reset_token($id, $time);
        ResetPassword::insert($data);
        self::send_email($data['token'], $data['email'], $data['data_user']);
        Session::put('username', $username);
        return redirect('index-token')->with('success', 'Silahkan Cek Email Anda'); 
       
    }

    public function check_token(Request $request){
        $username = Session::get('username');
        $id = User::where('username',$username)->value('id');
        $time = Carbon::now()->format('Y-m-d');
        $check_token = ResetPassword::where('token', $request->token)->where('data_user',$id)->where('created_at',$time)->where('status','active')->exists();
        if($check_token == false){
            return redirect('index-token')->with('error', 'Token Yang Anda Masukan Tidak Valid');
        }
        self::reset_token($id, $time);
        Session::put('token', $request->token);
        return view('Login.reset_password');
    }
    
    public function update_password(Request $request){
        $request->validate([
            'password' => 'required',
            'confPassword' => 'required'
        ]);

        if ($request->password != $request->confPassword){
            return redirect('index-reset')->with('error', 'Password yang dimasukkan berbeda');
        }

        $token = Session::get('token');
        $id_user = self::get_user_by_id($token);
        $dataUpdate = array(
            'hashed_password' => Hash::make($request->password),
        );
        $edit = User::find($id_user)->update($dataUpdate);
        return redirect('/')->with('success', 'Silahkan Login Dengan Password Baru Anda');
    }


    public function delete_data($username){
        //For Update can implement soft_delete
        User::where('username',$username)->delete();
        return redirect('dashboard-admin')->with('success', 'Data Berhasil Dihapus');
    }
}
