<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('author', $phrase->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('frase') }}
            {{ Form::text('phrase', $phrase->phrase, ['class' => 'form-control' . ($errors->has('phrase') ? ' is-invalid' : ''), 'placeholder' => 'Frase']) }}
            {!! $errors->first('phrase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('image', $phrase->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slider (1-sí, 0-no)') }}
            {{ Form::text('is_onslider', $phrase->is_onslider, ['class' => 'form-control' . ($errors->has('is_onslider') ? ' is-invalid' : ''), 'placeholder' => 'Slider (1-yes, 0-no)']) }}
            {!! $errors->first('is_onslider', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div style="width: 50%; overflow: hidden; padding-top: 1rem">
        <div class="float-right" style="width: 100px; float: left;">
            <a class="btn" style="background-color: #C3A0E5" href="{{ route('phrase.index') }}"> Cancelar</a>
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn" style="background-color: #C3A0E5">Enviar</button>
        </div>
    </div>
</div>