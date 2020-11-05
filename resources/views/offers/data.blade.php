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




{{--    @if(Session::has('success'))--}}

{{--        <div class="alert alert-success">--}}
{{--            {{Session::get('success')}}--}}
{{--        </div>--}}
{{--    @endif--}}


{{--    @if(Session::has('error'))--}}
{{--        <div class="alert alert-danger">--}}
{{--            {{Session::get('error')}}--}}
{{--        </div>--}}
                    {{--    @endif--}}
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
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
           <th scope="col">offer name</th>
            <th scope="col">offer price</th>
            <th scope="col">offer details</th>
            <th scope="col">offer image</th>
            <th scope="col">operation</th>
        </tr>
        </thead>
        <tbody>


        @foreach($offers as $offer)
            <tr>
                <th scope="row">{{$offer->id}}</th>
                <td>{{$offer->name}}</td>
                <td>{{$offer->price}}</td>
                <td>{{$offer->details}}</td>
                <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offer->image)}}"></td>

{{--                <td>--}}
{{--                    <a href="{{url('offers/edit/'.$offer -> id)}}" class="btn btn-success"> {{__('messages.update')}}</a>--}}
{{--                    <a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger"> {{__('messages.delete')}}</a>--}}
{{--                </td>--}}

                <td>
                    <a href="{{url('offers/edit/'.$offer->id)}}" class="btn btn-success">update</a>
                    <a href="{{route('offers.delete',$offer->id)}}" class="btn btn-danger">delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>



{{--        @if(Session::has('success'))--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                {{ Session::get('success') }}--}}
{{--            </div>--}}
{{--        @endif--}}


    </table>
    </body>
@stop


