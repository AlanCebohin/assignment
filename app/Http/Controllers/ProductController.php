<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->paginate(5),
            'categories' => Category::all(),
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'price' => 'required|numeric',
            'description' => 'required|max:255|min:3',
            'category_id' => 'required|numeric',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
            'brand' => $request->brand ?? '',
            'image' => $request->image ?? '',
            'category_id' => $request->category_id,
        ]);

        return response()->json(['data' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255|min:3',
            'price' => 'required|numeric',
            'description' => 'required|max:255|min:3',
            'category_id' => 'required|numeric',
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
            'brand' => $request->brand ?? $product->brand,
            'image' => $request->image ?? $product->image,
            'category_id' => $request->category_id,
        ]);

        return response()->json([
            'data' => $product,
            'message' => 'Product updated successfully'
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'data' => $product,
            'message' => 'Product deleted successfully'
        ]);
    }
}
