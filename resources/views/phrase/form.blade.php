<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('author', $phrase->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => 'Author']) }}
            {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('frase') }}
            {{ Form::text('phrase', $phrase->phrase, ['class' => 'form-control' . ($errors->has('phrase') ? ' is-invalid' : ''), 'placeholder' => 'Phrase']) }}
            {!! $errors->first('phrase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('image', $phrase->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slider (1=sí, 0=no)') }}
            {{ Form::text('is_onslider', $phrase->is_onslider, ['class' => 'form-control' . ($errors->has('is_onslider') ? ' is-invalid' : ''), 'placeholder' => 'Is Onslider']) }}
            {!! $errors->first('is_onslider', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>