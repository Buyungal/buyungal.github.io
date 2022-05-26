<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataProduksiTomatDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataProduksiTomatRequest;
use App\Http\Requests\Pertanian\UpdateDataProduksiTomatRequest;
use App\Repositories\Pertanian\DataProduksiTomatRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataProduksiTomatController extends AppBaseController
{
    /** @var DataProduksiTomatRepository $dataProduksiTomatRepository*/
    private $dataProduksiTomatRepository;

    public function __construct(DataProduksiTomatRepository $dataProduksiTomatRepo)
    {
        $this->dataProduksiTomatRepository = $dataProduksiTomatRepo;
    }

    /**
     * Display a listing of the DataProduksiTomat.
     *
     * @param DataProduksiTomatDataTable $dataProduksiTomatDataTable
     *
     * @return Response
     */
    public function index(DataProduksiTomatDataTable $dataProduksiTomatDataTable)
    {
        return $dataProduksiTomatDataTable->render('pertanian.data_produksi_tomats.index');
    }

    /**
     * Show the form for creating a new DataProduksiTomat.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_produksi_tomats.create');
    }

    /**
     * Store a newly created DataProduksiTomat in storage.
     *
     * @param CreateDataProduksiTomatRequest $request
     *
     * @return Response
     */
    public function store(CreateDataProduksiTomatRequest $request)
    {
        $input = $request->all();

        $dataProduksiTomat = $this->dataProduksiTomatRepository->create($input);

        Flash::success('Data Produksi Tomat saved successfully.');

        return redirect(route('pertanian.dataProduksiTomats.index'));
    }

    /**
     * Display the specified DataProduksiTomat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataProduksiTomat = $this->dataProduksiTomatRepository->find($id);

        if (empty($dataProduksiTomat)) {
            Flash::error('Data Produksi Tomat not found');

            return redirect(route('pertanian.dataProduksiTomats.index'));
        }

        return view('pertanian.data_produksi_tomats.show')->with('dataProduksiTomat', $dataProduksiTomat);
    }

    /**
     * Show the form for editing the specified DataProduksiTomat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataProduksiTomat = $this->dataProduksiTomatRepository->find($id);

        if (empty($dataProduksiTomat)) {
            Flash::error('Data Produksi Tomat not found');

            return redirect(route('pertanian.dataProduksiTomats.index'));
        }

        return view('pertanian.data_produksi_tomats.edit')->with('dataProduksiTomat', $dataProduksiTomat);
    }

    /**
     * Update the specified DataProduksiTomat in storage.
     *
     * @param int $id
     * @param UpdateDataProduksiTomatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataProduksiTomatRequest $request)
    {
        $dataProduksiTomat = $this->dataProduksiTomatRepository->find($id);

        if (empty($dataProduksiTomat)) {
            Flash::error('Data Produksi Tomat not found');

            return redirect(route('pertanian.dataProduksiTomats.index'));
        }

        $dataProduksiTomat = $this->dataProduksiTomatRepository->update($request->all(), $id);

        Flash::success('Data Produksi Tomat updated successfully.');

        return redirect(route('pertanian.dataProduksiTomats.index'));
    }

    /**
     * Remove the specified DataProduksiTomat from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataProduksiTomat = $this->dataProduksiTomatRepository->find($id);

        if (empty($dataProduksiTomat)) {
            Flash::error('Data Produksi Tomat not found');

            return redirect(route('pertanian.dataProduksiTomats.index'));
        }

        $this->dataProduksiTomatRepository->delete($id);

        Flash::success('Data Produksi Tomat deleted successfully.');

        return redirect(route('pertanian.dataProduksiTomats.index'));
    }
}
