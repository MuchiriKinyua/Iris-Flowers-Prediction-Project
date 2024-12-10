<!-- Data Id Field -->
<div class="col-sm-12">
    {!! Form::label('data_id', 'Data Id:') !!}
    <p>{{ $prediction->data_id }}</p>
</div>

<!-- Predicted Species Field -->
<div class="col-sm-12">
    {!! Form::label('predicted_species', 'Predicted Species:') !!}
    <p>{{ $prediction->predicted_species }}</p>
</div>

<!-- Confidence Score Field -->
<div class="col-sm-12">
    {!! Form::label('confidence_score', 'Confidence Score:') !!}
    <p>{{ $prediction->confidence_score }}</p>
</div>

<!-- Model Version Field -->
<div class="col-sm-12">
    {!! Form::label('model_version', 'Model Version:') !!}
    <p>{{ $prediction->model_version }}</p>
</div>

