@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Predictions</h1>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('predictions.predict') }}" method="POST">
                        @csrf
                        <input type="text" name="sample_data" placeholder="Enter sample data separated by commas" class="form-control">
                        <button type="submit" class="btn btn-primary mt-2">Predict</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @if (isset($predictedSpecies))
            <div class="alert alert-success">
                <strong>Predicted Species: </strong>{{ $predictedSpecies }}
            </div>
        @endif
    </div>
@endsection
