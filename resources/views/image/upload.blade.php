@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-md-4">

        {{--<img id="output" class="target" style="max-width: 600px; max-height: 300px; border: none;"/>--}}

        {{ Html::image(null, null, ['id'=>'output', 'style' => 'max-width: 640px; max-height: 360px;']) }}

        {!! Form::open( [ 'url' => 'image', 'method'=> 'post', 'files' => true, 'onsubmit' => 'return checkCoords();' ]) !!}

        <div class="form-group">
            {!! Form::label('photo','Select Image') !!}

            {!! Form::file('photo', [ 'class' => 'form-control', 'accept' => "image/*", 'onchange' => "loadFile(event)" ] ) !!}
        </div>


        {!! Form::hidden('modal', $modal, [ 'id' => 'modal' ]) !!}

        {!! Form::hidden('img_backup', $image, []) !!}

        {{ Form::hidden('x', null, ['id'=>'x']) }}
        {{ Form::hidden('y', null, ['id'=>'y']) }}
        {{ Form::hidden('w', null, ['id'=>'w']) }}
        {{ Form::hidden('h', null, ['id'=>'h']) }}

        {!! Form::submit('Submit', [ 'class' => 'btn btn-primary' ]) !!}


        {!! Form::close() !!}

    </div>

</div>


@endsection