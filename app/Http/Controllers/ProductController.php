<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('user.catalog', compact('products', 'categories'));
    }
    public function filterByCategory(Request $request)
{
    $categorySlug = $request->input('category_slug');
    $category = Category::where('slug', $categorySlug)->first();
    if ($category) {
        $products = $category->products;
        return view('products.filtered', ['products' => $products]);
    } else {
        return response()->json(['error' => 'Category not found'], 404);
    }
}
}
