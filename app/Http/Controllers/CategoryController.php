<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showProductsBySlug($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->paginate(6);

        return view('user.catalog.' . $slug, compact('category', 'products'));
    }
    public function filterProducts(Request $request)
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
