@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4">

            {!! Form::model($info, [ 'method' => 'PUT', 'url' => [ "user-role", $info->id ] ]) !!}

                @include('user_role._form',['submit_button' => 'Update'])

            {!! Form::close() !!}

        </div>

    </div>
@endsection