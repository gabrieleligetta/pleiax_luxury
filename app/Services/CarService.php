<?php


namespace App\Services;

use App\Models\Car;
use App\Models\Rental;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CarService
{
    public function list($rent_start, $rent_end, $model_id) {
        $rent_start = Carbon::parse($rent_start)->format('Y-m-d H:i');
        $rent_end = Carbon::parse($rent_end)->format('Y-m-d H:i');
        return Car::whereHas('rentals', function($query) use($rent_start, $rent_end) {
            $query->where("start_date", ">" ,  $rent_start)
                ->orWhere("end_date", "<", $rent_start)
                ->where("end_date", "<",  $rent_end)
                ->orWhere("start_date", ">", $rent_end);
        })
        ->orWhereDoesntHave('rentals')
        ->where('model_id', $model_id)
        ->get();
    }
}
