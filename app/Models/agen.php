<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agen extends Model
{
    use HasFactory;
    protected $table = 'agen_table';
    protected $primaryKeys = 'id';
    protected $fillable = ['id','name','phone_number'];
}
