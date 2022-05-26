<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataUnggasDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataUnggasRequest;
use App\Http\Requests\Pertanian\UpdateDataUnggasRequest;
use App\Repositories\Pertanian\DataUnggasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataUnggasController extends AppBaseController
{
    /** @var DataUnggasRepository $dataUnggasRepository*/
    private $dataUnggasRepository;

    public function __construct(DataUnggasRepository $dataUnggasRepo)
    {
        $this->dataUnggasRepository = $dataUnggasRepo;
    }

    /**
     * Display a listing of the DataUnggas.
     *
     * @param DataUnggasDataTable $dataUnggasDataTable
     *
     * @return Response
     */
    public function index(DataUnggasDataTable $dataUnggasDataTable)
    {
        return $dataUnggasDataTable->render('pertanian.data_unggas.index');
    }

    /**
     * Show the form for creating a new DataUnggas.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_unggas.create');
    }

    /**
     * Store a newly created DataUnggas in storage.
     *
     * @param CreateDataUnggasRequest $request
     *
     * @return Response
     */
    public function store(CreateDataUnggasRequest $request)
    {
        $input = $request->all();

        $dataUnggas = $this->dataUnggasRepository->create($input);

        Flash::success('Data Unggas saved successfully.');

        return redirect(route('pertanian.dataUnggas.index'));
    }

    /**
     * Display the specified DataUnggas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataUnggas = $this->dataUnggasRepository->find($id);

        if (empty($dataUnggas)) {
            Flash::error('Data Unggas not found');

            return redirect(route('pertanian.dataUnggas.index'));
        }

        return view('pertanian.data_unggas.show')->with('dataUnggas', $dataUnggas);
    }

    /**
     * Show the form for editing the specified DataUnggas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataUnggas = $this->dataUnggasRepository->find($id);

        if (empty($dataUnggas)) {
            Flash::error('Data Unggas not found');

            return redirect(route('pertanian.dataUnggas.index'));
        }

        return view('pertanian.data_unggas.edit')->with('dataUnggas', $dataUnggas);
    }

    /**
     * Update the specified DataUnggas in storage.
     *
     * @param int $id
     * @param UpdateDataUnggasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataUnggasRequest $request)
    {
        $dataUnggas = $this->dataUnggasRepository->find($id);

        if (empty($dataUnggas)) {
            Flash::error('Data Unggas not found');

            return redirect(route('pertanian.dataUnggas.index'));
        }

        $dataUnggas = $this->dataUnggasRepository->update($request->all(), $id);

        Flash::success('Data Unggas updated successfully.');

        return redirect(route('pertanian.dataUnggas.index'));
    }

    /**
     * Remove the specified DataUnggas from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataUnggas = $this->dataUnggasRepository->find($id);

        if (empty($dataUnggas)) {
            Flash::error('Data Unggas not found');

            return redirect(route('pertanian.dataUnggas.index'));
        }

        $this->dataUnggasRepository->delete($id);

        Flash::success('Data Unggas deleted successfully.');

        return redirect(route('pertanian.dataUnggas.index'));
    }
}
