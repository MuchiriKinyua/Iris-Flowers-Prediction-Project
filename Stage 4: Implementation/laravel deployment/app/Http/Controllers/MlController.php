<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMlRequest;
use App\Http\Requests\UpdateMlRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MlRepository;
use Illuminate\Http\Request;
use Flash;

class MlController extends AppBaseController
{
    /** @var MlRepository $mlRepository*/
    private $mlRepository;

    public function __construct(MlRepository $mlRepo)
    {
        $this->mlRepository = $mlRepo;
    }

    /**
     * Display a listing of the Ml.
     */
    public function index(Request $request)
    {
        $mls = $this->mlRepository->paginate(10);

        return view('mls.index')
            ->with('mls', $mls);
    }

    /**
     * Show the form for creating a new Ml.
     */
    public function create()
    {
        return view('mls.create');
    }

    /**
     * Store a newly created Ml in storage.
     */
    public function store(CreateMlRequest $request)
    {
        $input = $request->all();

        $ml = $this->mlRepository->create($input);

        Flash::success('Ml saved successfully.');

        return redirect(route('mls.index'));
    }

    /**
     * Display the specified Ml.
     */
    public function show($id)
    {
        $ml = $this->mlRepository->find($id);

        if (empty($ml)) {
            Flash::error('Ml not found');

            return redirect(route('mls.index'));
        }

        return view('mls.show')->with('ml', $ml);
    }

    /**
     * Show the form for editing the specified Ml.
     */
    public function edit($id)
    {
        $ml = $this->mlRepository->find($id);

        if (empty($ml)) {
            Flash::error('Ml not found');

            return redirect(route('mls.index'));
        }

        return view('mls.edit')->with('ml', $ml);
    }

    /**
     * Update the specified Ml in storage.
     */
    public function update($id, UpdateMlRequest $request)
    {
        $ml = $this->mlRepository->find($id);

        if (empty($ml)) {
            Flash::error('Ml not found');

            return redirect(route('mls.index'));
        }

        $ml = $this->mlRepository->update($request->all(), $id);

        Flash::success('Ml updated successfully.');

        return redirect(route('mls.index'));
    }

    /**
     * Remove the specified Ml from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ml = $this->mlRepository->find($id);

        if (empty($ml)) {
            Flash::error('Ml not found');

            return redirect(route('mls.index'));
        }

        $this->mlRepository->delete($id);

        Flash::success('Ml deleted successfully.');

        return redirect(route('mls.index'));
    }
}
