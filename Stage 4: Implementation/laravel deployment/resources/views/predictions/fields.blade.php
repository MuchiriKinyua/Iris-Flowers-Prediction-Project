<!-- Data Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_id', 'Data Id:') !!}
    {!! Form::number('data_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Predicted Species Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predicted_species', 'Predicted Species:') !!}
    {!! Form::text('predicted_species', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Confidence Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confidence_score', 'Confidence Score:') !!}
    {!! Form::number('confidence_score', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Version Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model_version', 'Model Version:') !!}
    {!! Form::text('model_version', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>