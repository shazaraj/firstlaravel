@extends('layouts.app')
@extends('incloude.header')

<div>
        <h1 class="masthead-heading text-uppercase mb-0">laravelMail web page</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
</div>
@section('content')
<div class="content">
    <div class="title m-b-md">
        {{$details['title']}}
    </div>
    <p> {{$details['body']}}</p>
</div>
@endsection

