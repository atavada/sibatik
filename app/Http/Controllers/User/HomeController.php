<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        $abouts = About::get();

        return view('user.index', compact('products', 'abouts'), ['type_menu' => 'home']);
    }
}
