<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        $abouts = About::latest()->when(request()->q, function($abouts) {
            $abouts = $abouts->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.about.index', compact('abouts'), ['type_menu' => 'about']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create', ['type_menu' => 'about']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|max:2048',
            'description' => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/abouts', $image->hashName());

        $about = About::create([
            'title' => $request->input('title'),
            'image' => $image->hashName(),
            'description' => $request->input('description')
        ]);

        if ($about) {
            return redirect()->route('admin.about.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.about.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'), ['type_menu' => 'about']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $this->validate($request, [
            'title' => 'required'.$about->id,
            'image' => 'required|max:2048',
            'description' => 'required'
        ]);

        if($request->file('image') == "") {
            $about = About::findOrFail($about->id);
            $about->update([
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
        } else {
            Storage::disk('local')->delete('public/about/' . $about->image);

            $image = $request->file('image');
            $image->storeAs('public/abouts', $image->hashName());

            $about = About::findOrFail($about->id);
            $about->update([
                'title' => $request->input('title'),
                'image' => $image->hashName(),
                'description' => $request->input('description')
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $image = Storage::disk('local')->delete('public/abouts/' . $about->image);
        $about->delete();

        if($about){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
