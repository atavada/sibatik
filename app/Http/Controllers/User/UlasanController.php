<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UlasanController extends Controller
{
    public function index()
    {
        return view('user.ulasan', ['type_menu' => 'ulasan']);
    }
}
