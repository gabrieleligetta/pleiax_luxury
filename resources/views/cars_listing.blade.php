@extends('base_layout')

@if(isset($title) && !empty($title))
    @section('title', $title)
@endif

@section('content')
    <div class="container">
        <div class="row text-center">
            <h1 class="golden d-inline-block whitespace-nowrap mb-5"> Le nostre macchine disponibili dal {{$rent_start}} al {{$rent_end}}: </h1>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-info" role="alert">
                <strong>{{session('message')}}</strong>
            </div>
        @endif
        <div class="row">
            @foreach($cars as $car)
                <div class="col-md-3 col-sm-1">
                    <div class="card" style="background-color: black;">
                        <img class="card-img-top" src="{{$car->model->image_url}}" alt="Card image cap">
                        <div class="card-body golden" style="border-left: 1px solid #d4af37">
                            <h5 class="card-title">{{$car->model->brand->name}}&nbsp;{{$car->model->name}}</h5>
                            <p class="card-text">Colore:&nbsp;{{$car->color}}</p>
                            <p class="card-text">Targa:&nbsp;{{$car->license_plate}}</p>
                            <p class="card-text">Costo orario:&nbsp;{{$car->price}}€</p>
                            <p class="card-text">Costo totale:&nbsp;{{$car->price * $rent_hours}}€</p>
                            <a href="#focus" type="button" class="btn btn-dark pacchetti">
                                Noleggia ora!
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5" id="div_pacchetti" style="display: none">
            @foreach($packages as $package)
                <div class="col" id="focus">
                    <div class="card text-center shadow border-dark">
                        <div class="card-header" style="background-color: #d4af37">
                            <h3>{{$package->name}}</h3>
                            <h5>{{$package->price}}</h5>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Extra Km</h5>
                            <p class="card-text">{{$package->kilometers}} km</p>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-dark">Supporto 24/24</li>
                            <li class="list-group-item border-dark">Assicurazione contro i tornado di squali!</li>
                        </ul>

                        <div class="card-footer">
                            <a href="" class="btn btn-outline-dark">Lo voglio!</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('footer')
    @parent
    <script>
        $( ".pacchetti" ).click(function() {
            $( "#div_pacchetti" ).toggle();
        });
    </script>
@endsection
