@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    {{ Html::link('user-role/create', 'Add New', ['class'=> 'btn btn-primary pull-right']) }}
                </div>
            </div>

            <br/>

            <div class="row">
                <div class="col-md-12">
                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped" data-url="{{ url('user-role') }}">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Operations</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection