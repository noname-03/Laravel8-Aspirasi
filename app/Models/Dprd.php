<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aspiration;

class Dprd extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Aspirations()
    {
        return $this->hasMany(Aspiration::class);
    }
}
