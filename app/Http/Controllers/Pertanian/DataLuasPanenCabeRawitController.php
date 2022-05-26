<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataLuasPanenCabeRawitDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataLuasPanenCabeRawitRequest;
use App\Http\Requests\Pertanian\UpdateDataLuasPanenCabeRawitRequest;
use App\Repositories\Pertanian\DataLuasPanenCabeRawitRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataLuasPanenCabeRawitController extends AppBaseController
{
    /** @var DataLuasPanenCabeRawitRepository $dataLuasPanenCabeRawitRepository*/
    private $dataLuasPanenCabeRawitRepository;

    public function __construct(DataLuasPanenCabeRawitRepository $dataLuasPanenCabeRawitRepo)
    {
        $this->dataLuasPanenCabeRawitRepository = $dataLuasPanenCabeRawitRepo;
    }

    /**
     * Display a listing of the DataLuasPanenCabeRawit.
     *
     * @param DataLuasPanenCabeRawitDataTable $dataLuasPanenCabeRawitDataTable
     *
     * @return Response
     */
    public function index(DataLuasPanenCabeRawitDataTable $dataLuasPanenCabeRawitDataTable)
    {
        return $dataLuasPanenCabeRawitDataTable->render('pertanian.data_luas_panen_cabe_rawits.index');
    }

    /**
     * Show the form for creating a new DataLuasPanenCabeRawit.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_luas_panen_cabe_rawits.create');
    }

    /**
     * Store a newly created DataLuasPanenCabeRawit in storage.
     *
     * @param CreateDataLuasPanenCabeRawitRequest $request
     *
     * @return Response
     */
    public function store(CreateDataLuasPanenCabeRawitRequest $request)
    {
        $input = $request->all();

        $dataLuasPanenCabeRawit = $this->dataLuasPanenCabeRawitRepository->create($input);

        Flash::success('Data Luas Panen Cabe Rawit saved successfully.');

        return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
    }

    /**
     * Display the specified DataLuasPanenCabeRawit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataLuasPanenCabeRawit = $this->dataLuasPanenCabeRawitRepository->find($id);

        if (empty($dataLuasPanenCabeRawit)) {
            Flash::error('Data Luas Panen Cabe Rawit not found');

            return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
        }

        return view('pertanian.data_luas_panen_cabe_rawits.show')->with('dataLuasPanenCabeRawit', $dataLuasPanenCabeRawit);
    }

    /**
     * Show the form for editing the specified DataLuasPanenCabeRawit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataLuasPanenCabeRawit = $this->dataLuasPanenCabeRawitRepository->find($id);

        if (empty($dataLuasPanenCabeRawit)) {
            Flash::error('Data Luas Panen Cabe Rawit not found');

            return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
        }

        return view('pertanian.data_luas_panen_cabe_rawits.edit')->with('dataLuasPanenCabeRawit', $dataLuasPanenCabeRawit);
    }

    /**
     * Update the specified DataLuasPanenCabeRawit in storage.
     *
     * @param int $id
     * @param UpdateDataLuasPanenCabeRawitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataLuasPanenCabeRawitRequest $request)
    {
        $dataLuasPanenCabeRawit = $this->dataLuasPanenCabeRawitRepository->find($id);

        if (empty($dataLuasPanenCabeRawit)) {
            Flash::error('Data Luas Panen Cabe Rawit not found');

            return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
        }

        $dataLuasPanenCabeRawit = $this->dataLuasPanenCabeRawitRepository->update($request->all(), $id);

        Flash::success('Data Luas Panen Cabe Rawit updated successfully.');

        return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
    }

    /**
     * Remove the specified DataLuasPanenCabeRawit from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataLuasPanenCabeRawit = $this->dataLuasPanenCabeRawitRepository->find($id);

        if (empty($dataLuasPanenCabeRawit)) {
            Flash::error('Data Luas Panen Cabe Rawit not found');

            return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
        }

        $this->dataLuasPanenCabeRawitRepository->delete($id);

        Flash::success('Data Luas Panen Cabe Rawit deleted successfully.');

        return redirect(route('pertanian.dataLuasPanenCabeRawits.index'));
    }
}
