<?php

namespace App\Repositories;

use App\Models\Main\Shift;
use Illuminate\Http\Request;

class ShiftRepository
{
    /**Data Formatting ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    public function formatData($shift)
    {
        return [
            'id' => $shift->id,
            'shift' => $shift->shift_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function getDataShift()
    {
        $shift = Shift::orderBy('id', 'asc')
            ->get()
            ->map(function ($shift) {
                return $this->formatData($shift);
            });
        $newshift = json_decode($shift);
        return $newshift;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataShift($id)
    {
        $shift = Shift::where('id', $id)
            ->firstOrFail();
        return $this->formatData($shift);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function storeDataShift(Request $request)
    {
        $shift = Shift::create(
            [
                'shift_name' => $request->input('shift_name')
            ]
        );
        $shift->save();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataShiftById($id)
    {
        $shift = Shift::findOrFail($id);
        $newshift = json_decode($shift);
        return $newshift;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function updateDataShift(Request $request, $id)
    {
        $input = $request->all();
        $shift = Shift::findOrFail($id);
        $shift->update($input);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function deleteDataGroup($id)
    {
        $shift = Shift::findOrFail($id);
        $shift->delete();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
