@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4">

            {!! Form::model($info, [ 'method' => 'PUT', 'url' => [ "patient", $info->id ] ]) !!}

                @include('patient._form',['submit_button' => 'Update'])

            {!! Form::close() !!}

        </div>

    </div>
@endsection