<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SubCategory extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
        //   first pe category table ki id or  fiir subcategory ki id or ye dono equal han ye mtlb ha
    }
}
