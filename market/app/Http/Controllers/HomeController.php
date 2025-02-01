<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\user;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        return view('home.index');
    }
    public function manage(){
        return view('admin.ManageOrder');
    }
    public function user(){
        return view('admin.ManageUser');
    }
    public function insert(){
        return view('admin.InsertProduct');
    }
    public function product(){
        return view('admin.ManageProduct');
    }
    public function category(){
        return view('admin.createCategory');
    }
    public function subcategory(){
        return view('admin.CreateSubcategory');
    }
    public function userlogs(){
        return view('admin.userlogs');
    }
    public function cart($id){
        $Product_Id = $id;

        $user = Auth::user();
        $User_Id = $user->id;

        $data = new cart();
        $data->User_Id=$User_Id;

        $data->Product_Id=$Product_Id;

        $data->save();
        return redirect()->route('cart.view'); // Replace 'cart.view' with the actual route name for the cart page.

    }

    public function showCart()
    
    {
        $userId = Auth::id(); // Get the logged-in user ID
        $cartItems = Cart::where('User_Id', $userId)->with('product')->get();

        $totalCost = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * 1; // Replace 1 with quantity if available
        });
    
        return view('cart.cart', compact('cartItems', 'totalCost'));
    }
}