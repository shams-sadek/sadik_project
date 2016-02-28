@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    {{ Html::link('patient/create', 'Add New', ['class'=> 'btn btn-primary pull-right']) }}
                </div>
            </div>

            <br/>

            <div class="row">
                <div class="col-md-12">
                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped" data-url="{{ url('patient') }}">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Date of Birth</th>
                            <th>Operations</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection