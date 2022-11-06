<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suggestion;

class CommentSuggestion extends Model
{
    use HasFactory;
    protected $table = 'comment_suggestions';
    protected $guarded = [];

    public function suggestion()
    {
        return $this->belongsTo(Suggestion::class);
    }
}
