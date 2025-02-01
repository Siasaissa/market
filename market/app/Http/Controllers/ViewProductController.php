<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ViewProductController extends Controller
{
  public function view()
  {
      $products = Product::all(); // Fetch all products
    
      return view('sell.shop', compact('products'));
  }

  public function view1()
  {
    
    $products = Product::latest()->get()->take(4); // Fetch all products 
    return view('home.index', compact('products'));
  }

}
