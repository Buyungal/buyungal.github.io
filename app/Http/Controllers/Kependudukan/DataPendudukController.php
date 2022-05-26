<?php

namespace App\Http\Controllers\Kependudukan;

use App\DataTables\Kependudukan\DataPendudukDataTable;
use App\Http\Requests\Kependudukan;
use App\Http\Requests\Kependudukan\CreateDataPendudukRequest;
use App\Http\Requests\Kependudukan\UpdateDataPendudukRequest;
use App\Repositories\Kependudukan\DataPendudukRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataPendudukController extends AppBaseController
{
    /** @var DataPendudukRepository $dataPendudukRepository*/
    private $dataPendudukRepository;

    public function __construct(DataPendudukRepository $dataPendudukRepo)
    {
        $this->dataPendudukRepository = $dataPendudukRepo;
    }

    /**
     * Display a listing of the DataPenduduk.
     *
     * @param DataPendudukDataTable $dataPendudukDataTable
     *
     * @return Response
     */
    public function index(DataPendudukDataTable $dataPendudukDataTable)
    {
        return $dataPendudukDataTable->render('kependudukan.data_penduduks.index');
    }

    /**
     * Show the form for creating a new DataPenduduk.
     *
     * @return Response
     */
    public function create()
    {
        return view('kependudukan.data_penduduks.create');
    }

    /**
     * Store a newly created DataPenduduk in storage.
     *
     * @param CreateDataPendudukRequest $request
     *
     * @return Response
     */
    public function store(CreateDataPendudukRequest $request)
    {
        $input = $request->all();

        $dataPenduduk = $this->dataPendudukRepository->create($input);

        Flash::success('Data Penduduk saved successfully.');

        return redirect(route('kependudukan.dataPenduduks.index'));
    }

    /**
     * Display the specified DataPenduduk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataPenduduk = $this->dataPendudukRepository->find($id);

        if (empty($dataPenduduk)) {
            Flash::error('Data Penduduk not found');

            return redirect(route('kependudukan.dataPenduduks.index'));
        }

        return view('kependudukan.data_penduduks.show')->with('dataPenduduk', $dataPenduduk);
    }

    /**
     * Show the form for editing the specified DataPenduduk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataPenduduk = $this->dataPendudukRepository->find($id);

        if (empty($dataPenduduk)) {
            Flash::error('Data Penduduk not found');

            return redirect(route('kependudukan.dataPenduduks.index'));
        }

        return view('kependudukan.data_penduduks.edit')->with('dataPenduduk', $dataPenduduk);
    }

    /**
     * Update the specified DataPenduduk in storage.
     *
     * @param int $id
     * @param UpdateDataPendudukRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataPendudukRequest $request)
    {
        $dataPenduduk = $this->dataPendudukRepository->find($id);

        if (empty($dataPenduduk)) {
            Flash::error('Data Penduduk not found');

            return redirect(route('kependudukan.dataPenduduks.index'));
        }

        $dataPenduduk = $this->dataPendudukRepository->update($request->all(), $id);

        Flash::success('Data Penduduk updated successfully.');

        return redirect(route('kependudukan.dataPenduduks.index'));
    }

    /**
     * Remove the specified DataPenduduk from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataPenduduk = $this->dataPendudukRepository->find($id);

        if (empty($dataPenduduk)) {
            Flash::error('Data Penduduk not found');

            return redirect(route('kependudukan.dataPenduduks.index'));
        }

        $this->dataPendudukRepository->delete($id);

        Flash::success('Data Penduduk deleted successfully.');

        return redirect(route('kependudukan.dataPenduduks.index'));
    }
}
