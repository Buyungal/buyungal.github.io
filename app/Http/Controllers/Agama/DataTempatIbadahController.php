<?php

namespace App\Http\Controllers\Agama;

use App\DataTables\Agama\DataTempatIbadahDataTable;
use App\Http\Requests\Agama;
use App\Http\Requests\Agama\CreateDataTempatIbadahRequest;
use App\Http\Requests\Agama\UpdateDataTempatIbadahRequest;
use App\Repositories\Agama\DataTempatIbadahRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataTempatIbadahController extends AppBaseController
{
    /** @var DataTempatIbadahRepository $dataTempatIbadahRepository*/
    private $dataTempatIbadahRepository;

    public function __construct(DataTempatIbadahRepository $dataTempatIbadahRepo)
    {
        $this->dataTempatIbadahRepository = $dataTempatIbadahRepo;
    }

    /**
     * Display a listing of the DataTempatIbadah.
     *
     * @param DataTempatIbadahDataTable $dataTempatIbadahDataTable
     *
     * @return Response
     */
    public function index(DataTempatIbadahDataTable $dataTempatIbadahDataTable)
    {
        return $dataTempatIbadahDataTable->render('agama.data_tempat_ibadahs.index');
    }

    /**
     * Show the form for creating a new DataTempatIbadah.
     *
     * @return Response
     */
    public function create()
    {
        return view('agama.data_tempat_ibadahs.create');
    }

    /**
     * Store a newly created DataTempatIbadah in storage.
     *
     * @param CreateDataTempatIbadahRequest $request
     *
     * @return Response
     */
    public function store(CreateDataTempatIbadahRequest $request)
    {
        $input = $request->all();

        $dataTempatIbadah = $this->dataTempatIbadahRepository->create($input);

        Flash::success('Data Tempat Ibadah saved successfully.');

        return redirect(route('agama.dataTempatIbadahs.index'));
    }

    /**
     * Display the specified DataTempatIbadah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataTempatIbadah = $this->dataTempatIbadahRepository->find($id);

        if (empty($dataTempatIbadah)) {
            Flash::error('Data Tempat Ibadah not found');

            return redirect(route('agama.dataTempatIbadahs.index'));
        }

        return view('agama.data_tempat_ibadahs.show')->with('dataTempatIbadah', $dataTempatIbadah);
    }

    /**
     * Show the form for editing the specified DataTempatIbadah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataTempatIbadah = $this->dataTempatIbadahRepository->find($id);

        if (empty($dataTempatIbadah)) {
            Flash::error('Data Tempat Ibadah not found');

            return redirect(route('agama.dataTempatIbadahs.index'));
        }

        return view('agama.data_tempat_ibadahs.edit')->with('dataTempatIbadah', $dataTempatIbadah);
    }

    /**
     * Update the specified DataTempatIbadah in storage.
     *
     * @param int $id
     * @param UpdateDataTempatIbadahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataTempatIbadahRequest $request)
    {
        $dataTempatIbadah = $this->dataTempatIbadahRepository->find($id);

        if (empty($dataTempatIbadah)) {
            Flash::error('Data Tempat Ibadah not found');

            return redirect(route('agama.dataTempatIbadahs.index'));
        }

        $dataTempatIbadah = $this->dataTempatIbadahRepository->update($request->all(), $id);

        Flash::success('Data Tempat Ibadah updated successfully.');

        return redirect(route('agama.dataTempatIbadahs.index'));
    }

    /**
     * Remove the specified DataTempatIbadah from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataTempatIbadah = $this->dataTempatIbadahRepository->find($id);

        if (empty($dataTempatIbadah)) {
            Flash::error('Data Tempat Ibadah not found');

            return redirect(route('agama.dataTempatIbadahs.index'));
        }

        $this->dataTempatIbadahRepository->delete($id);

        Flash::success('Data Tempat Ibadah deleted successfully.');

        return redirect(route('agama.dataTempatIbadahs.index'));
    }
}
