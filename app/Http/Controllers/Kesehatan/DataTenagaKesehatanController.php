<?php

namespace App\Http\Controllers\Kesehatan;

use App\DataTables\Kesehatan\DataTenagaKesehatanDataTable;
use App\Http\Requests\Kesehatan;
use App\Http\Requests\Kesehatan\CreateDataTenagaKesehatanRequest;
use App\Http\Requests\Kesehatan\UpdateDataTenagaKesehatanRequest;
use App\Repositories\Kesehatan\DataTenagaKesehatanRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataTenagaKesehatanController extends AppBaseController
{
    /** @var DataTenagaKesehatanRepository $dataTenagaKesehatanRepository*/
    private $dataTenagaKesehatanRepository;

    public function __construct(DataTenagaKesehatanRepository $dataTenagaKesehatanRepo)
    {
        $this->dataTenagaKesehatanRepository = $dataTenagaKesehatanRepo;
    }

    /**
     * Display a listing of the DataTenagaKesehatan.
     *
     * @param DataTenagaKesehatanDataTable $dataTenagaKesehatanDataTable
     *
     * @return Response
     */
    public function index(DataTenagaKesehatanDataTable $dataTenagaKesehatanDataTable)
    {
        return $dataTenagaKesehatanDataTable->render('kesehatan.data_tenaga_kesehatans.index');
    }

    /**
     * Show the form for creating a new DataTenagaKesehatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('kesehatan.data_tenaga_kesehatans.create');
    }

    /**
     * Store a newly created DataTenagaKesehatan in storage.
     *
     * @param CreateDataTenagaKesehatanRequest $request
     *
     * @return Response
     */
    public function store(CreateDataTenagaKesehatanRequest $request)
    {
        $input = $request->all();

        $dataTenagaKesehatan = $this->dataTenagaKesehatanRepository->create($input);

        Flash::success('Data Tenaga Kesehatan saved successfully.');

        return redirect(route('kesehatan.dataTenagaKesehatans.index'));
    }

    /**
     * Display the specified DataTenagaKesehatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataTenagaKesehatan = $this->dataTenagaKesehatanRepository->find($id);

        if (empty($dataTenagaKesehatan)) {
            Flash::error('Data Tenaga Kesehatan not found');

            return redirect(route('kesehatan.dataTenagaKesehatans.index'));
        }

        return view('kesehatan.data_tenaga_kesehatans.show')->with('dataTenagaKesehatan', $dataTenagaKesehatan);
    }

    /**
     * Show the form for editing the specified DataTenagaKesehatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataTenagaKesehatan = $this->dataTenagaKesehatanRepository->find($id);

        if (empty($dataTenagaKesehatan)) {
            Flash::error('Data Tenaga Kesehatan not found');

            return redirect(route('kesehatan.dataTenagaKesehatans.index'));
        }

        return view('kesehatan.data_tenaga_kesehatans.edit')->with('dataTenagaKesehatan', $dataTenagaKesehatan);
    }

    /**
     * Update the specified DataTenagaKesehatan in storage.
     *
     * @param int $id
     * @param UpdateDataTenagaKesehatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataTenagaKesehatanRequest $request)
    {
        $dataTenagaKesehatan = $this->dataTenagaKesehatanRepository->find($id);

        if (empty($dataTenagaKesehatan)) {
            Flash::error('Data Tenaga Kesehatan not found');

            return redirect(route('kesehatan.dataTenagaKesehatans.index'));
        }

        $dataTenagaKesehatan = $this->dataTenagaKesehatanRepository->update($request->all(), $id);

        Flash::success('Data Tenaga Kesehatan updated successfully.');

        return redirect(route('kesehatan.dataTenagaKesehatans.index'));
    }

    /**
     * Remove the specified DataTenagaKesehatan from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataTenagaKesehatan = $this->dataTenagaKesehatanRepository->find($id);

        if (empty($dataTenagaKesehatan)) {
            Flash::error('Data Tenaga Kesehatan not found');

            return redirect(route('kesehatan.dataTenagaKesehatans.index'));
        }

        $this->dataTenagaKesehatanRepository->delete($id);

        Flash::success('Data Tenaga Kesehatan deleted successfully.');

        return redirect(route('kesehatan.dataTenagaKesehatans.index'));
    }
}
