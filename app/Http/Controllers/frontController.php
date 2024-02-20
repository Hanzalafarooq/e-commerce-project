<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\size;
use App\Models\color;
use App\Models\galery;
use App\Models\product;
use App\View\Components\product_details;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function viewfhome()
    {

        $category = category::with('subcategory')->get();
        // echo '<pre>';print_r(($category->name));die;
        // return $category;
        // die;
        $gallery = galery::get();
        $products = Product::all();
        return view('front-end.welcome')->with(compact('category','products','gallery'));
    }
    public function show()
    {
return view('front-end.contact-us');
    }
    public function home()
    {
        $category = category::with('subcategory')->get();
        $gallery = galery::get();
        $products = Product::all();
return view('front-end.welcome',compact('products','category','gallery'));
    }
    public function carts()
    {
return view('front-end.cart');
    }
    public function shop()
    {
        $categories = Category::all();
         $products = Product::all();
return view('front-end.product', compact('categories','products'));
    }
    public function detail($id)
    {
        // $products = Product::get();
        $product = Product::find($id);
        // $gallery = galery::get();

        // dd($gallery);

        $gallery = galery::where('pid', $id)->get();
    // dd($gallery);
        $sizes = size::all();
        $colors = color::all();
        // $prices = Product::all();
return view('front-end.product-detail')->with(compact('sizes','colors','product','gallery'));
    }
}
