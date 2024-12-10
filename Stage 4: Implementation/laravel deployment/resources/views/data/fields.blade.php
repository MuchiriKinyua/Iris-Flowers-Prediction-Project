<!-- Sepal Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sepal_length', 'Sepal Length:') !!}
    {!! Form::number('sepal_length', null, ['class' => 'form-control']) !!}
</div>

<!-- Sepal Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sepal_width', 'Sepal Width:') !!}
    {!! Form::number('sepal_width', null, ['class' => 'form-control']) !!}
</div>

<!-- Petal Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petal_length', 'Petal Length:') !!}
    {!! Form::number('petal_length', null, ['class' => 'form-control']) !!}
</div>

<!-- Petal Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petal_width', 'Petal Width:') !!}
    {!! Form::number('petal_width', null, ['class' => 'form-control']) !!}
</div>

<!-- Species Field -->
<div class="form-group col-sm-6">
    {!! Form::label('species', 'Species:') !!}
    {!! Form::text('species', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>