<?php

namespace App\Http\Controllers\Kesehatan;

use App\DataTables\Kesehatan\DataPusKbDataTable;
use App\Http\Requests\Kesehatan;
use App\Http\Requests\Kesehatan\CreateDataPusKbRequest;
use App\Http\Requests\Kesehatan\UpdateDataPusKbRequest;
use App\Repositories\Kesehatan\DataPusKbRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DataPusKbController extends AppBaseController
{
    /** @var DataPusKbRepository $dataPusKbRepository*/
    private $dataPusKbRepository;

    public function __construct(DataPusKbRepository $dataPusKbRepo)
    {
        $this->dataPusKbRepository = $dataPusKbRepo;
    }

    /**
     * Display a listing of the DataPusKb.
     *
     * @param DataPusKbDataTable $dataPusKbDataTable
     *
     * @return Response
     */
    public function index(DataPusKbDataTable $dataPusKbDataTable)
    {
        return $dataPusKbDataTable->render('kesehatan.data_pus_kbs.index');
    }

    /**
     * Show the form for creating a new DataPusKb.
     *
     * @return Response
     */
    public function create()
    {
        return view('kesehatan.data_pus_kbs.create');
    }

    /**
     * Store a newly created DataPusKb in storage.
     *
     * @param CreateDataPusKbRequest $request
     *
     * @return Response
     */
    public function store(CreateDataPusKbRequest $request)
    {
        $input = $request->all();

        $dataPusKb = $this->dataPusKbRepository->create($input);

        Flash::success('Data Pus Kb saved successfully.');

        return redirect(route('kesehatan.dataPusKbs.index'));
    }

    /**
     * Display the specified DataPusKb.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataPusKb = $this->dataPusKbRepository->find($id);

        if (empty($dataPusKb)) {
            Flash::error('Data Pus Kb not found');

            return redirect(route('kesehatan.dataPusKbs.index'));
        }

        return view('kesehatan.data_pus_kbs.show')->with('dataPusKb', $dataPusKb);
    }

    /**
     * Show the form for editing the specified DataPusKb.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataPusKb = $this->dataPusKbRepository->find($id);

        if (empty($dataPusKb)) {
            Flash::error('Data Pus Kb not found');

            return redirect(route('kesehatan.dataPusKbs.index'));
        }

        return view('kesehatan.data_pus_kbs.edit')->with('dataPusKb', $dataPusKb);
    }

    /**
     * Update the specified DataPusKb in storage.
     *
     * @param int $id
     * @param UpdateDataPusKbRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDataPusKbRequest $request)
    {
        $dataPusKb = $this->dataPusKbRepository->find($id);

        if (empty($dataPusKb)) {
            Flash::error('Data Pus Kb not found');

            return redirect(route('kesehatan.dataPusKbs.index'));
        }

        $dataPusKb = $this->dataPusKbRepository->update($request->all(), $id);

        Flash::success('Data Pus Kb updated successfully.');

        return redirect(route('kesehatan.dataPusKbs.index'));
    }

    /**
     * Remove the specified DataPusKb from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataPusKb = $this->dataPusKbRepository->find($id);

        if (empty($dataPusKb)) {
            Flash::error('Data Pus Kb not found');

            return redirect(route('kesehatan.dataPusKbs.index'));
        }

        $this->dataPusKbRepository->delete($id);

        Flash::success('Data Pus Kb deleted successfully.');

        return redirect(route('kesehatan.dataPusKbs.index'));
    }
}
