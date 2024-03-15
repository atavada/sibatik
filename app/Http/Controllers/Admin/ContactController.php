<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->when(request()->q, function($contacts) {
            $contacts = $contacts->where('name', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.contact.index', compact('contacts'), ['type_menu' => 'contact']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'), ['type_menu' => 'contact']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact = Contact::findOrFail($contact->id);
        $contact->update([
            'is_read' => $request->status
        ]);

        if($contact){
            return redirect()->route('admin.contact.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('admin.contact.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        if($contact) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
