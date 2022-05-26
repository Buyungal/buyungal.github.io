<?php

namespace App\Http\Controllers\Geografi;

use App\DataTables\Geografi\dataluaswilayahhDataTable;
use App\Http\Requests\Geografi;
use App\Http\Requests\Geografi\CreatedataluaswilayahhRequest;
use App\Http\Requests\Geografi\UpdatedataluaswilayahhRequest;
use App\Repositories\Geografi\dataluaswilayahhRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class dataluaswilayahhController extends AppBaseController
{
    /** @var dataluaswilayahhRepository $dataluaswilayahhRepository*/
    private $dataluaswilayahhRepository;

    public function __construct(dataluaswilayahhRepository $dataluaswilayahhRepo)
    {
        $this->dataluaswilayahhRepository = $dataluaswilayahhRepo;
    }

    /**
     * Display a listing of the dataluaswilayahh.
     *
     * @param dataluaswilayahhDataTable $dataluaswilayahhDataTable
     *
     * @return Response
     */
    public function index(dataluaswilayahhDataTable $dataluaswilayahhDataTable)
    {
        return $dataluaswilayahhDataTable->render('geografi.dataluaswilayahhs.index');
    }

    /**
     * Show the form for creating a new dataluaswilayahh.
     *
     * @return Response
     */
    public function create()
    {
        return view('geografi.dataluaswilayahhs.create');
    }

    /**
     * Store a newly created dataluaswilayahh in storage.
     *
     * @param CreatedataluaswilayahhRequest $request
     *
     * @return Response
     */
    public function store(CreatedataluaswilayahhRequest $request)
    {
        $input = $request->all();

        $dataluaswilayahh = $this->dataluaswilayahhRepository->create($input);

        Flash::success('Dataluaswilayahh saved successfully.');

        return redirect(route('geografi.dataluaswilayahhs.index'));
    }

    /**
     * Display the specified dataluaswilayahh.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataluaswilayahh = $this->dataluaswilayahhRepository->find($id);

        if (empty($dataluaswilayahh)) {
            Flash::error('Dataluaswilayahh not found');

            return redirect(route('geografi.dataluaswilayahhs.index'));
        }

        return view('geografi.dataluaswilayahhs.show')->with('dataluaswilayahh', $dataluaswilayahh);
    }

    /**
     * Show the form for editing the specified dataluaswilayahh.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataluaswilayahh = $this->dataluaswilayahhRepository->find($id);

        if (empty($dataluaswilayahh)) {
            Flash::error('Dataluaswilayahh not found');

            return redirect(route('geografi.dataluaswilayahhs.index'));
        }

        return view('geografi.dataluaswilayahhs.edit')->with('dataluaswilayahh', $dataluaswilayahh);
    }

    /**
     * Update the specified dataluaswilayahh in storage.
     *
     * @param int $id
     * @param UpdatedataluaswilayahhRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedataluaswilayahhRequest $request)
    {
        $dataluaswilayahh = $this->dataluaswilayahhRepository->find($id);

        if (empty($dataluaswilayahh)) {
            Flash::error('Dataluaswilayahh not found');

            return redirect(route('geografi.dataluaswilayahhs.index'));
        }

        $dataluaswilayahh = $this->dataluaswilayahhRepository->update($request->all(), $id);

        Flash::success('Dataluaswilayahh updated successfully.');

        return redirect(route('geografi.dataluaswilayahhs.index'));
    }

    /**
     * Remove the specified dataluaswilayahh from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataluaswilayahh = $this->dataluaswilayahhRepository->find($id);

        if (empty($dataluaswilayahh)) {
            Flash::error('Dataluaswilayahh not found');

            return redirect(route('geografi.dataluaswilayahhs.index'));
        }

        $this->dataluaswilayahhRepository->delete($id);

        Flash::success('Dataluaswilayahh deleted successfully.');

        return redirect(route('geografi.dataluaswilayahhs.index'));
    }
}
