<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Color;
use App\Models\size;
use Illuminate\Support\Facades\Redirect;

class brandController extends Controller
{
   public function brandview()
   {

    return view('admin.brandform');
   }
   public function store(Request $request)
   {
    // dd($request);
    // exit;
       $brand = new Brand();
       $brand->name = $request->input('name');
       $brand->save();

       return redirect('/table');
   }
   public function brandtables(Request $request)
   {
    // dd($request);exit;
       $brands = Brand::all();
       return view('admin.brandTable', compact('brands'));
   }
   public function brandedit($id)
   {
    // dd($id);exit;
    $brands = Brand::find($id);
    // echo '<pre>';print_r($brands->id);die;
    return view('admin.editbrand', compact('brands'));
   }
   public function brandUpdate(Request $request, $id)
   {
//echo "ff";exit;
// $brand = Brand::find($id);
  $brand = Brand::find($id);
 // print_r($brand);exit;
$brand->name = $request->name;
// Update other fields as needed
$brand->save();
  return redirect('/table');
    // Update other fields as needed
    // $brand->save();
   }
   public function branddelete(Request $request, $id)
{
    // dd($id);exit;
   $brand = Brand::find($id)->delete();
   return back();
}
public function cview()
{
return view('admin.colorform');
}
public function ctable(Request $request)
{
    $color = Color::all();
    return view('admin.colorTable', compact('color'));
}
public function cstore(Request $request)
{
    // dd($request);
    $color = new Color();
    $color->color_name = $request->input('name');
    $color->save();

    return redirect('/cotabl');
}
public function coloredit($id)
{
 // dd($id);exit;
 $color = Color::find($id);
 // echo '<pre>';print_r($brands->id);die;
 return view('admin.color-edit', compact('color'));
}
public function colorUpdate(Request $request, $id)
   {
//echo "ff";exit;
// $brand = Brand::find($id);
  $color = Color::find($id);
 // print_r($brand);exit;
$color->color_name = $request->name;
// Update other fields as needed
$color->save();
  return redirect('/cotabl');
    // Update other fields as needed
    // $brand->save();
   }
   public function colordelete(Request $request, $id)
   {
       // dd($id);exit;
      $color = Color::find($id)->delete();
      return back();
   }

//    sizes  controller
public function sview()
{
return view('sizeform');
}
public function sstore(Request $request)
{
    // dd($request);
    $size = new size();
    $size->size_name = $request->input('name');
    $size->save();

    return redirect('/sitabl');
}
public function stable(Request $request)
{
    $size = size::all();
    return view('sizeTable', compact('size'));
}
public function sizeedit($id)
{
 // dd($id);exit;
 $size = size::find($id);
 // echo '<pre>';print_r($brands->id);die;
 return view('size-edit', compact('size'));
}
public function sizedelete(Request $request, $id)
{
    // dd($id);exit;
   $size = size::find($id)->delete();
   return back();
}
public function sizeUpdate(Request $request, $id)
   {

  $size = size::find($id);

$size->size_name = $request->name;
// Update other fields as needed
$size->save();
  return redirect('/sitabl');
    // Update other fields as needed
    // $brand->save();
   }
  
}
