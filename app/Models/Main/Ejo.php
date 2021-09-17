<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejo extends Model
{
    public $table = 'ejo';
    use HasFactory;

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
