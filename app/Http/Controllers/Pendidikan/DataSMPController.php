<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataSMPDataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataSMPRequest;
use App\Http\Requests\Pendidikan\UpdateDataSMPRequest;
use App\Repositories\Pendidikan\DataSMPRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataSMPController extends AppBaseController
{
    /** @var DataSMPRepository $dataSMPRepository*/
    private $dataSMPRepository;

    public function __construct(DataSMPRepository $dataSMPRepo)
    {
        $this->dataSMPRepository = $dataSMPRepo;
    }

    /**
     * Display a listing of the DataSMP.
     *
     * @param DataSMPDataTable $dataSMPDataTable
     *
     * @return Response
     */
    public function index(DataSMPDataTable $dataSMPDataTable)
    {
        return $dataSMPDataTable->render('pendidikan.data_s_m_ps.index');
    }

    /**
     * Show the form for creating a new DataSMP.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_s_m_ps.create');
    }

    /**
     * Store a newly created DataSMP in storage.
     *
     * @param CreateDataSMPRequest $request
     *
     * @return Response
     */
    public function store(CreateDataSMPRequest $request)
    {
        $input = $request->all();

        $dataSMP = $this->dataSMPRepository->create($input);

        Flash::success('Data S M P saved successfully.');

        return redirect(route('pendidikan.dataSMPs.index'));
    }

    /**
     * Display the specified DataSMP.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataSMP = $this->dataSMPRepository->find($id);

        if (empty($dataSMP)) {
            Flash::error('Data S M P not found');

            return redirect(route('pendidikan.dataSMPs.index'));
        }

        return view('pendidikan.data_s_m_ps.show')->with('dataSMP', $dataSMP);
    }

    /**
     * Show the form for editing the specified DataSMP.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataSMP = $this->dataSMPRepository->find($id);

        if (empty($dataSMP)) {
            Flash::error('Data S M P not found');

            return redirect(route('pendidikan.dataSMPs.index'));
        }

        return view('pendidikan.data_s_m_ps.edit')->with('dataSMP', $dataSMP);
    }

    /**
     * Update the specified DataSMP in storage.
     *
     * @param int $id
     * @param UpdateDataSMPRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataSMPRequest $request)
    {
        $dataSMP = $this->dataSMPRepository->find($id);

        if (empty($dataSMP)) {
            Flash::error('Data S M P not found');

            return redirect(route('pendidikan.dataSMPs.index'));
        }

        $dataSMP = $this->dataSMPRepository->update($request->all(), $id);

        Flash::success('Data S M P updated successfully.');

        return redirect(route('pendidikan.dataSMPs.index'));
    }

    /**
     * Remove the specified DataSMP from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataSMP = $this->dataSMPRepository->find($id);

        if (empty($dataSMP)) {
            Flash::error('Data S M P not found');

            return redirect(route('pendidikan.dataSMPs.index'));
        }

        $this->dataSMPRepository->delete($id);

        Flash::success('Data S M P deleted successfully.');

        return redirect(route('pendidikan.dataSMPs.index'));
    }
}
