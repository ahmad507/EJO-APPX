<?php

namespace App\Http\Controllers;

use App\Repositories\GroupRepository;


class GroupController extends Controller
{
    protected $groupRepository;
    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
    public function index()
    {
        $group = $this->groupRepository->getDataGroup();
        return $group;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function show($id)
    {
        $group = $this->groupRepository->findDataGroup($id);
        return $group;
    }
}
