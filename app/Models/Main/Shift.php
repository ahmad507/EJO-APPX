<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $table = 'shift';
    use HasFactory;

    protected $fillable = ['shift_name'];

    public function ejo()
    {
        return $this->hasMany(Ejo::class, 'id')->select('id', 'shift_id');
    }
}
