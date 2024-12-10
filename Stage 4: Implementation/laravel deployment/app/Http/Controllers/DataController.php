<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DataRepository;
use Illuminate\Http\Request;
use Flash;

class DataController extends AppBaseController
{
    /** @var DataRepository $dataRepository*/
    private $dataRepository;

    public function __construct(DataRepository $dataRepo)
    {
        $this->dataRepository = $dataRepo;
    }

    /**
     * Display a listing of the Data.
     */
    public function index(Request $request)
    {
        $data = $this->dataRepository->paginate(10);

        return view('data.index')
            ->with('data', $data);
    }

    /**
     * Show the form for creating a new Data.
     */
    public function create()
    {
        return view('data.create');
    }

    /**
     * Store a newly created Data in storage.
     */
    public function store(CreateDataRequest $request)
    {
        $input = $request->all();

        $data = $this->dataRepository->create($input);

        Flash::success('Data saved successfully.');

        return redirect(route('data.index'));
    }

    /**
     * Display the specified Data.
     */
    public function show($id)
    {
        $data = $this->dataRepository->find($id);

        if (empty($data)) {
            Flash::error('Data not found');

            return redirect(route('data.index'));
        }

        return view('data.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified Data.
     */
    public function edit($id)
    {
        $data = $this->dataRepository->find($id);

        if (empty($data)) {
            Flash::error('Data not found');

            return redirect(route('data.index'));
        }

        return view('data.edit')->with('data', $data);
    }

    /**
     * Update the specified Data in storage.
     */
    public function update($id, UpdateDataRequest $request)
    {
        $data = $this->dataRepository->find($id);

        if (empty($data)) {
            Flash::error('Data not found');

            return redirect(route('data.index'));
        }

        $data = $this->dataRepository->update($request->all(), $id);

        Flash::success('Data updated successfully.');

        return redirect(route('data.index'));
    }

    /**
     * Remove the specified Data from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $data = $this->dataRepository->find($id);

        if (empty($data)) {
            Flash::error('Data not found');

            return redirect(route('data.index'));
        }

        $this->dataRepository->delete($id);

        Flash::success('Data deleted successfully.');

        return redirect(route('data.index'));
    }
}
