<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;
use App\Models\Aspiration;

class TitleSubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function aspirations()
    {
        return $this->hasMany(Aspiration::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
