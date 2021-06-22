<?php


namespace App\Services;

use App\Models\Model;

class ModelService
{
    public function list($brand_id = null) {
        return (isset($brand_id)) ? Model::where('brand_id', $brand_id)->orderBy('name')->get() : Model::orderBy('name')->get();
    }

}
