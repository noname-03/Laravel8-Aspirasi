<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspiration;

class CommentAspirations extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'commentaspirations';

    public function aspiration()
    {
        return $this->belongsTo(Aspiration::class);
    }
}
