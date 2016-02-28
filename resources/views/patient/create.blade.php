@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4">

            {!! Form::open( [ 'url' => 'patient', 'method'=> 'post' ]) !!}

            @include('patient._form',['submit_button' => 'Save'])

            {!! Form::close() !!}

        </div>

    </div>
@endsection