<div class="form-group @if($errors->first('name')) has-error @endif">
    {!! Form::label('name','Patient Name', [ 'class' => 'control-label' ]) !!}
    {!! Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Patient Name' ]) !!}

    <span class="help-block">{{ $errors->first('name') }}</span>
</div>

<div class="form-group">
    {!! Form::label('mobile','Mobile No') !!}

    {!! Form::text('mobile', null, [ 'class' => 'form-control', 'placeholder' => 'Mobile No' ] ) !!}
</div>

<div class="form-group">
    {!! Form::label('date_of_birth','Date of Birth') !!}

    <div class='input-group date' id='datetimepicker1'>
        {!! Form::text('date_of_birth', null, [ 'class' => 'form-control', 'placeholder' => 'Date of Birth' ] ) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
    </div>

</div>


<div class="form-group">
    {!! Form::label('address','Address') !!}

    {!! Form::textarea('address', null, [ 'class' => 'form-control', 'placeholder' => 'Address' ] ) !!}
</div>

{!! Form::submit('Submit', [ 'class' => 'btn btn-primary' ]) !!}

{!! link_to('patient', 'Cancel', ['class' => 'btn btn-default']) !!}