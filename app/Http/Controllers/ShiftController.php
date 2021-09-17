<?php

namespace App\Http\Controllers;

use App\Repositories\ShiftRepository;

class ShiftController extends Controller
{
    protected $shiftRepository;
    public function __construct(ShiftRepository $shiftRepository)
    {
        $this->shiftRepository = $shiftRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $shift = $this->shiftRepository->getDataShift();
        return $shift;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $shift = $this->shiftRepository->findDataShift($id);
        return $shift;
    }
}
