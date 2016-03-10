@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-md-4">

        {{--<img id="output" class="target" style="max-width: 600px; max-height: 300px; border: none;"/>--}}

        {{ Html::image('images/pp_size.png', null, ['id'=>'output', 'style' => 'max-width: 360px; max-height: 360px;']) }}

        {!! Form::open( [ 'url' => 'image', 'method'=> 'post', 'files' => true, 'onsubmit' => 'return checkCoords();' ]) !!}

        <div class="form-group">
            {!! Form::label('photo','Select Image') !!}

            {!! Form::file('photo', [ 'class' => 'form-control', 'accept' => "image/*", 'onchange' => "loadFile(event)" ] ) !!}
        </div>

        {{ Form::hidden('x', 0, ['id'=>'x']) }}
        {{ Form::hidden('y', 0, ['id'=>'y']) }}
        {{ Form::hidden('w', 360, ['id'=>'w']) }}
        {{ Form::hidden('h', 360, ['id'=>'h']) }}

        {!! Form::submit('Submit', [ 'class' => 'btn btn-primary' ]) !!}


        {!! Form::close() !!}

    </div>

</div>


@endsection