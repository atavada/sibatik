<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
     * Display a listing of the resource
     */
    public function index()
    {
        $categories = Category::latest()->when(request()->q, function($categories) {
            $categories = $categories->where('name', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.category.index', compact('categories'), ['type_menu' => 'category']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create', ['type_menu' => 'category']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories'
        ]);

        $category = Category::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-') 
        ]);

        if($category){
            return redirect()->route('admin.category.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.category.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'), ['type_menu' => 'category']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name,'.$category->id
        ]);

        $category = Category::findOrFail($category->id);
        $category->update([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-') 
        ]);

        if($category){
            //redirect dengan pesan sukses
            return redirect()->route('admin.category.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.category.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if($category){
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
