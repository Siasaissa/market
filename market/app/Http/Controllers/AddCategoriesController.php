<?php

namespace App\Http\Controllers;

use App\Models\AddCategory;
use Illuminate\Http\Request;

class AddCategoriesController extends Controller
{
    public function AddCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        AddCategory::create([
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }
}
