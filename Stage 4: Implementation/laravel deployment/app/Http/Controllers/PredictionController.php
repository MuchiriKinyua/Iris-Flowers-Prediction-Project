<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePredictionRequest;
use App\Http\Requests\UpdatePredictionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PredictionRepository;
use Phpml\Classification\LogisticRegression;
use Phpml\ModelManager;
use Illuminate\Http\Request;
use Flash;

class PredictionController extends AppBaseController
{
    /** @var PredictionRepository $predictionRepository*/
    private $predictionRepository;

    public function __construct(PredictionRepository $predictionRepo)
    {
        $this->predictionRepository = $predictionRepo;
    }

    /**
     * Display a listing of the Prediction.
     */
    public function index(Request $request)
    {
        $predictions = $this->predictionRepository->paginate(10);

        return view('predictions.index')
            ->with('predictions', $predictions);
    }

    /**
     * Show the form for creating a new Prediction.
     */
    public function create()
    {
        return view('predictions.create');
    }

    /**
     * Store a newly created Prediction in storage.
     */
    public function store(CreatePredictionRequest $request)
    {
        $input = $request->all();

        $prediction = $this->predictionRepository->create($input);

        Flash::success('Prediction saved successfully.');

        return redirect(route('predictions.index'));
    }

    /**
     * Display the specified Prediction.
     */
    public function show($id)
    {
        $prediction = $this->predictionRepository->find($id);

        if (empty($prediction)) {
            Flash::error('Prediction not found');

            return redirect(route('predictions.index'));
        }

        return view('predictions.show')->with('prediction', $prediction);
    }

    /**
     * Show the form for editing the specified Prediction.
     */
    public function edit($id)
    {
        $prediction = $this->predictionRepository->find($id);

        if (empty($prediction)) {
            Flash::error('Prediction not found');

            return redirect(route('predictions.index'));
        }

        return view('predictions.edit')->with('prediction', $prediction);
    }

    /**
     * Update the specified Prediction in storage.
     */
    public function update($id, UpdatePredictionRequest $request)
    {
        $prediction = $this->predictionRepository->find($id);

        if (empty($prediction)) {
            Flash::error('Prediction not found');

            return redirect(route('predictions.index'));
        }

        $prediction = $this->predictionRepository->update($request->all(), $id);

        Flash::success('Prediction updated successfully.');

        return redirect(route('predictions.index'));
    }

    /**
     * Remove the specified Prediction from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prediction = $this->predictionRepository->find($id);

        if (empty($prediction)) {
            Flash::error('Prediction not found');

            return redirect(route('predictions.index'));
        }

        $this->predictionRepository->delete($id);

        Flash::success('Prediction deleted successfully.');

        return redirect(route('predictions.index'));
    }
    public function predict(Request $request)
    {
        // Retrieve input data
        $input = $request->input('sample_data');  // Assuming data is passed as a comma-separated string
    
        // Process the input to match the format
        $sample_values = explode(',', $input);
        $sample_values = array_map('floatval', $sample_values);
        $sample_values_2d = [$sample_values];  // Reshape to 2D
    
        // Example using php-ml's ModelManager to load the pkl model
        $modelManager = new ModelManager();
        $model = $modelManager->restoreFromFile(public_path('models/logistic_regression_model.pkl'));
    
        // Predict the species
        $prediction = $model->predict($sample_values_2d); // Corrected line
    
        // Map to class names
        $classNames = ['Setosa', 'Versicolor', 'Virginica'];  // Example class names
        $predictedSpecies = $classNames[$prediction[0]];
    
        return view('predictions.index', compact('predictedSpecies'));
    }
    
}
