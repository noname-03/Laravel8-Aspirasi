<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Dprd;
use App\Models\Comment_Aspirations;

class Aspiration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function dprd()
    {
        return $this->belongsTo(Dprd::class);
    }

    public function comment_aspirations()
    {
        return $this->hasMany(Comment_Aspirations::class);
    }
}
