<!-- Model Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_name', 'Model Name:') !!}
    {!! Form::text('model_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Version Field -->
<div class="form-group col-sm-6">
    {!! Form::label('version', 'Version:') !!}
    {!! Form::text('version', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Accuracy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accuracy', 'Accuracy:') !!}
    {!! Form::number('accuracy', null, ['class' => 'form-control']) !!}
</div>