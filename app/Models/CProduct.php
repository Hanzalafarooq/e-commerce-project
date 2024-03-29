<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CProduct extends Model
{
    use HasFactory;
    protected $table = 'c_products';
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}
