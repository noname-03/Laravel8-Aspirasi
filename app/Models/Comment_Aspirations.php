<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspiration;

class Comment_Aspirations extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function aspiration()
    {
        return $this->belongsTo(Aspiration::class);
    }
}
