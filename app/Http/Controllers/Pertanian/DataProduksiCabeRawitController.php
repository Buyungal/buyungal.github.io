<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataProduksiCabeRawitDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataProduksiCabeRawitRequest;
use App\Http\Requests\Pertanian\UpdateDataProduksiCabeRawitRequest;
use App\Repositories\Pertanian\DataProduksiCabeRawitRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataProduksiCabeRawitController extends AppBaseController
{
    /** @var DataProduksiCabeRawitRepository $dataProduksiCabeRawitRepository*/
    private $dataProduksiCabeRawitRepository;

    public function __construct(DataProduksiCabeRawitRepository $dataProduksiCabeRawitRepo)
    {
        $this->dataProduksiCabeRawitRepository = $dataProduksiCabeRawitRepo;
    }

    /**
     * Display a listing of the DataProduksiCabeRawit.
     *
     * @param DataProduksiCabeRawitDataTable $dataProduksiCabeRawitDataTable
     *
     * @return Response
     */
    public function index(DataProduksiCabeRawitDataTable $dataProduksiCabeRawitDataTable)
    {
        return $dataProduksiCabeRawitDataTable->render('pertanian.data_produksi_cabe_rawits.index');
    }

    /**
     * Show the form for creating a new DataProduksiCabeRawit.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_produksi_cabe_rawits.create');
    }

    /**
     * Store a newly created DataProduksiCabeRawit in storage.
     *
     * @param CreateDataProduksiCabeRawitRequest $request
     *
     * @return Response
     */
    public function store(CreateDataProduksiCabeRawitRequest $request)
    {
        $input = $request->all();

        $dataProduksiCabeRawit = $this->dataProduksiCabeRawitRepository->create($input);

        Flash::success('Data Produksi Cabe Rawit saved successfully.');

        return redirect(route('pertanian.dataProduksiCabeRawits.index'));
    }

    /**
     * Display the specified DataProduksiCabeRawit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataProduksiCabeRawit = $this->dataProduksiCabeRawitRepository->find($id);

        if (empty($dataProduksiCabeRawit)) {
            Flash::error('Data Produksi Cabe Rawit not found');

            return redirect(route('pertanian.dataProduksiCabeRawits.index'));
        }

        return view('pertanian.data_produksi_cabe_rawits.show')->with('dataProduksiCabeRawit', $dataProduksiCabeRawit);
    }

    /**
     * Show the form for editing the specified DataProduksiCabeRawit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataProduksiCabeRawit = $this->dataProduksiCabeRawitRepository->find($id);

        if (empty($dataProduksiCabeRawit)) {
            Flash::error('Data Produksi Cabe Rawit not found');

            return redirect(route('pertanian.dataProduksiCabeRawits.index'));
        }

        return view('pertanian.data_produksi_cabe_rawits.edit')->with('dataProduksiCabeRawit', $dataProduksiCabeRawit);
    }

    /**
     * Update the specified DataProduksiCabeRawit in storage.
     *
     * @param int $id
     * @param UpdateDataProduksiCabeRawitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataProduksiCabeRawitRequest $request)
    {
        $dataProduksiCabeRawit = $this->dataProduksiCabeRawitRepository->find($id);

        if (empty($dataProduksiCabeRawit)) {
            Flash::error('Data Produksi Cabe Rawit not found');

            return redirect(route('pertanian.dataProduksiCabeRawits.index'));
        }

        $dataProduksiCabeRawit = $this->dataProduksiCabeRawitRepository->update($request->all(), $id);

        Flash::success('Data Produksi Cabe Rawit updated successfully.');

        return redirect(route('pertanian.dataProduksiCabeRawits.index'));
    }

    /**
     * Remove the specified DataProduksiCabeRawit from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataProduksiCabeRawit = $this->dataProduksiCabeRawitRepository->find($id);

        if (empty($dataProduksiCabeRawit)) {
            Flash::error('Data Produksi Cabe Rawit not found');

            return redirect(route('pertanian.dataProduksiCabeRawits.index'));
        }

        $this->dataProduksiCabeRawitRepository->delete($id);

        Flash::success('Data Produksi Cabe Rawit deleted successfully.');

        return redirect(route('pertanian.dataProduksiCabeRawits.index'));
    }
}
