<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\rent;
use App\Models\checkout;
use App\MOdels\pesanan_detail;
use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        \Midtrans\Config::$serverKey = 'SB-Mid-server-7ChlCRNbt98g2bwTFoar_M9v';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000000,
            ),
            'customer_details' => array(
                'first_name' => 'Stevani',
                'last_name' => 'Kurniawan',
                'email' => 'stevani@gmail.com',
                'phone' => '029282',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('midtranstest', ['snap_token' => $snapToken]);
        Alert::success('Payment Success', 'Your Payment has been Successful');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pesanan_details')->insert([
            'name' => $request->name,
            'occupation' => $request->occupation,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        //sleep(30);
        return response()->json(['success' => 'Form is successfully submitted!']);
        //return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }
    public function payment()
    {

        \Midtrans\Config::$serverKey = 'SB-Mid-server-7ChlCRNbt98g2bwTFoar_M9v';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000000,
            ),
            'customer_details' => array(
                'first_name' => 'Stevani',
                'last_name' => 'Kurniawan',
                'email' => 'stevani@gmail.com',
                'phone' => '029282',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('checkout', ['snap_token' => $snapToken]);
        Alert::success('Payment Success', 'Your Payment has been Successful');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
