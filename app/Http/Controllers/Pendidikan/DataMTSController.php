<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataMTSDataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataMTSRequest;
use App\Http\Requests\Pendidikan\UpdateDataMTSRequest;
use App\Repositories\Pendidikan\DataMTSRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataMTSController extends AppBaseController
{
    /** @var DataMTSRepository $dataMTSRepository*/
    private $dataMTSRepository;

    public function __construct(DataMTSRepository $dataMTSRepo)
    {
        $this->dataMTSRepository = $dataMTSRepo;
    }

    /**
     * Display a listing of the DataMTS.
     *
     * @param DataMTSDataTable $dataMTSDataTable
     *
     * @return Response
     */
    public function index(DataMTSDataTable $dataMTSDataTable)
    {
        return $dataMTSDataTable->render('pendidikan.data_m_ts.index');
    }

    /**
     * Show the form for creating a new DataMTS.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_m_ts.create');
    }

    /**
     * Store a newly created DataMTS in storage.
     *
     * @param CreateDataMTSRequest $request
     *
     * @return Response
     */
    public function store(CreateDataMTSRequest $request)
    {
        $input = $request->all();

        $dataMTS = $this->dataMTSRepository->create($input);

        Flash::success('Data M T S saved successfully.');

        return redirect(route('pendidikan.dataMTs.index'));
    }

    /**
     * Display the specified DataMTS.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataMTS = $this->dataMTSRepository->find($id);

        if (empty($dataMTS)) {
            Flash::error('Data M T S not found');

            return redirect(route('pendidikan.dataMTs.index'));
        }

        return view('pendidikan.data_m_ts.show')->with('dataMTS', $dataMTS);
    }

    /**
     * Show the form for editing the specified DataMTS.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataMTS = $this->dataMTSRepository->find($id);

        if (empty($dataMTS)) {
            Flash::error('Data M T S not found');

            return redirect(route('pendidikan.dataMTs.index'));
        }

        return view('pendidikan.data_m_ts.edit')->with('dataMTS', $dataMTS);
    }

    /**
     * Update the specified DataMTS in storage.
     *
     * @param int $id
     * @param UpdateDataMTSRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataMTSRequest $request)
    {
        $dataMTS = $this->dataMTSRepository->find($id);

        if (empty($dataMTS)) {
            Flash::error('Data M T S not found');

            return redirect(route('pendidikan.dataMTs.index'));
        }

        $dataMTS = $this->dataMTSRepository->update($request->all(), $id);

        Flash::success('Data M T S updated successfully.');

        return redirect(route('pendidikan.dataMTs.index'));
    }

    /**
     * Remove the specified DataMTS from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataMTS = $this->dataMTSRepository->find($id);

        if (empty($dataMTS)) {
            Flash::error('Data M T S not found');

            return redirect(route('pendidikan.dataMTs.index'));
        }

        $this->dataMTSRepository->delete($id);

        Flash::success('Data M T S deleted successfully.');

        return redirect(route('pendidikan.dataMTs.index'));
    }
}
