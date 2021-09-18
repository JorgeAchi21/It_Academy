@extends('cool.homeBase')


@section('page')
    @php
     //variable de pagina activa
     $currentPage = "home";
    @endphp
    
@endsection



@section('content')

<div class="jumbotron">
    
    <p class="text-center h3" style="color:#b89138">Gold Hotel ***** </p>
    <img src="{{ asset('img/LogoApp.jpg') }}" class="mx-auto d-block" alt="Logo Gold Hotel">

</div>

@endsection
