<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShiftRequest;
use App\Repositories\ShiftRepository;

class ShiftController extends Controller
{
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    protected $shiftRepository;
    public function __construct(ShiftRepository $shiftRepository)
    {
        $this->shiftRepository = $shiftRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $shift = $this->shiftRepository->getDataShift();
        return view('main.shift.index', compact('shift'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $shift = $this->shiftRepository->findDataShift($id);
        return $shift;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function create()
    {
        return view('main.shift.create');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function store(StoreShiftRequest $shift)
    {
        $this->shiftRepository->storeDataShift($shift);
        return redirect()->route('shift.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function edit($id)
    {
        $shift = $this->shiftRepository->findDataShiftById($id);
        return view('main.shift.edit', compact('shift'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function update(StoreShiftRequest $id, $shift)
    {
        $this->shiftRepository->updateDataShift($id, $shift);
        return redirect()->route('shift.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function destroy($id)
    {
        $this->shiftRepository->deleteDataGroup($id);
        return redirect()->route('shift.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
