<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $table = 'group';
    use HasFactory;

    protected $fillable = ['group_name'];

    public function ejo()
    {
        return $this->hasMany(Ejo::class, 'id')->select('id', 'group_id');
    }
}
