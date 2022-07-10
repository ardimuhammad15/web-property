<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class checkout extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'checkout_table';
    protected $primaryKeys = 'id';
    protected $fillable = ['id','user_id','house_id', 'rent_id', 'discount_id', 'card_number', 'expired', 'cvc', 'is_paid'];
}
