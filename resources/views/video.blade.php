@extends('layout.master')
@extends('incloude.header')

@section('content')

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <br>


                <h1 class="masthead-heading text-uppercase mb-0"> youtube videos</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
{{--                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
                    <div class="container d-flex align-items-center flex-column">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aQi_l1-xvfI" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <br>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="container d-flex align-items-center flex-column">
                    <p class="masthead-subheading font-weight-light mb-0"> youtube viewer ({{$video -> viewer}})</p>
                </div>
                <div class="container d-flex align-items-center flex-column">
                    <p class="masthead-subheading font-weight-light mb-0"> {{$video -> video_name}}</p>
                </div>
                <p class="masthead-subheading font-weight-light mb-0">watch - share - subscribes</p>
            </div>
        </header>

@stop

