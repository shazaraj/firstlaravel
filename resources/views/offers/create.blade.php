@extends('layout.master')
@extends('incloude.header')

@section('content')

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">create offers</h1>
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
    @if(Session::has('success'))
            <div class="alert alert-success" role="alert" align="center">
                {{Session::get('success')}}
            </div>
    @endif
            <br>
    <form method="POST" action="{{route('offers.store')}}" >

        @csrf
        <div class="form-group" >
            <b><label for="name">offer name</label></b>
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
            @error('name')
            <small class="form-text text-danger"> {{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">offer price</label>
            <input type="number" class="form-control" name="price" id="name" placeholder="price">
            @error('price')
            <small class="form-text text-danger"> {{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="details">offer details</label>
            <input type="text" class="form-control" name="details" id="details" placeholder="details">
            @error('details')
            <small class="form-text text-danger"> {{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">offer image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="image">
            @error('image')
            <small class="form-text text-danger"> {{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" align="center">save offer</button>
    </form>


    </body>

@stop


