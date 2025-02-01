<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable timestamps if not in the table

    protected $fillable = [
        'category',
        'subcategory',
        'product_name',
        'description',
        'price',
        'image1',
        'image2',
        'image3',
    ];
}
