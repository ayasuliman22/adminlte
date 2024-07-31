<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // View html
    public function addCategory(){
        return view('category.add_category');
    }
//save
    public function CategoryAdd(Request $request){
        Category::create([
            'name' => $request->categoryName
        ]);

        return redirect()->route('Category');
    }
}
