<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataSMADataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataSMARequest;
use App\Http\Requests\Pendidikan\UpdateDataSMARequest;
use App\Repositories\Pendidikan\DataSMARepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataSMAController extends AppBaseController
{
    /** @var DataSMARepository $dataSMARepository*/
    private $dataSMARepository;

    public function __construct(DataSMARepository $dataSMARepo)
    {
        $this->dataSMARepository = $dataSMARepo;
    }

    /**
     * Display a listing of the DataSMA.
     *
     * @param DataSMADataTable $dataSMADataTable
     *
     * @return Response
     */
    public function index(DataSMADataTable $dataSMADataTable)
    {
        return $dataSMADataTable->render('pendidikan.data_s_m_as.index');
    }

    /**
     * Show the form for creating a new DataSMA.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_s_m_as.create');
    }

    /**
     * Store a newly created DataSMA in storage.
     *
     * @param CreateDataSMARequest $request
     *
     * @return Response
     */
    public function store(CreateDataSMARequest $request)
    {
        $input = $request->all();

        $dataSMA = $this->dataSMARepository->create($input);

        Flash::success('Data S M A saved successfully.');

        return redirect(route('pendidikan.dataSMAs.index'));
    }

    /**
     * Display the specified DataSMA.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataSMA = $this->dataSMARepository->find($id);

        if (empty($dataSMA)) {
            Flash::error('Data S M A not found');

            return redirect(route('pendidikan.dataSMAs.index'));
        }

        return view('pendidikan.data_s_m_as.show')->with('dataSMA', $dataSMA);
    }

    /**
     * Show the form for editing the specified DataSMA.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataSMA = $this->dataSMARepository->find($id);

        if (empty($dataSMA)) {
            Flash::error('Data S M A not found');

            return redirect(route('pendidikan.dataSMAs.index'));
        }

        return view('pendidikan.data_s_m_as.edit')->with('dataSMA', $dataSMA);
    }

    /**
     * Update the specified DataSMA in storage.
     *
     * @param int $id
     * @param UpdateDataSMARequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataSMARequest $request)
    {
        $dataSMA = $this->dataSMARepository->find($id);

        if (empty($dataSMA)) {
            Flash::error('Data S M A not found');

            return redirect(route('pendidikan.dataSMAs.index'));
        }

        $dataSMA = $this->dataSMARepository->update($request->all(), $id);

        Flash::success('Data S M A updated successfully.');

        return redirect(route('pendidikan.dataSMAs.index'));
    }

    /**
     * Remove the specified DataSMA from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataSMA = $this->dataSMARepository->find($id);

        if (empty($dataSMA)) {
            Flash::error('Data S M A not found');

            return redirect(route('pendidikan.dataSMAs.index'));
        }

        $this->dataSMARepository->delete($id);

        Flash::success('Data S M A deleted successfully.');

        return redirect(route('pendidikan.dataSMAs.index'));
    }
}
