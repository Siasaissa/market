<?php

namespace App\Http\Controllers;

use App\Models\UserManage;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function userr(){
        $users = UserManage::all(['id','name','email','phone','usertype','address']);

        return view('admin.ManageUser', compact('users'));

    }
}
