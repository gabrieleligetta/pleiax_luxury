<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Brand extends BaseModel
{
    use HasFactory;

    public function models()
    {
        return $this->hasMany(Model::class);
    }
}
