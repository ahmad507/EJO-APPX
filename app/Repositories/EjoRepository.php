<?php

namespace App\Repositories;


use App\Models\Main\Ejo;

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
            'shift' => $ejo->shift->shift_name,
            'group' => $ejo->group->group_name,
            'category' => $ejo->category->category_name,
            'status' => $ejo->status->status_name,
        ];
    }

    /**++++++++++++++++++++++++++++++++++++ */
    public function getDataEjo()
    {
        $ejo = Ejo::orderBy('id', 'asc')
            ->with('shift')
            ->with('group')
            ->with('category')
            ->with('status')
            ->get()
            ->map(function ($ejo) {
                return $this->formatData($ejo);
            });
        $newejo = json_decode($ejo);
        return $newejo;
    }
    /**++++++++++++++++++++++++++++++++++++ */
    public function findDataEjo($ejo_number)
    {
        $ejo = Ejo::where('ejo_number', $ejo_number)
            ->firstOrFail();
        return $this->formatData($ejo);
    }
}
