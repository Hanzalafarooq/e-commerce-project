<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function galery()
    {
        return $this->hasOne(galery::class, 'pid','id')->with('gallery');
        //   first pe category table ki id or  fiir subcategory ki id or ye dono equal han ye mtlb ha
    }
public function order()
{
    return $this->belongsTo(order_detail::class);
}
}
