<?php

namespace App\Http\Controllers\Kesehatan;

use App\DataTables\Kesehatan\DataPuskesmasDataTable;
use App\Http\Requests\Kesehatan;
use App\Http\Requests\Kesehatan\CreateDataPuskesmasRequest;
use App\Http\Requests\Kesehatan\UpdateDataPuskesmasRequest;
use App\Repositories\Kesehatan\DataPuskesmasRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataPuskesmasController extends AppBaseController
{
    /** @var DataPuskesmasRepository $dataPuskesmasRepository*/
    private $dataPuskesmasRepository;

    public function __construct(DataPuskesmasRepository $dataPuskesmasRepo)
    {
        $this->dataPuskesmasRepository = $dataPuskesmasRepo;
    }

    /**
     * Display a listing of the DataPuskesmas.
     *
     * @param DataPuskesmasDataTable $dataPuskesmasDataTable
     *
     * @return Response
     */
    public function index(DataPuskesmasDataTable $dataPuskesmasDataTable)
    {
        return $dataPuskesmasDataTable->render('kesehatan.data_puskesmas.index');
    }

    /**
     * Show the form for creating a new DataPuskesmas.
     *
     * @return Response
     */
    public function create()
    {
        return view('kesehatan.data_puskesmas.create');
    }

    /**
     * Store a newly created DataPuskesmas in storage.
     *
     * @param CreateDataPuskesmasRequest $request
     *
     * @return Response
     */
    public function store(CreateDataPuskesmasRequest $request)
    {
        $input = $request->all();

        $dataPuskesmas = $this->dataPuskesmasRepository->create($input);

        Flash::success('Data Puskesmas saved successfully.');

        return redirect(route('kesehatan.dataPuskesmas.index'));
    }

    /**
     * Display the specified DataPuskesmas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataPuskesmas = $this->dataPuskesmasRepository->find($id);

        if (empty($dataPuskesmas)) {
            Flash::error('Data Puskesmas not found');

            return redirect(route('kesehatan.dataPuskesmas.index'));
        }

        return view('kesehatan.data_puskesmas.show')->with('dataPuskesmas', $dataPuskesmas);
    }

    /**
     * Show the form for editing the specified DataPuskesmas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataPuskesmas = $this->dataPuskesmasRepository->find($id);

        if (empty($dataPuskesmas)) {
            Flash::error('Data Puskesmas not found');

            return redirect(route('kesehatan.dataPuskesmas.index'));
        }

        return view('kesehatan.data_puskesmas.edit')->with('dataPuskesmas', $dataPuskesmas);
    }

    /**
     * Update the specified DataPuskesmas in storage.
     *
     * @param int $id
     * @param UpdateDataPuskesmasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataPuskesmasRequest $request)
    {
        $dataPuskesmas = $this->dataPuskesmasRepository->find($id);

        if (empty($dataPuskesmas)) {
            Flash::error('Data Puskesmas not found');

            return redirect(route('kesehatan.dataPuskesmas.index'));
        }

        $dataPuskesmas = $this->dataPuskesmasRepository->update($request->all(), $id);

        Flash::success('Data Puskesmas updated successfully.');

        return redirect(route('kesehatan.dataPuskesmas.index'));
    }

    /**
     * Remove the specified DataPuskesmas from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataPuskesmas = $this->dataPuskesmasRepository->find($id);

        if (empty($dataPuskesmas)) {
            Flash::error('Data Puskesmas not found');

            return redirect(route('kesehatan.dataPuskesmas.index'));
        }

        $this->dataPuskesmasRepository->delete($id);

        Flash::success('Data Puskesmas deleted successfully.');

        return redirect(route('kesehatan.dataPuskesmas.index'));
    }
}
