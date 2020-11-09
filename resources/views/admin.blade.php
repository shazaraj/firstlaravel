@extends('layout.master')
@extends('incloude.header')

{{--@section('content')--}}

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">Admin dashboard </h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="masthead-subheading font-weight-light mb-0">create - edit - update - delete </p>
        </div>
    </header>
<br>
        <div class="container text-center">
            <p class="alert alert-success font-weight-bold"> you are login as admin!</p>
        </div>

{{--@stop--}}


