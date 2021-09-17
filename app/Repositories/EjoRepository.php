<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class EjoRepository
{
    /**Data Formatting */
    public function formatData($ejo)
    {
        return [
            'id' => $ejo->id,
            'number' => $ejo->ejo_number,
            'machine' => $ejo->ejo_machine,
            'problem' => $ejo->ejo_description,
            'shift' => $ejo->shift_name,
            'group' => $ejo->group_name,
            'category' => $ejo->category_name,
            'status' => $ejo->status_name,
        ];
    }
    public function getDataEjo()
    {
        $ejo = DB::table('ejo')
            ->leftJoin('shift', 'ejo.shift_id', '=', 'shift.id')
            ->leftJoin('group', 'ejo.group_id', '=', 'group.id')
            ->leftJoin('categories', 'ejo.category_id', '=', 'categories.id')
            ->leftJoin('status', 'ejo.status_id', '=', 'status.id')
            ->select('ejo.*', 'shift.shift_name', 'group.group_name', 'categories.category_name', 'status.status_name')
            ->get()
            ->map(function ($ejo) {
                return $this->formatData($ejo);
            });
        return $ejo;
    }
}
