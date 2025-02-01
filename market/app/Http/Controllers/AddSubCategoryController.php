<?php

namespace App\Http\Controllers;
use App\Models\AddSubCategory;
use App\Models\AddCategory;

use Illuminate\Http\Request;

class AddSubCategoryController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'Category' => 'required|string|max:255',
            'subcategory' => 'required|string|max:255',
        ]);

        AddSubCategory::create([
            'Category' => $request->Category,
            'subcategory' => $request->subcategory,
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }


    public function dropdown()
        {
            // Fetch all categories as an array of strings
            $category = AddCategory::pluck('category');
            
            // Pass the $category data to the 'admin.CreateSubcategory' view
            return view('admin.CreateSubcategory', compact('category'));
        }

    

    
}
