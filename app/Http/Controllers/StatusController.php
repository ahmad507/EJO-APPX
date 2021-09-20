<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatusRequest;
use App\Repositories\StatusRepository;

class StatusController extends Controller
{
    /**Data Formatting ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    protected $statusRepository;
    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $status = $this->statusRepository->getDataStatus();
        return view('main.status.index', compact('status'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $status = $this->statusRepository->findDataStatus($id);
        return $status;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function create()
    {
        return view('main.status.create');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function store(StoreStatusRequest $status)
    {
        $this->statusRepository->storeDataStatus($status);
        return redirect()->route('status.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function edit($id)
    {
        $status = $this->statusRepository->findDataStatusById($id);
        return view('main.status.edit', compact('status'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function update(StoreStatusRequest $id, $status)
    {
        $this->statusRepository->updateDataStatus($id, $status);
        return redirect()->route('status.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function destroy($id)
    {
        $this->statusRepository->deleteDataStatus($id);
        return redirect()->route('status.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
