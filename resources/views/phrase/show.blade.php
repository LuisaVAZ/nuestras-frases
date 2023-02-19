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
                            <span class="card-title">Show Phrase</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('phrase.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Author:</strong>
                            {{ $phrase->author }}
                        </div>
                        <div class="form-group">
                            <strong>Phrase:</strong>
                            {{ $phrase->phrase }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $phrase->image }}
                        </div>
                        <div class="form-group">
                            <strong>Is Onslider:</strong>
                            {{ $phrase->is_onslider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
