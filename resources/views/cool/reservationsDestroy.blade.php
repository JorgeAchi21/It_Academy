@extends('cool.homeBase')


@section('page')
    @php
     //variable de pagina activa
     $currentPage = "rooms";
    @endphp
    
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">ACTION INFO:</h2>

        <p class="text-center h3 text-primary"><span class="font-weight-bold">RESERVATION</span> eliminated:</p>

        <p class="text-center">The register id: <strong>{{$id}}</strong> was corretly deleted...</p>
        <br>
        <div class="container">
            <div class="row">

                <div class="col text-center">
                    <a href="{{route('cool.reservationsShow')}}" class="btn btn-primary text-center" >Return to RESERVATION list.</a>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection