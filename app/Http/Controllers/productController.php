<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\galery;
use App\Models\product;
use App\Models\Cproduct;
use App\Models\size;
use App\Models\SubCategory;
use Illuminate\Http\Request;
// use Validator;


class productController extends Controller
{
    public function prview(Request $request)
    {
        $category = Category::all();
        $subcategory = subCategory::all();
        $brands = Brand::all();
        $color = Color::all();
        $size = size::all();
        // return view('categoryTable', );
        return view('admin.productform',compact('category','subcategory','brands','color','size'));
    }

    public function getsubcategories(Request $request)
    {
        $id = $request->cat_id;
        $subcategories = Subcategory::where('category_id', $id)->get();
        return response()->json($subcategories);
    }

    public function pstore(Request $request)
{
//     echo '<pre>';
//    echo $request;
//     echo '</pre>';die;
    $product = new product();

    $product->title = $request->input('title');
    $product->category_id = $request->input('category');
    $product->subcategory_id = $request->input('subcategory');
    $product->brand_id = $request->input('brand');
    $product->color_id = $request->input('color');
    $product->size_id = $request->input('size');
    $product->price = $request->input('price');
    $product->discounted_price = $request->input('discountedPrice');
    $product->discription = $request->input('description');
    $imageData = $request->image;
    $product->image = $imageData;
    $product->save();



       $pr_id = $product->id;
       $var=$request->gallery;
    //    dd($var);exit;
    // dd($pr_id);exit;

        foreach ($var as $gale) {
            $gal = new galery;

            $gal->pid = $pr_id;
            $gal->gallery = $gale;
            $gal->save();
        }
        return redirect('/pview');
}
public function productList()
{
    $categories = Category::all();
    $products = Product::all();
// dd($products);


    return view('front-end.product', compact('products','categories'));
}

}