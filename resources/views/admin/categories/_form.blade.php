<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
    {!! Form::label('desc', 'Description', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('desc', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('desc') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('pict') ? ' has-error' : '' }}">
    {!! Form::label('pict', 'Picture', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        @if( isset($category) )
            <img id="img-preview" src="{{ asset( $category->pict ) }}" alt="your image" style="width:100%;">
            {!! Form::file('pict', null, ['class' => 'form-control', 'autofocus']) !!}
        @else
            <img id="img-preview" src="#" alt="your image" style="width:100%;">
            {!! Form::file('pict', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
        @endif

        <span class="help-block">
            <strong>{{ $errors->first('pict') }}</strong>
        </span>
    </div>
</div>
