<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataProduksiBuahDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataProduksiBuahRequest;
use App\Http\Requests\Pertanian\UpdateDataProduksiBuahRequest;
use App\Repositories\Pertanian\DataProduksiBuahRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataProduksiBuahController extends AppBaseController
{
    /** @var DataProduksiBuahRepository $dataProduksiBuahRepository*/
    private $dataProduksiBuahRepository;

    public function __construct(DataProduksiBuahRepository $dataProduksiBuahRepo)
    {
        $this->dataProduksiBuahRepository = $dataProduksiBuahRepo;
    }

    /**
     * Display a listing of the DataProduksiBuah.
     *
     * @param DataProduksiBuahDataTable $dataProduksiBuahDataTable
     *
     * @return Response
     */
    public function index(DataProduksiBuahDataTable $dataProduksiBuahDataTable)
    {
        return $dataProduksiBuahDataTable->render('pertanian.data_produksi_buahs.index');
    }

    /**
     * Show the form for creating a new DataProduksiBuah.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_produksi_buahs.create');
    }

    /**
     * Store a newly created DataProduksiBuah in storage.
     *
     * @param CreateDataProduksiBuahRequest $request
     *
     * @return Response
     */
    public function store(CreateDataProduksiBuahRequest $request)
    {
        $input = $request->all();

        $dataProduksiBuah = $this->dataProduksiBuahRepository->create($input);

        Flash::success('Data Produksi Buah saved successfully.');

        return redirect(route('pertanian.dataProduksiBuahs.index'));
    }

    /**
     * Display the specified DataProduksiBuah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataProduksiBuah = $this->dataProduksiBuahRepository->find($id);

        if (empty($dataProduksiBuah)) {
            Flash::error('Data Produksi Buah not found');

            return redirect(route('pertanian.dataProduksiBuahs.index'));
        }

        return view('pertanian.data_produksi_buahs.show')->with('dataProduksiBuah', $dataProduksiBuah);
    }

    /**
     * Show the form for editing the specified DataProduksiBuah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataProduksiBuah = $this->dataProduksiBuahRepository->find($id);

        if (empty($dataProduksiBuah)) {
            Flash::error('Data Produksi Buah not found');

            return redirect(route('pertanian.dataProduksiBuahs.index'));
        }

        return view('pertanian.data_produksi_buahs.edit')->with('dataProduksiBuah', $dataProduksiBuah);
    }

    /**
     * Update the specified DataProduksiBuah in storage.
     *
     * @param int $id
     * @param UpdateDataProduksiBuahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataProduksiBuahRequest $request)
    {
        $dataProduksiBuah = $this->dataProduksiBuahRepository->find($id);

        if (empty($dataProduksiBuah)) {
            Flash::error('Data Produksi Buah not found');

            return redirect(route('pertanian.dataProduksiBuahs.index'));
        }

        $dataProduksiBuah = $this->dataProduksiBuahRepository->update($request->all(), $id);

        Flash::success('Data Produksi Buah updated successfully.');

        return redirect(route('pertanian.dataProduksiBuahs.index'));
    }

    /**
     * Remove the specified DataProduksiBuah from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataProduksiBuah = $this->dataProduksiBuahRepository->find($id);

        if (empty($dataProduksiBuah)) {
            Flash::error('Data Produksi Buah not found');

            return redirect(route('pertanian.dataProduksiBuahs.index'));
        }

        $this->dataProduksiBuahRepository->delete($id);

        Flash::success('Data Produksi Buah deleted successfully.');

        return redirect(route('pertanian.dataProduksiBuahs.index'));
    }
}
