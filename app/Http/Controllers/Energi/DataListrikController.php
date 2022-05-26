<?php

namespace App\Http\Controllers\Energi;

use App\DataTables\Energi\DataListrikDataTable;
use App\Http\Requests\Energi;
use App\Http\Requests\Energi\CreateDataListrikRequest;
use App\Http\Requests\Energi\UpdateDataListrikRequest;
use App\Repositories\Energi\DataListrikRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataListrikController extends AppBaseController
{
    /** @var DataListrikRepository $dataListrikRepository*/
    private $dataListrikRepository;

    public function __construct(DataListrikRepository $dataListrikRepo)
    {
        $this->dataListrikRepository = $dataListrikRepo;
    }

    /**
     * Display a listing of the DataListrik.
     *
     * @param DataListrikDataTable $dataListrikDataTable
     *
     * @return Response
     */
    public function index(DataListrikDataTable $dataListrikDataTable)
    {
        return $dataListrikDataTable->render('energi.data_listriks.index');
    }

    /**
     * Show the form for creating a new DataListrik.
     *
     * @return Response
     */
    public function create()
    {
        return view('energi.data_listriks.create');
    }

    /**
     * Store a newly created DataListrik in storage.
     *
     * @param CreateDataListrikRequest $request
     *
     * @return Response
     */
    public function store(CreateDataListrikRequest $request)
    {
        $input = $request->all();

        $dataListrik = $this->dataListrikRepository->create($input);

        Flash::success('Data Listrik saved successfully.');

        return redirect(route('energi.dataListriks.index'));
    }

    /**
     * Display the specified DataListrik.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataListrik = $this->dataListrikRepository->find($id);

        if (empty($dataListrik)) {
            Flash::error('Data Listrik not found');

            return redirect(route('energi.dataListriks.index'));
        }

        return view('energi.data_listriks.show')->with('dataListrik', $dataListrik);
    }

    /**
     * Show the form for editing the specified DataListrik.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataListrik = $this->dataListrikRepository->find($id);

        if (empty($dataListrik)) {
            Flash::error('Data Listrik not found');

            return redirect(route('energi.dataListriks.index'));
        }

        return view('energi.data_listriks.edit')->with('dataListrik', $dataListrik);
    }

    /**
     * Update the specified DataListrik in storage.
     *
     * @param int $id
     * @param UpdateDataListrikRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataListrikRequest $request)
    {
        $dataListrik = $this->dataListrikRepository->find($id);

        if (empty($dataListrik)) {
            Flash::error('Data Listrik not found');

            return redirect(route('energi.dataListriks.index'));
        }

        $dataListrik = $this->dataListrikRepository->update($request->all(), $id);

        Flash::success('Data Listrik updated successfully.');

        return redirect(route('energi.dataListriks.index'));
    }

    /**
     * Remove the specified DataListrik from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataListrik = $this->dataListrikRepository->find($id);

        if (empty($dataListrik)) {
            Flash::error('Data Listrik not found');

            return redirect(route('energi.dataListriks.index'));
        }

        $this->dataListrikRepository->delete($id);

        Flash::success('Data Listrik deleted successfully.');

        return redirect(route('energi.dataListriks.index'));
    }
}
