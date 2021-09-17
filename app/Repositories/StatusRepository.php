<?php

namespace App\Repositories;

use App\Models\Main\Status;

class StatusRepository
{
    public function formatData($status)
    {
        return [
            'id' => $status->id,
            'status' => $status->status_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++ */
    public function getDataStatus()
    {
        $status = Status::orderBy('id', 'asc')
            ->get()
            ->map(function ($status) {
                return $this->formatData($status);
            });
        return $status;
    }
    /**++++++++++++++++++++++++++++++++++++ */
    public function findDataStatus($id)
    {
        $status = Status::where('id', $id)
            ->firstOrFail();
        return $this->formatData($status);
    }
}
