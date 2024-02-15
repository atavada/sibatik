<?php

namespace App\Http\Controllers;

use GeminiAPI\Laravel\Facades\Gemini;
use Illuminate\Http\Request;

class GeminiController extends Controller
{
    public function generateText(Request $request)
    {
        $text = $request->input('text');
        $response = Gemini::generateText($text);
        return $this->showForm($response);
    }

    public function showForm($response = null)
    {
        return view('home')->with('response', $response);
    }
}
