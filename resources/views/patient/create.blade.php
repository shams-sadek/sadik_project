@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4">

            {!! Form::open( [ 'url' => 'patient', 'method'=> 'post', 'files' => true, 'onsubmit' => 'return checkCoords();' ]) !!}

            @include('patient._form',['submit_button' => 'Save'])

            {!! Form::close() !!}

        </div>

    </div>
@endsection