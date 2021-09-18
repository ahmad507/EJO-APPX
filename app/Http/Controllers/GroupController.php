<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Repositories\GroupRepository;


class GroupController extends Controller
{
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    protected $groupRepository;
    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $group = $this->groupRepository->getDataGroup();
        return view('main.group.index', compact('group'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $group = $this->groupRepository->findDataGroup($id);
        return $group;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function create()
    {
        return view('main.group.create');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function store(StoreGroupRequest $group)
    {
        $this->groupRepository->storeDataGroup($group);
        return redirect()->route('group.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function edit($id)
    {
        $group = $this->groupRepository->findDataGroupById($id);
        return view('main.group.edit', compact('group'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function update(StoreGroupRequest $id, $group)
    {
        $this->groupRepository->updateDataGroup($id, $group);
        return redirect()->route('group.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function destroy($id)
    {
        $this->groupRepository->deleteDataGroup($id);
        return redirect()->route('group.index');
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
