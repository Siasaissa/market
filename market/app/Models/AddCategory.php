<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    public function subcategories()
    {
        return $this->hasMany(AddSubCategory::class, 'Categories', 'category');
    }
}
