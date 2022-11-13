<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TitleSubCategory;
use App\Models\Dprd;
use App\Models\CommentAspirations;

class Aspiration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function TitleSubCategory()
    {
        return $this->belongsTo(TitleSubCategory::class);
    }

    public function dprd()
    {
        return $this->belongsTo(Dprd::class);
    }

    public function CommentAspirations()
    {
        return $this->hasMany(CommentAspirations::class);
    }
}
