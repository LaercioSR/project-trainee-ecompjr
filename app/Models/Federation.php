<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    use HasFactory;

    public function juniorEnterprises() {
        return $this->hasMany(JuniorEnterprise::class);
    }
}
