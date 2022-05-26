<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataSMKDataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataSMKRequest;
use App\Http\Requests\Pendidikan\UpdateDataSMKRequest;
use App\Repositories\Pendidikan\DataSMKRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataSMKController extends AppBaseController
{
    /** @var DataSMKRepository $dataSMKRepository*/
    private $dataSMKRepository;

    public function __construct(DataSMKRepository $dataSMKRepo)
    {
        $this->dataSMKRepository = $dataSMKRepo;
    }

    /**
     * Display a listing of the DataSMK.
     *
     * @param DataSMKDataTable $dataSMKDataTable
     *
     * @return Response
     */
    public function index(DataSMKDataTable $dataSMKDataTable)
    {
        return $dataSMKDataTable->render('pendidikan.data_s_m_ks.index');
    }

    /**
     * Show the form for creating a new DataSMK.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_s_m_ks.create');
    }

    /**
     * Store a newly created DataSMK in storage.
     *
     * @param CreateDataSMKRequest $request
     *
     * @return Response
     */
    public function store(CreateDataSMKRequest $request)
    {
        $input = $request->all();

        $dataSMK = $this->dataSMKRepository->create($input);

        Flash::success('Data S M K saved successfully.');

        return redirect(route('pendidikan.dataSMKs.index'));
    }

    /**
     * Display the specified DataSMK.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataSMK = $this->dataSMKRepository->find($id);

        if (empty($dataSMK)) {
            Flash::error('Data S M K not found');

            return redirect(route('pendidikan.dataSMKs.index'));
        }

        return view('pendidikan.data_s_m_ks.show')->with('dataSMK', $dataSMK);
    }

    /**
     * Show the form for editing the specified DataSMK.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataSMK = $this->dataSMKRepository->find($id);

        if (empty($dataSMK)) {
            Flash::error('Data S M K not found');

            return redirect(route('pendidikan.dataSMKs.index'));
        }

        return view('pendidikan.data_s_m_ks.edit')->with('dataSMK', $dataSMK);
    }

    /**
     * Update the specified DataSMK in storage.
     *
     * @param int $id
     * @param UpdateDataSMKRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataSMKRequest $request)
    {
        $dataSMK = $this->dataSMKRepository->find($id);

        if (empty($dataSMK)) {
            Flash::error('Data S M K not found');

            return redirect(route('pendidikan.dataSMKs.index'));
        }

        $dataSMK = $this->dataSMKRepository->update($request->all(), $id);

        Flash::success('Data S M K updated successfully.');

        return redirect(route('pendidikan.dataSMKs.index'));
    }

    /**
     * Remove the specified DataSMK from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataSMK = $this->dataSMKRepository->find($id);

        if (empty($dataSMK)) {
            Flash::error('Data S M K not found');

            return redirect(route('pendidikan.dataSMKs.index'));
        }

        $this->dataSMKRepository->delete($id);

        Flash::success('Data S M K deleted successfully.');

        return redirect(route('pendidikan.dataSMKs.index'));
    }
}
