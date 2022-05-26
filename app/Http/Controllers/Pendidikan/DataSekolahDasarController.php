<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataSekolahDasarDataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataSekolahDasarRequest;
use App\Http\Requests\Pendidikan\UpdateDataSekolahDasarRequest;
use App\Repositories\Pendidikan\DataSekolahDasarRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataSekolahDasarController extends AppBaseController
{
    /** @var DataSekolahDasarRepository $dataSekolahDasarRepository*/
    private $dataSekolahDasarRepository;

    public function __construct(DataSekolahDasarRepository $dataSekolahDasarRepo)
    {
        $this->dataSekolahDasarRepository = $dataSekolahDasarRepo;
    }

    /**
     * Display a listing of the DataSekolahDasar.
     *
     * @param DataSekolahDasarDataTable $dataSekolahDasarDataTable
     *
     * @return Response
     */
    public function index(DataSekolahDasarDataTable $dataSekolahDasarDataTable)
    {
        return $dataSekolahDasarDataTable->render('pendidikan.data_sekolah_dasars.index');
    }

    /**
     * Show the form for creating a new DataSekolahDasar.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_sekolah_dasars.create');
    }

    /**
     * Store a newly created DataSekolahDasar in storage.
     *
     * @param CreateDataSekolahDasarRequest $request
     *
     * @return Response
     */
    public function store(CreateDataSekolahDasarRequest $request)
    {
        $input = $request->all();

        $dataSekolahDasar = $this->dataSekolahDasarRepository->create($input);

        Flash::success('Data Sekolah Dasar saved successfully.');

        return redirect(route('pendidikan.dataSekolahDasars.index'));
    }

    /**
     * Display the specified DataSekolahDasar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataSekolahDasar = $this->dataSekolahDasarRepository->find($id);

        if (empty($dataSekolahDasar)) {
            Flash::error('Data Sekolah Dasar not found');

            return redirect(route('pendidikan.dataSekolahDasars.index'));
        }

        return view('pendidikan.data_sekolah_dasars.show')->with('dataSekolahDasar', $dataSekolahDasar);
    }

    /**
     * Show the form for editing the specified DataSekolahDasar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataSekolahDasar = $this->dataSekolahDasarRepository->find($id);

        if (empty($dataSekolahDasar)) {
            Flash::error('Data Sekolah Dasar not found');

            return redirect(route('pendidikan.dataSekolahDasars.index'));
        }

        return view('pendidikan.data_sekolah_dasars.edit')->with('dataSekolahDasar', $dataSekolahDasar);
    }

    /**
     * Update the specified DataSekolahDasar in storage.
     *
     * @param int $id
     * @param UpdateDataSekolahDasarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataSekolahDasarRequest $request)
    {
        $dataSekolahDasar = $this->dataSekolahDasarRepository->find($id);

        if (empty($dataSekolahDasar)) {
            Flash::error('Data Sekolah Dasar not found');

            return redirect(route('pendidikan.dataSekolahDasars.index'));
        }

        $dataSekolahDasar = $this->dataSekolahDasarRepository->update($request->all(), $id);

        Flash::success('Data Sekolah Dasar updated successfully.');

        return redirect(route('pendidikan.dataSekolahDasars.index'));
    }

    /**
     * Remove the specified DataSekolahDasar from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataSekolahDasar = $this->dataSekolahDasarRepository->find($id);

        if (empty($dataSekolahDasar)) {
            Flash::error('Data Sekolah Dasar not found');

            return redirect(route('pendidikan.dataSekolahDasars.index'));
        }

        $this->dataSekolahDasarRepository->delete($id);

        Flash::success('Data Sekolah Dasar deleted successfully.');

        return redirect(route('pendidikan.dataSekolahDasars.index'));
    }
}
