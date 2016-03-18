@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {!! Form::label('user_id','User List', [ 'class' => 'control-label' ]) !!}
    {{ Form::select('id', $userLists, null, [ 'class' => 'select2 form-control', 'placeholder' => 'Please Select Type' ] ) }}

</div>

<div class="form-group">
    {!! Form::label('role_id','Select Roles', [ 'class' => 'control-label' ]) !!}
    {{ Form::select('role_id[]', $userRoles, null, [ 'class' => 'select2 form-control', 'multiple' ] ) }}
</div>


{!! Form::submit($submit_button, [ 'class' => 'btn btn-primary' ]) !!}

{!! link_to('user-role', 'Cancel', ['class' => 'btn btn-default']) !!}
