<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class house extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'house_table';
    protected $primaryKeys = 'id';
    protected $fillable = ['id', 'name', 'slug', 'price', 'location', 'address'];
}
