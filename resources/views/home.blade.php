<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Un día a la vez</title>
</head>
<body>
    

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Estado') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estás logead@!') }}
                </div>
            </div> 
        </div>
    </div>
</div>
<div id="explanation-container">
    <div class="explanation"> ¡Que nada te pare! Aquí tienes frases con palabras de apoyo y de ánimo de lo más especiales, que te motivarán y te inspirarán siempre que lo necesites en tu vida. ¡Guárdalas dando click a la estrella para poder recordarlas luego!</div>
</div>
{{-- SLIDER  --}}

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
      @foreach($phrases as $index => $phrase)
        @if($index == 0)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" class="active" aria-current="true" aria-label="Slide {{$index}}"></button>
        @else
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" aria-label="Slide {{$index}}"></button>
        @endif
      @endforeach

      
      {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button> --}}
    </div>

    <div class="carousel-inner">

      @foreach($phrases as $index => $phrase)
        @if($index == 0)
        <div class="carousel-item active">
          <img src="{{$phrase->image}}" class="img" alt="{{$phrase->phrase}}">
        </div>
        @endif
      <div class="carousel-item ">
        <img src="{{$phrase->image}}" class="img" alt="{{$phrase->phrase}}">
      </div>
      @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="button"><a href="{{ URL::route('phrase.index'); }}">
  <button id="landing-button">VER TODAS LAS FRASES</button> </a>
</div>
@endsection

</body>
</html>
