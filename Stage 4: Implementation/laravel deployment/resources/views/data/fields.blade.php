<!-- Sepallengthcm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SepalLengthCm', 'Sepal Length (cm):') !!}
    {!! Form::number('SepalLengthCm', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Sepalwidthcm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SepalWidthCm', 'Sepal width (cm):') !!}
    {!! Form::number('SepalWidthCm', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Petallengthcm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PetalLengthCm', 'Petal Length (cm):') !!}
    {!! Form::number('PetalLengthCm', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Petalwidthcm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PetalWidthCm', 'Petal Width (cm):') !!}
    {!! Form::number('PetalWidthCm', null, ['class' => 'form-control', 'step' => '0.01']) !!}
</div>

<!-- Species Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Species', 'Species:') !!}
    {!! Form::text('Species', null, ['class' => 'form-control', 'maxlength' => 15]) !!}
</div>
