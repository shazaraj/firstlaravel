@extends('layout.master')
@extends('incloude.header')

@section('content')

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">update offers</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">Sales - Shopping - Get Offers</p>
        </div>
    </header>
    <body>

    <form method="POST" action="{{url('offers/update')}}" >

        @csrf
        <div class="form-group" >
            <b><label for="name">offer name</label></b>
            <input type="text" class="form-control" name="name" id="name" value="{{$offer->name}}">
        </div>
        <div class="form-group">
            <label for="price">offer price</label>
            <input type="number" class="form-control" name="price" id="name" value="{{$offer->price}}">
        </div>
        <div class="form-group">
            <label for="details">offer details</label>
            <input type="text" class="form-control" name="details" id="details" value="{{$offer->details}}">
        </div>
        <div class="form-group">
            <label for="image">offer image</label>
            <img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offer->image)}}">
        </div>

        <button type="submit" class="btn btn-primary" align="center">update offer</button>
    </form>


    </body>

@stop
