<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Exit_;

class categoryController extends Controller
{
   public function viewcategory()
   {
    return view('admin.categoriesform');
   }
   public function Cstore(Request $request)
   {
    // dd($request);
    // exit;
       $category = new Category();
       $category->name = $request->input('name');
       $category->save();

       return redirect('/ctable');
   }
   public function categorytables(Request $request)
   {
    // dd($request);exit;
    $category = Category::all();
       return view('admin.categoryTable', compact('category'));
   }
   public function categoryedit($id)
   {
    // dd($id);exit;
    $category = Category::find($id);

    return view('admin.editcategory', compact('category'));
   }
   public function categoryUpdate(Request $request, $id)
   {

    $category = Category::find($id);
 // print_r($brand);exit;
 $category->name = $request->name;
// Update other fields as needed
$category->save();
  return redirect('/ctable');

    // $brand->save();
   }
   public function categorydelete(Request $request, $id)
   {
       // dd($id);exit;
      $brand = Category::find($id)->delete();
      return back();
   }

//   sub category
public function viewsubcategory()
{
//        echo "<pre>";
//  print_r($request->all());
//  echo "</pre>";
$categorys = Category::all();
// dd($categorys);
    // $category = Category::find()->all();
    // dd($category);
 return view('admin.subcategoryform',compact('categorys'));
}
// public function viewsub()
// {
//     $category = Category::all();
// }
public function sstore(Request $request)
{
//    echo "<pre>";
//  print_r($request->all());
//  echo "</pre>";
//  die;
 // exit;
    $subcategory = new subCategory();
    $subcategory->category_id = $request->main_category;
    $subcategory->sub_category = $request->input('name');
    $subcategory->save();

    return redirect('/stable');
}
public function subtables(Request $request)
   {
    // dd($request);exit;
    // return subCategory::find(1)->category->name;

    // $subcategory = Subcategory::with('category')->find($id);
    // dd($subcategory);
    // return subCategory::with('category')->get();
    // echo '<pre>';
    // //  print_r($subcategory);
    //  echo "</pre>";
    //  die;
    // $subcateegory= Category::all();
    // $subcategory=subCategory::with('category')->get();
    $subcategory = SubCategory::with('category')->get();
       return view('admin.subTable', compact('subcategory'));
   }
   public function subcategoryedit($id)
   {
    // dd($id);exit;
    $subcategory =  subCategory::find($id);

    return view('admin.editsub', compact('subcategory'));
   }
   public function subUpdate(Request $request, $id)
   {

    $category = subCategory::find($id);
 // print_r($brand);exit;
 $category->sub_category = $request->name;

$category->save();
  return redirect('/stable');

    // $brand->save();
   }
   public function subdelete(Request $request, $id)
   {
       // dd($id);exit;
      $brand = subCategory::find($id)->delete();
      return back();
   }
}
