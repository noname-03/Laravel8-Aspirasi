<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CommentSuggestion;

class Suggestion extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'suggestions';

    public function commentSuggestions()
    {
        return $this->hasMany(CommentSuggestion::class);
    }
}
