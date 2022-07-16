<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{
    use HasFactory;

    protected $table = 'pesanan_detail_table';
    protected $primaryKeys = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'occupation',
        'payment_status',
        'midtrans_url',
        'midtrans_booking_code',
    ];
}
