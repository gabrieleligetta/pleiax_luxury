<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Car extends BaseModel
{
    use HasFactory;

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function brand()
    {
        return $this->hasOneThrough(Brand::class,Model::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
