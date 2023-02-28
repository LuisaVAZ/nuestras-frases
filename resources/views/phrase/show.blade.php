@extends('layouts.app')

@section('template_title')
    {{ $phrase->name ?? 'Show Phrase' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Frase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn" href="{{ route('phrase.index') }}" style="background-color: #C3A0E5"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $phrase->author }}
                        </div>
                        <div class="form-group">
                            <strong>Frase:</strong>
                            {{ $phrase->phrase }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src= "{{ $phrase->image }}" class="card-img-top" alt="{{ $phrase->phrase }}" style="width: 20rem;">
                        </div>
                        @can('admin-access')
                        <div class="form-group">
                            <strong>Slider (1-sí, 0-no):</strong>
                            {{ $phrase->is_onslider }}
                        </div>
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
