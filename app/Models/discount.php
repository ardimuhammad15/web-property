<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class discounts extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'discount_table';
    protected $primaryKeys = 'id';
    protected $fillable = ['id','name','code', 'description', 'percentage'];
}
