<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarListingRequest;
use App\Models\Package;
use App\Services\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CarController extends Controller
{
    private $car_service;

    public function __construct(CarService $car_service)
    {
        $this->car_service = $car_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list(CarListingRequest $cars_request)
    {
        $rent_start = $cars_request->get('start-date-select');
        $rent_end = $cars_request->get('end-date-select');
        $model_id = $cars_request->get('models-select');
        $cars = $this->car_service->list($rent_start,$rent_end,$model_id);
        $rent_start = Carbon::parse($rent_start)->format('d-m-Y H:i');
        $rent_end = Carbon::parse($rent_end)->format('d-m-Y H:i');
        $rent_hours = round((strtotime($rent_end) - strtotime($rent_start))/3600, 1);
        $packages = Package::all();
        $title = 'Pleiax Luxury | Listing';
        return view('cars_listing',compact(['title','cars','packages','rent_start','rent_end','rent_hours']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
