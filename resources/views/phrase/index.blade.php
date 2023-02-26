@extends('layouts.app')

@section('template_title')
    Frase
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin-bottom:0.5rem; padding-bottom:0.5rem">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Frases') }}
                            </span>

                            @can('admin-access')                            
                             <div class="float-right">
                                <a href="{{ route('phrase.create') }}" class="btn btn-sm float-right"  data-placement="left" style="background-color: #E7CEF6">
                                  {{ __('Crear Nueva Frase') }}
                                </a>
                              </div>
                            @endcan  
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class= "containerBook">    
                    
                        @foreach ($phrases as $phrase)

                            <div style="width: 30rem;">
                                <form action="{{ route('phrase.destroy',$phrase->id) }}" method="POST">
                                
                                    <a href="{{ route('phrase.show',$phrase->id) }}"><img src= "{{ $phrase->image }}" class="card-img-top" alt="{{ $phrase->phrase }}" style="padding:0.5rem;"></a>
                                    @can('admin-access')
                                    <a class="btn btn-sm " href="{{ route('phrase.edit',$phrase->id) }}" style="background-color: #E7CEF6"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm" style="background-color: #C3A0E5"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                    @endcan
                                </form>
                             </div>

                        @endforeach
            {{-- inicio codigo --}}
                
              @if ($buscarpor="author")
                   <a href="{{ route('phrase.search',$phrase->author) }}"></a>
               @else
                 echo "Autor no encontrado";
             @endif

           {{-- fin mi codigo   --}}
                    </div>
                
                </div>
                {!! $phrases->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
