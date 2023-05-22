<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    public function GoToMainPage()
    {
        $categories = Category::all();
    	return view('home', ['categories' => $categories]);
    }

    public function GoToCategoryPage($catName)
    {
        $category = Category::where('eng_category_name', $catName)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view('category', ['category' => $category, 'products' => $products]);
    }
}
