<?php

namespace App\Repositories;

use App\Models\Main\Group;

class GroupRepository
{
    /**Data Formatting */
    public function formatData($group)
    {
        return [
            'id' => $group->id,
            'group' => $group->group_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++ */
    public function getDataGroup()
    {
        $group = Group::orderBy('id', 'asc')
            ->get()
            ->map(function ($group) {
                return $this->formatData($group);
            });
        return $group;
    }
}
