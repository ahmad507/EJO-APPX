<?php

namespace App\Repositories;

use App\Models\Main\Shift;

class ShiftRepository
{
    /**Data Formatting */
    public function formatData($shift)
    {
        return [
            'id' => $shift->id,
            'shift' => $shift->shift_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++ */
    public function getDataShift()
    {
        $shift = Shift::orderBy('id', 'asc')
            ->get()
            ->map(function ($shift) {
                return $this->formatData($shift);
            });
        return $shift;
    }
    /**++++++++++++++++++++++++++++++++++++ */
    public function findDataShift($id)
    {
        $shift = Shift::where('id', $id)
            ->firstOrFail();
        return $this->formatData($shift);
    }
}
