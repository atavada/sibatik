<?php

namespace App\Http\Controllers\User;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RatingController extends Controller
{

    public function index()
    {
        return view('user.rating', ['type_menu' => 'rating']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'rating' => 'required',
                'content' => 'required'
            ],
        ); 

        $rating = Rating::create([
            'name' => $request->input('name'),
            'rating' => $request->input('rating'),
            'content' => $request->input('content'),
            'user_id' => auth('web')->user()->id
        ]);

        if($rating){
            return redirect()->route('user.rating')->with(['success' => 'Ulasan Berhasil Dikirim!']);
        }else{
            return redirect()->route('user.rating')->with(['error' => 'Ulasan Gagal Dikirim!']);
        }
    }
}