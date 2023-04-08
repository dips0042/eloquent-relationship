<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class songwriter extends Model
{
    use HasFactory;

    public function ipis() {
        return $this->hasOne(Ipi::class);
    }
}
