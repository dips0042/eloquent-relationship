<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipi extends Model
{
    use HasFactory;

    public function songwriters() {
        return $this->belongsTo(Songwriter::class);
    }

    public function songs() {
        return $this->hasMany(Song::class);
    }
}
