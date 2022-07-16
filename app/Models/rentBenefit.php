<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentBenefit extends Model
{
    use HasFactory;
    protected $table = 'rent__benefit_table';
    protected $primaryKeys = 'id';
    protected $fillable = ['id', 'kamar_mandi', 'kamar_tidur', 'luas'];
}
