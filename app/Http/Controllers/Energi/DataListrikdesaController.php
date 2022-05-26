<?php

namespace App\Http\Controllers\Energi;

use App\DataTables\Energi\DataListrikdesaDataTable;
use App\Http\Requests\Energi;
use App\Http\Requests\Energi\CreateDataListrikdesaRequest;
use App\Http\Requests\Energi\UpdateDataListrikdesaRequest;
use App\Repositories\Energi\DataListrikdesaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataListrikdesaController extends AppBaseController
{
    /** @var DataListrikdesaRepository $dataListrikdesaRepository*/
    private $dataListrikdesaRepository;

    public function __construct(DataListrikdesaRepository $dataListrikdesaRepo)
    {
        $this->dataListrikdesaRepository = $dataListrikdesaRepo;
    }

    /**
     * Display a listing of the DataListrikdesa.
     *
     * @param DataListrikdesaDataTable $dataListrikdesaDataTable
     *
     * @return Response
     */
    public function index(DataListrikdesaDataTable $dataListrikdesaDataTable)
    {
        return $dataListrikdesaDataTable->render('energi.data_listrikdesas.index');
    }

    /**
     * Show the form for creating a new DataListrikdesa.
     *
     * @return Response
     */
    public function create()
    {
        return view('energi.data_listrikdesas.create');
    }

    /**
     * Store a newly created DataListrikdesa in storage.
     *
     * @param CreateDataListrikdesaRequest $request
     *
     * @return Response
     */
    public function store(CreateDataListrikdesaRequest $request)
    {
        $input = $request->all();

        $dataListrikdesa = $this->dataListrikdesaRepository->create($input);

        Flash::success('Data Listrikdesa saved successfully.');

        return redirect(route('energi.dataListrikdesas.index'));
    }

    /**
     * Display the specified DataListrikdesa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataListrikdesa = $this->dataListrikdesaRepository->find($id);

        if (empty($dataListrikdesa)) {
            Flash::error('Data Listrikdesa not found');

            return redirect(route('energi.dataListrikdesas.index'));
        }

        return view('energi.data_listrikdesas.show')->with('dataListrikdesa', $dataListrikdesa);
    }

    /**
     * Show the form for editing the specified DataListrikdesa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataListrikdesa = $this->dataListrikdesaRepository->find($id);

        if (empty($dataListrikdesa)) {
            Flash::error('Data Listrikdesa not found');

            return redirect(route('energi.dataListrikdesas.index'));
        }

        return view('energi.data_listrikdesas.edit')->with('dataListrikdesa', $dataListrikdesa);
    }

    /**
     * Update the specified DataListrikdesa in storage.
     *
     * @param int $id
     * @param UpdateDataListrikdesaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataListrikdesaRequest $request)
    {
        $dataListrikdesa = $this->dataListrikdesaRepository->find($id);

        if (empty($dataListrikdesa)) {
            Flash::error('Data Listrikdesa not found');

            return redirect(route('energi.dataListrikdesas.index'));
        }

        $dataListrikdesa = $this->dataListrikdesaRepository->update($request->all(), $id);

        Flash::success('Data Listrikdesa updated successfully.');

        return redirect(route('energi.dataListrikdesas.index'));
    }

    /**
     * Remove the specified DataListrikdesa from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataListrikdesa = $this->dataListrikdesaRepository->find($id);

        if (empty($dataListrikdesa)) {
            Flash::error('Data Listrikdesa not found');

            return redirect(route('energi.dataListrikdesas.index'));
        }

        $this->dataListrikdesaRepository->delete($id);

        Flash::success('Data Listrikdesa deleted successfully.');

        return redirect(route('energi.dataListrikdesas.index'));
    }
}
