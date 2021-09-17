<?php

namespace App\Http\Controllers;

use App\Repositories\StatusRepository;

class StatusController extends Controller
{
    protected $statusRepository;
    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    public function index()
    {
        $status = $this->statusRepository->getDataStatus();
        return $status;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $status = $this->statusRepository->findDataStatus($id);
        return $status;
    }
}
