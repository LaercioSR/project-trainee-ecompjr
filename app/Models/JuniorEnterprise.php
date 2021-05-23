<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuniorEnterprise extends Model
{
    use HasFactory;

    public function federation() {
        return $this->belongsTo(Federation::class);
    }
}
