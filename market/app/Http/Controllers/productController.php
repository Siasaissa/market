<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function managep()
    {
        $products = Product::all(['id', 'image1', 'image2', 'image3', 'product_name', 'price', 'category', 'updated_at']);
        return view('admin.ManageProduct', compact('products'));
    }




    public function edit($id)
    {
        $edit = Product::findOrFail($id);
        return view('admin.ManageProduct', compact('edit'));
    }





    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'product_name' => 'required|string',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image1')) {
            if ($product->image1) {
                Storage::disk('public')->delete($product->image1);
            }
            $imagePath = $request->file('image1')->store('products', 'public');
            $validated['image1'] = $imagePath;
        } else {
            $validated['image1'] = $product->image1;
        }

        $product->update($validated);

        return redirect()->route('admin.ManageProduct')->with('success', 'Product successfully updated');
    }


    


    public function delete($id){
        $product = Product::findOrFail($id);
        if($product->image1){
            Storage::disk('public')->delete($product->image1);
        }
        $product->delete();
        return redirect()->route('admin.ManageProduct')->with('success','Product successfully updated');   
        }
    }

