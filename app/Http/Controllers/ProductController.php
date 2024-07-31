<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::all();
        return view('product.add_product',['categories'=>$categories]);
    }
//save
    public function ProductAdd(Request $request){
        Product::create([
            'name' => $request->name ,
            'price' => $request->price,
            'image' => 'https://templatemo.com/templates/templatemo_507_victory/img/cook_lunch.png',
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('product');
    }


    public function updateProduct($id)
    {
        $product = Product::where('id','=',$id)->first();
        $product = Product::find($id);
        return view('product.update_product',['product'=>$product]);
    }
    public function ProductUpdate($id,Request $request)
    {
        $product = Product::find($id);
        $data = [
            'name' => $request->name ,
            'price' => $request->price,
            'image' => 'https://templatemo.com/templates/templatemo_507_victory/img/cook_lunch.png',
            'description' => $request->description,
            'category_id' => $request->category_id
        ];
        $product->update($data);
        return redirect()->back();
    }
}
