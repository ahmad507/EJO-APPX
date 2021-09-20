<?php

namespace App\Repositories;

use App\Models\Main\Status;
use Illuminate\Http\Request;


class StatusRepository
{
    /**Data Formatting ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    public function formatData($status)
    {
        return [
            'id' => $status->id,
            'status' => $status->status_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function getDataStatus()
    {
        $status = Status::orderBy('id', 'asc')
            ->get()
            ->map(function ($status) {
                return $this->formatData($status);
            });
        $newstatus = json_decode($status);
        return $newstatus;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataStatus($id)
    {
        $status = Status::where('id', $id)
            ->firstOrFail();
        $newstatus = json_decode($status);
        return $newstatus;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function storeDataStatus(Request $request)
    {
        $status = Status::create(
            [
                'status_name' => $request->input('status_name')
            ]
        );
        $status->save();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function findDataStatusById($id)
    {
        $status = Status::findOrFail($id);
        $newstatus = json_decode($status);
        return $newstatus;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function updateDataStatus(Request $request, $id)
    {
        $input = $request->all();
        $status = Status::findOrFail($id);
        $status->update($input);
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    public function deleteDataStatus($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
}
