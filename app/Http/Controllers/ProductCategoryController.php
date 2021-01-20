<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{

    public function productCategories()
    {
        $productCategories = ProductCategory::orderby('created_at','desc')->get();
        return view('frontend/page/productCategories',['productCategories' => $productCategories]);
    }
    public function index()
    {

        $productCategories = ProductCategory::orderby('created_at','desc')->paginate(10);
        return view('backend.pages.productCategory.index', ['productCategories' =>  $productCategories]);
    }
    public function create()
    {

        return view('backend.pages.productCategory.create');
    }

    public function store(Request $request)
    {
        $category = new ProductCategory();

        $category->name = $request->input("name");
        if ($request->hasFile('image')) {

            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $category->image_url = $url;
        }

        $result = $category->save();


        if ($result) {
            return redirect()->route('productCategory.index')->with(session()->flash('success', ' Created!'));
        } else {
            return redirect()->route('productCategory.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function edit($id)
    {

        $productCategory = ProductCategory::find($id);
        return view('backend.pages.productCategory.edit', ["productCategory" => $productCategory]);
    }

    public function update(Request $request, $id)
    {


        $category = ProductCategory::find($id);
        $category->name = $request->input("name");
        if ($request->hasFile('image')) {
            if( $category->image_url){
                APIHelper::removeImage($category->image_url);
            }
            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $category->image_url = $url;
        }
        $result = $category->save();

        if ($result) {
            return redirect()->route('productCategory.index')->with(session()->flash('success', ' Updated!'));
        } else {
            return redirect()->route('productCategory.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function destroy($id)
    {
        $result = ProductCategory::find($id);
        if( $result->image_url){
            APIHelper::removeImage($result->image_url);
        }
        $result->delete();
        if ($result) {
            return redirect()->route('productCategory.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('productCategory.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
