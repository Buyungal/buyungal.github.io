<?php

namespace App\Http\Controllers\Kependudukan;

use App\DataTables\Kependudukan\DataKepadatanPendudukDataTable;
use App\Http\Requests\Kependudukan;
use App\Http\Requests\Kependudukan\CreateDataKepadatanPendudukRequest;
use App\Http\Requests\Kependudukan\UpdateDataKepadatanPendudukRequest;
use App\Repositories\Kependudukan\DataKepadatanPendudukRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataKepadatanPendudukController extends AppBaseController
{
    /** @var DataKepadatanPendudukRepository $dataKepadatanPendudukRepository*/
    private $dataKepadatanPendudukRepository;

    public function __construct(DataKepadatanPendudukRepository $dataKepadatanPendudukRepo)
    {
        $this->dataKepadatanPendudukRepository = $dataKepadatanPendudukRepo;
    }

    /**
     * Display a listing of the DataKepadatanPenduduk.
     *
     * @param DataKepadatanPendudukDataTable $dataKepadatanPendudukDataTable
     *
     * @return Response
     */
    public function index(DataKepadatanPendudukDataTable $dataKepadatanPendudukDataTable)
    {
        return $dataKepadatanPendudukDataTable->render('kependudukan.data_kepadatan_penduduks.index');
    }

    /**
     * Show the form for creating a new DataKepadatanPenduduk.
     *
     * @return Response
     */
    public function create()
    {
        return view('kependudukan.data_kepadatan_penduduks.create');
    }

    /**
     * Store a newly created DataKepadatanPenduduk in storage.
     *
     * @param CreateDataKepadatanPendudukRequest $request
     *
     * @return Response
     */
    public function store(CreateDataKepadatanPendudukRequest $request)
    {
        $input = $request->all();

        $dataKepadatanPenduduk = $this->dataKepadatanPendudukRepository->create($input);

        Flash::success('Data Kepadatan Penduduk saved successfully.');

        return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
    }

    /**
     * Display the specified DataKepadatanPenduduk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataKepadatanPenduduk = $this->dataKepadatanPendudukRepository->find($id);

        if (empty($dataKepadatanPenduduk)) {
            Flash::error('Data Kepadatan Penduduk not found');

            return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
        }

        return view('kependudukan.data_kepadatan_penduduks.show')->with('dataKepadatanPenduduk', $dataKepadatanPenduduk);
    }

    /**
     * Show the form for editing the specified DataKepadatanPenduduk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataKepadatanPenduduk = $this->dataKepadatanPendudukRepository->find($id);

        if (empty($dataKepadatanPenduduk)) {
            Flash::error('Data Kepadatan Penduduk not found');

            return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
        }

        return view('kependudukan.data_kepadatan_penduduks.edit')->with('dataKepadatanPenduduk', $dataKepadatanPenduduk);
    }

    /**
     * Update the specified DataKepadatanPenduduk in storage.
     *
     * @param int $id
     * @param UpdateDataKepadatanPendudukRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataKepadatanPendudukRequest $request)
    {
        $dataKepadatanPenduduk = $this->dataKepadatanPendudukRepository->find($id);

        if (empty($dataKepadatanPenduduk)) {
            Flash::error('Data Kepadatan Penduduk not found');

            return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
        }

        $dataKepadatanPenduduk = $this->dataKepadatanPendudukRepository->update($request->all(), $id);

        Flash::success('Data Kepadatan Penduduk updated successfully.');

        return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
    }

    /**
     * Remove the specified DataKepadatanPenduduk from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataKepadatanPenduduk = $this->dataKepadatanPendudukRepository->find($id);

        if (empty($dataKepadatanPenduduk)) {
            Flash::error('Data Kepadatan Penduduk not found');

            return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
        }

        $this->dataKepadatanPendudukRepository->delete($id);

        Flash::success('Data Kepadatan Penduduk deleted successfully.');

        return redirect(route('kependudukan.dataKepadatanPenduduks.index'));
    }
}
