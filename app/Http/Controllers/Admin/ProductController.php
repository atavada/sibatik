<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProductController extends Controller
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
        $products = Product::latest()->when(request()->q, function($products) {
            $products = $products->where('name', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.product.index', compact('products'), ['type_menu' => 'product']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.product.create', compact('categories'), ['type_menu' => 'product']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|max:2048',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            // 'shopee_url' => 'required',
            // 'tokopedia_url' => 'required',
            'category_id' => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        $product = Product::create([
            'image' => $image->hashName(),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'shopee_url' => $request->input('shopee_url'),
            'tokopedia_url' => $request->input('tokopedia_url'),
            'slug' => Str::slug($request->input('name'), '-'),
            'category_id' => $request->input('category_id'),
            'status' => $request->input('status')
        ]);

        if($product){
            return redirect()->route('admin.product.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('admin.product.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::latest()->get();
        return view('admin.product.edit', compact('product', 'categories'), ['type_menu' => 'product']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'image' => 'image|max:2048',
            'name' => 'required'.$product->id,
            'description' => 'required',
            'price' => 'required',
            // 'shopee_url' => 'required',
            // 'tokopedia_url' => 'required',
            'category_id' => 'required'
        ]);

        if($request->file('image') == "") {
            $product = Product::findOrFail($product->id);
            $product->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'shopee_url' => $request->input('shopee_url'),
                'tokopedia_url' => $request->input('tokopedia_url'),
                'slug' => Str::slug($request->input('name'), '-'),
                'category_id' => $request->input('category_id'),
                'status' => $request->input('status')
            ]);
        } else {
            Storage::disk('local')->delete('public/products/'.$product->image);

            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            $product = Product::findOrFail($product->id);
            $product->update([
                'image' => $image->hashName(),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'shopee_url' => $request->input('shopee_url'),
                'tokopedia_url' => $request->input('tokopedia_url'),
                'slug' => Str::slug($request->input('name'), '-'),
                'category_id' => $request->input('category_id'),
                'status' => $request->input('status')
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $image = Storage::disk('local')->delete('public/products/'.$product->image);
        $product->delete();

        if($product){
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
