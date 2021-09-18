<?php

namespace App\Repositories;

use App\Models\Main\Group;
use Illuminate\Http\Request;

class GroupRepository
{
    /**Data Formatting ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    public function formatData($group)
    {
        return [
            'id' => $group->id,
            'group' => $group->group_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function getDataGroup()
    {
        $group = Group::orderBy('id', 'asc')
            ->get()
            ->map(function ($group) {
                return $this->formatData($group);
            });
        $newgroup = json_decode($group);
        return $newgroup;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataGroup($id)
    {
        $group = Group::where('id', $id)
            ->firstOrfail();
        $newgroup = json_decode($group);
        return $this->formatData($newgroup);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function storeDataGroup(Request $request)
    {
        $group = Group::create(
            [
                'group_name' => $request->input('group_name')
            ]
        );
        $group->save();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataGroupById($id)
    {
        $group = Group::findOrFail($id);
        $newgroup = json_decode($group);
        return $newgroup;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function updateDataGroup(Request $request, $id)
    {
        $input = $request->all();
        $group = Group::findOrFail($id);
        $group->update($input);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function deleteDataGroup($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
