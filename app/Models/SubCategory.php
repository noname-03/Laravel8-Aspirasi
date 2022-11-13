<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\TitleSubCategory;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function titleSubCategories()
    {
        return $this->hasMany(TitleSubCategory::class);
    }
}
