<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataLuasPanenTomatDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataLuasPanenTomatRequest;
use App\Http\Requests\Pertanian\UpdateDataLuasPanenTomatRequest;
use App\Repositories\Pertanian\DataLuasPanenTomatRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataLuasPanenTomatController extends AppBaseController
{
    /** @var DataLuasPanenTomatRepository $dataLuasPanenTomatRepository*/
    private $dataLuasPanenTomatRepository;

    public function __construct(DataLuasPanenTomatRepository $dataLuasPanenTomatRepo)
    {
        $this->dataLuasPanenTomatRepository = $dataLuasPanenTomatRepo;
    }

    /**
     * Display a listing of the DataLuasPanenTomat.
     *
     * @param DataLuasPanenTomatDataTable $dataLuasPanenTomatDataTable
     *
     * @return Response
     */
    public function index(DataLuasPanenTomatDataTable $dataLuasPanenTomatDataTable)
    {
        return $dataLuasPanenTomatDataTable->render('pertanian.data_luas_panen_tomats.index');
    }

    /**
     * Show the form for creating a new DataLuasPanenTomat.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_luas_panen_tomats.create');
    }

    /**
     * Store a newly created DataLuasPanenTomat in storage.
     *
     * @param CreateDataLuasPanenTomatRequest $request
     *
     * @return Response
     */
    public function store(CreateDataLuasPanenTomatRequest $request)
    {
        $input = $request->all();

        $dataLuasPanenTomat = $this->dataLuasPanenTomatRepository->create($input);

        Flash::success('Data Luas Panen Tomat saved successfully.');

        return redirect(route('pertanian.dataLuasPanenTomats.index'));
    }

    /**
     * Display the specified DataLuasPanenTomat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataLuasPanenTomat = $this->dataLuasPanenTomatRepository->find($id);

        if (empty($dataLuasPanenTomat)) {
            Flash::error('Data Luas Panen Tomat not found');

            return redirect(route('pertanian.dataLuasPanenTomats.index'));
        }

        return view('pertanian.data_luas_panen_tomats.show')->with('dataLuasPanenTomat', $dataLuasPanenTomat);
    }

    /**
     * Show the form for editing the specified DataLuasPanenTomat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataLuasPanenTomat = $this->dataLuasPanenTomatRepository->find($id);

        if (empty($dataLuasPanenTomat)) {
            Flash::error('Data Luas Panen Tomat not found');

            return redirect(route('pertanian.dataLuasPanenTomats.index'));
        }

        return view('pertanian.data_luas_panen_tomats.edit')->with('dataLuasPanenTomat', $dataLuasPanenTomat);
    }

    /**
     * Update the specified DataLuasPanenTomat in storage.
     *
     * @param int $id
     * @param UpdateDataLuasPanenTomatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataLuasPanenTomatRequest $request)
    {
        $dataLuasPanenTomat = $this->dataLuasPanenTomatRepository->find($id);

        if (empty($dataLuasPanenTomat)) {
            Flash::error('Data Luas Panen Tomat not found');

            return redirect(route('pertanian.dataLuasPanenTomats.index'));
        }

        $dataLuasPanenTomat = $this->dataLuasPanenTomatRepository->update($request->all(), $id);

        Flash::success('Data Luas Panen Tomat updated successfully.');

        return redirect(route('pertanian.dataLuasPanenTomats.index'));
    }

    /**
     * Remove the specified DataLuasPanenTomat from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataLuasPanenTomat = $this->dataLuasPanenTomatRepository->find($id);

        if (empty($dataLuasPanenTomat)) {
            Flash::error('Data Luas Panen Tomat not found');

            return redirect(route('pertanian.dataLuasPanenTomats.index'));
        }

        $this->dataLuasPanenTomatRepository->delete($id);

        Flash::success('Data Luas Panen Tomat deleted successfully.');

        return redirect(route('pertanian.dataLuasPanenTomats.index'));
    }
}
