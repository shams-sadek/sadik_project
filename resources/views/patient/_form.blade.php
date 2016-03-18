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
    {!! Form::label('vendor_type_id','Type', [ 'class' => 'control-label' ]) !!}
    {{ Form::select('vendor_type_id', $vendorTypeLists, null, [ 'class' => 'select2 form-control', 'placeholder' => 'Please Select Type' ] ) }}

</div>

<div class="form-group">
    {!! Form::label('food_list','Select Foods', [ 'class' => 'control-label' ]) !!}
    {{ Form::select('food_list[]', $foods, null, [ 'class' => 'select2 form-control', 'multiple' ] ) }}
</div>


<div class="form-group @if($errors->first('name')) has-error @endif">
    {!! Form::label('name','Name', [ 'class' => 'control-label' ]) !!}
    {!! Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}

    <span class="help-block">{{ $errors->first('name') }}</span>
</div>


<div class="form-group">
    {!! Form::label('mobile','Mobile No') !!}

    {!! Form::text('mobile', null, [ 'class' => 'form-control', 'placeholder' => 'Mobile No', 'data-mask'=>"99999-999-999" ] ) !!}
</div>

{{ Html::image( $image, null, ['id'=>'output', 'style' => 'max-width: 360px; max-height: 360px;']) }}

{{ Form::hidden('x', 0, ['id'=>'x']) }}
{{ Form::hidden('y', 0, ['id'=>'y']) }}
{{ Form::hidden('w', 360, ['id'=>'w']) }}
{{ Form::hidden('h', 360, ['id'=>'h']) }}

<div class="form-group">
    {!! Form::label('photo','Select Image') !!}

    {!! Form::file('photo', [ 'class' => 'form-control', 'accept' => "image/*", 'onchange' => "loadFile(event)" ] ) !!}
</div>


<div class="form-group @if($errors->first('date_of_birth')) has-error @endif">
    {!! Form::label('date_of_birth', 'Date of Birth') !!}

    <div class='input-group date' id='datetimepicker1'>
        {!! Form::text('date_of_birth', date('d/m/Y'),[ 'class' => 'form-control', 'placeholder' => 'Date of Birth', 'data-mask'=>"99/99/9999" ] ) !!}
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
    </div>

    <span class="help-block">{{ $errors->first('date_of_birth') }}</span>

</div>


<div class="form-group">
    {!! Form::label('address','Address') !!}

    {!! Form::textarea('address', null, [ 'class' => 'form-control', 'placeholder' => 'Address' ] ) !!}
</div>

{!! Form::submit($submit_button, [ 'class' => 'btn btn-primary' ]) !!}

{!! link_to('patient', 'Cancel', ['class' => 'btn btn-default']) !!}
