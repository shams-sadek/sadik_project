@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-4">

            {!! Form::open( [ 'url' => 'user-role', 'method'=> 'post' ]) !!}

            @include('user_role._form',['submit_button' => 'Save'])

            {!! Form::close() !!}

        </div>

    </div>
@endsection