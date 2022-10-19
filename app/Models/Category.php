<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspiration;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function aspirations()
    {
        return $this->hasMany(Aspiration::class);
    }
}
