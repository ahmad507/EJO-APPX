<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEjoRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\EjoRepository;
use App\Repositories\GroupRepository;
use App\Repositories\ShiftRepository;

class EjoController extends Controller
{
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    protected $ejoRepository;
    public function __construct(
        EjoRepository $ejoRepository,
        ShiftRepository $shiftRepository,
        GroupRepository $groupRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->ejoRepository = $ejoRepository;
        $this->shiftRepository = $shiftRepository;
        $this->groupRepository = $groupRepository;
        $this->categoryRepository = $categoryRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $ejo = $this->ejoRepository->getDataEjo();
        return view('main.ejo.index', compact('ejo'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $ejo = $this->ejoRepository->findDataEjo($id);
        return $ejo;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function create()
    {
        $shift = $this->shiftRepository->getDataShift();
        $group = $this->groupRepository->getDataGroup();
        $category = $this->categoryRepository->getDataCategory();
        return view('main.ejo.create', compact('shift', 'group', 'category'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function store(StoreEjoRequest $ejo)
    {
        $this->ejoRepository->storeDataEjo($ejo);
        return redirect()->route('ejo.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function edit($id)
    {
        $ejo = $this->ejoRepository->findDataEjoById($id);
        return view('main.ejo.edit', compact('ejo'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function update(StoreEjoRequest $id, $ejo)
    {
        $this->ejoRepository->updateDataEjo($id, $ejo);
        return redirect()->route('ejo.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function destroy($id)
    {
        $this->ejoRepository->deleteDataEjo($id);
        return redirect()->route('ejo.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
