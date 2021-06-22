@extends('base_layout')

@if(isset($title) && !empty($title))
    @section('title', $title)
@endif

@section('content')
    <div class="rwd-video">
        <iframe width="1920" height="1080" src="https://www.youtube.com/embed/q3LE8cl0IwE?loop=1&amp;autoplay=1&amp;mute=1&amp;playsinline=1&amp;&amp;playlist=q3LE8cl0IwE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="row text-center">
            <h1 class="golden"> Prenota ora la tua supercar! Prezzi a partire da 1000€ al giorno! </h1>
        </div>
        @if(session()->has('message'))

            <div class="alert alert-info" role="alert">
                <strong>{{session('message')}}</strong>
            </div>
        @endif
        <form action="{{route('cars.list')}}" method="GET"
              enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6 col-sm-12">
                    <label for="brands-select" class="golden">Brand:</label>
                    <select required class="form-select form-control" name="brands-select" id="brands-select">
                        <option value="" selected>Select one brand..</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="model" class="golden">Model:</label>
                    <select required class="form-select form-control" name="models-select" id="models-select" readonly>
                        <option value="" selected>Select one model..</option>
                    </select>
                </div>


                <div class="col-md-6 col-sm-12">
                    <label for="start_date" class="golden">Rental start:</label>
                    <input required type="datetime-local" name="start-date-select" id="start-date-select" class="form-control" value="">
                </div>

                <div class="col-md-6 col-sm-12">
                    <label for="end_date" class="golden">Rental End:</label>
                    <input required type="datetime-local" name="end-date-select" id="end-date-select" class="form-control" value="" readonly>
                </div>
            </div>
            <div class="row">
                @if(!empty($errors->get('*')))
                    <div class="badge badge-danger">
                        <ul style="display: flex">
                            @foreach ($errors->unique() as $error)
                                <li style="color: red;padding: 10px;">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-4 offset-4 text-center mt-5 mb-5">
                    {{csrf_field()}}
                    <button class="btn btn-outline-dark golden" type="submit">SEARCH</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.motorage.it/wp-content/uploads/2020/08/ferrari-roma-2020-01.jpg" class="d-block w-100 carousel-image" alt="roma">
                </div>
                <div class="carousel-item">
                    <img src="https://www.circusf1.com/f14/wp-content/uploads/2021/05/Ferrari-Monza-SP2.jpg" class="d-block w-100 carousel-image" alt="monza">
                </div>
                <div class="carousel-item">
                    <img src="https://statics.quattroruote.it/content/dam/quattroruote/it/news/nuovi-modelli/2020/06/17/lamborghini_urus_nasce_la_linea_personalizzazioni_pearl_capsule/gallery/rbig/2020-lamborghini-urus-pearl-capsule-01.jpg" class="d-block w-100 carousel-image" alt="img_3">
                </div>
                <div class="carousel-item">
                    <img src="https://www.motorionline.com/wp-content/uploads/2013/09/Lamborghini_Gallardo_LP560-4_Front-Right.jpg" class="d-block w-100 carousel-image" alt="img_4">
                </div>
                <div class="carousel-item">
                    <img src="https://www.mercedes-benz.it/passengercars/mercedes-benz-cars/models/s-class/mercedes-maybach-x222/design/design/_jcr_content/hotspotimage/image.MQ6.12.20190529112034.jpeg" class="d-block w-100 carousel-image" alt="img_5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row text-center">
            <p class="golden">Pleiax Luxury <?php echo date("Y"); ?></p>
        </div>
    <div>
@endsection
@section('footer')
    @parent
    <script>
        $( document ).ready(function() {
            let date = new Date();
            document.getElementById("start-date-select").setAttribute("min", getISOStringWithoutSecsAndMillisecs(date));
            document.getElementById("end-date-select").setAttribute("min", getISOStringWithoutSecsAndMillisecs(date));
            $(document).on('change', '#start-date-select', function () {
                let rent_start = $(this).val();
                let date = new Date(rent_start);
                date.setDate(date.getDate() + 1)
                document.getElementById("end-date-select").setAttribute("min", getISOStringWithoutSecsAndMillisecs(date));
                $('#end-date-select').removeAttr("readonly")
            });



            $.getJSON( "api/brands", function( data ) {
                $.each( data, function( key, brand ) {
                    $('#brands-select').append($('<option>', {
                        value: brand.id,
                        text: brand.name
                    }));
                });
            });

            $(document).on('change', '#brands-select', function () {
                let brand_id = $(this).val();
                $('#models-select').removeAttr("readonly").find('option').not(':first').remove();
                $.getJSON( "api/models/list?brand_id="+brand_id, function( data ) {
                    $.each( data, function( key, model ) {
                        $('#models-select').append($('<option>', {
                            value: model.id,
                            text: model.name
                        }));
                    });
                });

            })

        });

        function getISOStringWithoutSecsAndMillisecs(date) {
            const dStr = date.toISOString()

            return dStr.substring(0, dStr.indexOf(':', dStr.indexOf(':')+1))
        }
    </script>
@endsection
