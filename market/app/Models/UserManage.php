<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserManage extends Model
{
   use HasFactory;

   protected $table='users';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'usertype',
        'address',
    ];
        


}
