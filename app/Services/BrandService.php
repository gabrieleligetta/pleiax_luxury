<?php


namespace App\Services;


use App\Models\Brand;

class BrandService
{
    public function list() {
        return Brand::orderBy('name')->get();
    }

}
