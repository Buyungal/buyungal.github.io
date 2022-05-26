<?php

namespace App\Http\Controllers\Pendidikan;

use App\DataTables\Pendidikan\DataMadrasahIbtidaiyahDataTable;
use App\Http\Requests\Pendidikan;
use App\Http\Requests\Pendidikan\CreateDataMadrasahIbtidaiyahRequest;
use App\Http\Requests\Pendidikan\UpdateDataMadrasahIbtidaiyahRequest;
use App\Repositories\Pendidikan\DataMadrasahIbtidaiyahRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataMadrasahIbtidaiyahController extends AppBaseController
{
    /** @var DataMadrasahIbtidaiyahRepository $dataMadrasahIbtidaiyahRepository*/
    private $dataMadrasahIbtidaiyahRepository;

    public function __construct(DataMadrasahIbtidaiyahRepository $dataMadrasahIbtidaiyahRepo)
    {
        $this->dataMadrasahIbtidaiyahRepository = $dataMadrasahIbtidaiyahRepo;
    }

    /**
     * Display a listing of the DataMadrasahIbtidaiyah.
     *
     * @param DataMadrasahIbtidaiyahDataTable $dataMadrasahIbtidaiyahDataTable
     *
     * @return Response
     */
    public function index(DataMadrasahIbtidaiyahDataTable $dataMadrasahIbtidaiyahDataTable)
    {
        return $dataMadrasahIbtidaiyahDataTable->render('pendidikan.data_madrasah_ibtidaiyahs.index');
    }

    /**
     * Show the form for creating a new DataMadrasahIbtidaiyah.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendidikan.data_madrasah_ibtidaiyahs.create');
    }

    /**
     * Store a newly created DataMadrasahIbtidaiyah in storage.
     *
     * @param CreateDataMadrasahIbtidaiyahRequest $request
     *
     * @return Response
     */
    public function store(CreateDataMadrasahIbtidaiyahRequest $request)
    {
        $input = $request->all();

        $dataMadrasahIbtidaiyah = $this->dataMadrasahIbtidaiyahRepository->create($input);

        Flash::success('Data Madrasah Ibtidaiyah saved successfully.');

        return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
    }

    /**
     * Display the specified DataMadrasahIbtidaiyah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataMadrasahIbtidaiyah = $this->dataMadrasahIbtidaiyahRepository->find($id);

        if (empty($dataMadrasahIbtidaiyah)) {
            Flash::error('Data Madrasah Ibtidaiyah not found');

            return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
        }

        return view('pendidikan.data_madrasah_ibtidaiyahs.show')->with('dataMadrasahIbtidaiyah', $dataMadrasahIbtidaiyah);
    }

    /**
     * Show the form for editing the specified DataMadrasahIbtidaiyah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataMadrasahIbtidaiyah = $this->dataMadrasahIbtidaiyahRepository->find($id);

        if (empty($dataMadrasahIbtidaiyah)) {
            Flash::error('Data Madrasah Ibtidaiyah not found');

            return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
        }

        return view('pendidikan.data_madrasah_ibtidaiyahs.edit')->with('dataMadrasahIbtidaiyah', $dataMadrasahIbtidaiyah);
    }

    /**
     * Update the specified DataMadrasahIbtidaiyah in storage.
     *
     * @param int $id
     * @param UpdateDataMadrasahIbtidaiyahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataMadrasahIbtidaiyahRequest $request)
    {
        $dataMadrasahIbtidaiyah = $this->dataMadrasahIbtidaiyahRepository->find($id);

        if (empty($dataMadrasahIbtidaiyah)) {
            Flash::error('Data Madrasah Ibtidaiyah not found');

            return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
        }

        $dataMadrasahIbtidaiyah = $this->dataMadrasahIbtidaiyahRepository->update($request->all(), $id);

        Flash::success('Data Madrasah Ibtidaiyah updated successfully.');

        return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
    }

    /**
     * Remove the specified DataMadrasahIbtidaiyah from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataMadrasahIbtidaiyah = $this->dataMadrasahIbtidaiyahRepository->find($id);

        if (empty($dataMadrasahIbtidaiyah)) {
            Flash::error('Data Madrasah Ibtidaiyah not found');

            return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
        }

        $this->dataMadrasahIbtidaiyahRepository->delete($id);

        Flash::success('Data Madrasah Ibtidaiyah deleted successfully.');

        return redirect(route('pendidikan.dataMadrasahIbtidaiyahs.index'));
    }
}
