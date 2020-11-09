@extends('layout.master')
@extends('incloude.header')

@section('content')

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">get all offers</h1>
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

            @if(Session::has('create'))
                <div class="alert alert-secondary" role="alert" align="center">
                    {{Session::get('create')}}
                </div>
            @endif
            @if(Session::has('update'))
                <div class="alert alert-success" role="alert" align="center">
                    {{Session::get('update')}}
                </div>
             @endif
            @if(Session::has('delete'))
                <div class="alert alert-danger" role="alert" align="center">
                    {{Session::get('delete')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert" align="center">
                    {{Session::get('error')}}
                </div>
            @endif
            <br>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <div class="row">
        @foreach($offers as $offer)
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <h3>{{$offer->id}}</h3>
                    <img class="img-fluid" style="width: 150px; height: 150px;" src="{{asset('images/offers/'.$offer->image)}}"alt="" />
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
            @foreach($offers as $modelOffer)
            <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">

                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">name : {{$modelOffer->name}}</h2>
                                        <br>
                                    <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{asset('images/offers/'.$modelOffer->image)}}" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                        <h4 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"> price : {{$modelOffer->price}}</h4>
                                        <br>
                                        <p class="mb-5"> details : {{$modelOffer->details}}</p>
                                        <button href="{{url('offers/edit/'.$modelOffer->id)}}" class="btn btn-success">
                                            <i class="fas fa-edit"></i>
                                            update</button>
                                        <button href="{{route('offers.delete',$modelOffer->id)}}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                            delete</button>
                                        <button class="btn btn-primary" data-dismiss="modal">
                                            <i class="fas fa-times "></i>
                                            Close</button>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </body>

@stop


