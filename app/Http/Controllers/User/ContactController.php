<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact', ['type_menu' => 'contact']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'user_id' => auth('web')->user()->id
        ]);

        if($contact){
            return redirect()->route('user.contact')->with(['success' => 'Pesan Berhasil Dikirim!']);
        }else{
            return redirect()->route('user.contact')->with(['error' => 'Pesan Gagal Dikirim!']);
        }
    }
}
