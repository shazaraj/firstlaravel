<!DOCTYPE html>
<html lang="en">
<!-- header-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>laravel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL::asset('css/styles.css')}}" rel="stylesheet" />
</head>
<!-- body-->
<body id="page-top">

    @include('incloude.header')

        @yield('content')
        @yield('about')
        @yield('contact')
        @yield('home')

    @include('incloude.footer')

<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright  &&& © 2020</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>

    @if(Session::has('create'))
        <div class="alert alert-secondary" role="alert" align="center">
            {{Session::get('create')}}
        </div>
    @endif


{{--    <section class="page-section portfolio" id="portfolio">--}}
{{--        <div class="container">--}}
{{--            <!-- Portfolio Section Heading-->--}}
{{--            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">offers</h2>--}}
{{--            <!-- Icon Divider-->--}}
{{--            <div class="divider-custom">--}}
{{--                <div class="divider-custom-line"></div>--}}
{{--                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
{{--                <div class="divider-custom-line"></div>--}}
{{--            </div>--}}
{{--            <!-- Portfolio Grid Items-->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6 col-lg-4 mb-5">--}}
{{--                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">--}}
{{--                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">--}}
{{--                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid"  src="{{asset('images/offers/'.$offer->image)}}" alt="" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->

<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
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
{{--                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">{{$offer->name}}</h2>--}}
                        <br>
{{--                            <h4 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">{{$offer->price}}</h4>--}}
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
{{--                            <img class="img-fluid rounded mb-5" src="{{asset('images/offers/'.$offer->image)}}" alt="" />--}}
                            <!-- Portfolio Modal - Text-->
{{--                            <p class="mb-5">{{$offer->details}}</p>--}}
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{URL::asset('assets/mail/jqBootstrapValidation.js')}}"></script>
<script src="{{URL::asset('assets/mail/contact_me.js')}}"></script>
<!-- Core theme JS-->
<script src="{{URL::asset('js/scripts.js')}}"></script>
</body>
</html>
