<?php

namespace App\Http\Controllers;

use App\Models\AddCategory;
use App\Models\AddSubCategory;
use App\Models\product;
use Illuminate\Http\Request;

class InseertController extends Controller
{
    public function subcate()
    {
        try {
            // Fetch categories and subcategories
            $category = AddCategory::pluck('category');
            $subcategory = AddSubCategory::pluck('subcategory');

            if ($category->isEmpty() || $subcategory->isEmpty()) {
                return redirect()->back()->withErrors('No categories or subcategories available.');
            }

            return view('admin.InsertProduct', compact('category', 'subcategory'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Failed to load categories or subcategories: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            // Validate input
            $request->validate([
                'category' => 'required|string',
                'subcategory' => 'required|string',
                'product_name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Handle image uploads
            $image1 = $request->file('image1')->store('products', 'public');
            $image2 = $request->file('image2') ? $request->file('image2')->store('products', 'public') : null;
            $image3 = $request->file('image3') ? $request->file('image3')->store('products', 'public') : null;

            if (!$image1) {
                return redirect()->back()->withErrors('Failed to upload image1.');
            }

            // Save product to the database
            $product = product::create([
                'category' => $request->category,
                'subcategory' => $request->subcategory,
                'product_name' => $request->product_name,
                'description' => $request->description,
                'price' => $request->price,
                'image1' => $image1,
                'image2' => $image2,
                'image3' => $image3,
            ]);

            if (!$product) {
                return redirect()->back()->withErrors('Failed to save the product to the database.');
            }

            return redirect()->back()->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error adding product: ' . $e->getMessage());
        }
    }
}
