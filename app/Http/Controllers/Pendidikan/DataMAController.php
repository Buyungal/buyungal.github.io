<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataMADataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataMARequest;
use App\Http\Requests\Pendidikan\UpdateDataMARequest;
use App\Repositories\Pendidikan\DataMARepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataMAController extends AppBaseController
{
    /** @var DataMARepository $dataMARepository*/
    private $dataMARepository;

    public function __construct(DataMARepository $dataMARepo)
    {
        $this->dataMARepository = $dataMARepo;
    }

    /**
     * Display a listing of the DataMA.
     *
     * @param DataMADataTable $dataMADataTable
     *
     * @return Response
     */
    public function index(DataMADataTable $dataMADataTable)
    {
        return $dataMADataTable->render('pendidikan.data_m_as.index');
    }

    /**
     * Show the form for creating a new DataMA.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_m_as.create');
    }

    /**
     * Store a newly created DataMA in storage.
     *
     * @param CreateDataMARequest $request
     *
     * @return Response
     */
    public function store(CreateDataMARequest $request)
    {
        $input = $request->all();

        $dataMA = $this->dataMARepository->create($input);

        Flash::success('Data M A saved successfully.');

        return redirect(route('pendidikan.dataMAs.index'));
    }

    /**
     * Display the specified DataMA.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataMA = $this->dataMARepository->find($id);

        if (empty($dataMA)) {
            Flash::error('Data M A not found');

            return redirect(route('pendidikan.dataMAs.index'));
        }

        return view('pendidikan.data_m_as.show')->with('dataMA', $dataMA);
    }

    /**
     * Show the form for editing the specified DataMA.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataMA = $this->dataMARepository->find($id);

        if (empty($dataMA)) {
            Flash::error('Data M A not found');

            return redirect(route('pendidikan.dataMAs.index'));
        }

        return view('pendidikan.data_m_as.edit')->with('dataMA', $dataMA);
    }

    /**
     * Update the specified DataMA in storage.
     *
     * @param int $id
     * @param UpdateDataMARequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataMARequest $request)
    {
        $dataMA = $this->dataMARepository->find($id);

        if (empty($dataMA)) {
            Flash::error('Data M A not found');

            return redirect(route('pendidikan.dataMAs.index'));
        }

        $dataMA = $this->dataMARepository->update($request->all(), $id);

        Flash::success('Data M A updated successfully.');

        return redirect(route('pendidikan.dataMAs.index'));
    }

    /**
     * Remove the specified DataMA from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataMA = $this->dataMARepository->find($id);

        if (empty($dataMA)) {
            Flash::error('Data M A not found');

            return redirect(route('pendidikan.dataMAs.index'));
        }

        $this->dataMARepository->delete($id);

        Flash::success('Data M A deleted successfully.');

        return redirect(route('pendidikan.dataMAs.index'));
    }
}
