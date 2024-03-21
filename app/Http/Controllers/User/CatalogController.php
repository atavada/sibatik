<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('user.catalog', compact('categories', 'products'), ['type_menu' => 'catalog']);
    }

    public function showCategory($slug)
    {
        $cat = Category::where('slug', $slug)->first();
        $products = $cat->products;
        $categories = Category::all();

        return view('user.catalog.category', compact('categories', 'products', 'cat'), ['type_menu' => 'catalog']);
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::all();

        return view('user.catalog.product', compact('categories', 'product'), ['type_menu' => 'catalog']);
    }
}
