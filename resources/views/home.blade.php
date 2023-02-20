@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-light float-right">
    <form class="form-inline">
  
      <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por Autor" aria-label="Search">
  
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </nav>
  <div>
        @foreach ($phrases as $phrase)
        <p>  {{$phrase->phrase}}</p>
        @endforeach
  </div>
@endsection


