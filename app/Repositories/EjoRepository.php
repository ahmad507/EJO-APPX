<?php

namespace App\Repositories;


use App\Models\Main\Ejo;
use Illuminate\Http\Request;

class EjoRepository
{
    /**Data Formatting ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
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

    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
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
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataEjo($ejo_number)
    {
        $ejo = Ejo::where('ejo_number', $ejo_number)
            ->firstOrFail();
        return $this->formatData($ejo);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function storeDataEjo(Request $request)
    {
        $ejo = Ejo::create(
            [
                'ejo_number' => $request->input('ejo_number'),
                'ejo_machine' => $request->input('ejo_machine'),
                'ejo_description' => $request->input('ejo_description'),
                'shift_id' => $request->input('shift_id'),
                'group_id' => $request->input('group_id'),
                'category_id' => $request->input('category_id'),
                'status_id' => $request->input('status_id')
            ]
        );
        $ejo->save();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataEjoById($id)
    {
        $ejo = Ejo::findOrFail($id);
        $newejo = json_decode($ejo);
        return $newejo;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function updateDataEjo(Request $request, $id)
    {
        $input = $request->all();
        $ejo = Ejo::findOrFail($id);
        $ejo->update($input);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function deleteDataEjo($id)
    {
        $ejo = Ejo::findOrFail($id);
        $ejo->delete();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
