<?php

namespace App\Http\Controllers\Pertanian;

use App\DataTables\Pertanian\DataTernakDataTable;
use App\Http\Requests\Pertanian;
use App\Http\Requests\Pertanian\CreateDataTernakRequest;
use App\Http\Requests\Pertanian\UpdateDataTernakRequest;
use App\Repositories\Pertanian\DataTernakRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataTernakController extends AppBaseController
{
    /** @var DataTernakRepository $dataTernakRepository*/
    private $dataTernakRepository;

    public function __construct(DataTernakRepository $dataTernakRepo)
    {
        $this->dataTernakRepository = $dataTernakRepo;
    }

    /**
     * Display a listing of the DataTernak.
     *
     * @param DataTernakDataTable $dataTernakDataTable
     *
     * @return Response
     */
    public function index(DataTernakDataTable $dataTernakDataTable)
    {
        return $dataTernakDataTable->render('pertanian.data_ternaks.index');
    }

    /**
     * Show the form for creating a new DataTernak.
     *
     * @return Response
     */
    public function create()
    {
        return view('pertanian.data_ternaks.create');
    }

    /**
     * Store a newly created DataTernak in storage.
     *
     * @param CreateDataTernakRequest $request
     *
     * @return Response
     */
    public function store(CreateDataTernakRequest $request)
    {
        $input = $request->all();

        $dataTernak = $this->dataTernakRepository->create($input);

        Flash::success('Data Ternak saved successfully.');

        return redirect(route('pertanian.dataTernaks.index'));
    }

    /**
     * Display the specified DataTernak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataTernak = $this->dataTernakRepository->find($id);

        if (empty($dataTernak)) {
            Flash::error('Data Ternak not found');

            return redirect(route('pertanian.dataTernaks.index'));
        }

        return view('pertanian.data_ternaks.show')->with('dataTernak', $dataTernak);
    }

    /**
     * Show the form for editing the specified DataTernak.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataTernak = $this->dataTernakRepository->find($id);

        if (empty($dataTernak)) {
            Flash::error('Data Ternak not found');

            return redirect(route('pertanian.dataTernaks.index'));
        }

        return view('pertanian.data_ternaks.edit')->with('dataTernak', $dataTernak);
    }

    /**
     * Update the specified DataTernak in storage.
     *
     * @param int $id
     * @param UpdateDataTernakRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataTernakRequest $request)
    {
        $dataTernak = $this->dataTernakRepository->find($id);

        if (empty($dataTernak)) {
            Flash::error('Data Ternak not found');

            return redirect(route('pertanian.dataTernaks.index'));
        }

        $dataTernak = $this->dataTernakRepository->update($request->all(), $id);

        Flash::success('Data Ternak updated successfully.');

        return redirect(route('pertanian.dataTernaks.index'));
    }

    /**
     * Remove the specified DataTernak from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataTernak = $this->dataTernakRepository->find($id);

        if (empty($dataTernak)) {
            Flash::error('Data Ternak not found');

            return redirect(route('pertanian.dataTernaks.index'));
        }

        $this->dataTernakRepository->delete($id);

        Flash::success('Data Ternak deleted successfully.');

        return redirect(route('pertanian.dataTernaks.index'));
    }
}
