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
                            <a class="btn btn-primary" href="{{ route('phrase.index') }}"> Atras</a>
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
                            {{ $phrase->image }}
                        </div>
                        @can('admin-access')
                        <div class="form-group">
                            <strong>Slider:</strong>
                            {{ $phrase->is_onslider }}
                        </div>
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
