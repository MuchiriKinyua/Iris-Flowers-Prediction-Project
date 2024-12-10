<!-- Model Name Field -->
<div class="col-sm-12">
    {!! Form::label('model_name', 'Model Name:') !!}
    <p>{{ $ml->model_name }}</p>
</div>

<!-- Version Field -->
<div class="col-sm-12">
    {!! Form::label('version', 'Version:') !!}
    <p>{{ $ml->version }}</p>
</div>

<!-- Accuracy Field -->
<div class="col-sm-12">
    {!! Form::label('accuracy', 'Accuracy:') !!}
    <p>{{ $ml->accuracy }}</p>
</div>

