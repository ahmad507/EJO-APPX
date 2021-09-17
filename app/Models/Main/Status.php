<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = 'status';
    use HasFactory;
    public function ejo()
    {
        return $this->hasMany(Ejo::class, 'id')->select('id', 'status_id');
    }
}
