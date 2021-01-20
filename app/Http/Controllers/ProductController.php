<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\Helpers\APIHelper;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id)
    {
        $products = Product::where('category_id',$id)->orderby('created_at','desc')->paginate(1);
        return view('frontend/page/product',['products' => $products]);
    }

    public function index()
    {

        $products = Product::orderby('created_at','desc')->paginate(20);
        foreach ($products as $product) {

            $product->category = ProductCategory::find($product->category_id)->name;
        }
        return view('backend.pages.products.index', ['products' =>  $products]);
    }
    public function create()
    {

        $categories = ProductCategory::all();
        return view('backend.pages.products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->input("name");
        $product->link = $request->input("link");
        $product->category_id = $request->input("category");
        if ($request->hasFile('image')) {

            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $product->image_url = $url;
        }


        $result = $product->save();


        if ($result) {
            return redirect()->route('product.index')->with(session()->flash('success', ' Created!'));
        } else {
            return redirect()->route('product.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }

    public function edit($id)
    {

        $product = Product::find($id);
        $categories = ProductCategory::all();
        return view('backend.pages.products.edit', ["product" => $product], ['categories' => $categories]);
    }

    public function update(Request $request, $id)
    {


        $product = Product::find($id);
        $product->name = $request->input("name");
        $product->link = $request->input("link");
        $product->category_id = $request->input("category");
        if ($request->hasFile('image')) {
            if( $product->image_url){
                APIHelper::removeImage($product->image_url);
            }
            $url = APIHelper::uploadFileToStorage($request->file('image'), 'public/common_media');
            $product->image_url = $url;
        }
        $result = $product->save();

        if ($result) {
            return redirect()->route('product.index')->with(session()->flash('success', ' Updated!'));
        } else {
            return redirect()->route('product.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
    public function destroy($id)
    {
        $result = Product::find($id);
        if( $result->image_url){
            APIHelper::removeImage($result->image_url);
        }
        $result->delete();
        if ($result) {
            return redirect()->route('product.index')->with(session()->flash('success', 'Deleted!'));
        } else {
            return redirect()->route('product.index')->with(session()->flash('error', 'Something went wrong!'));
        }
    }
}
