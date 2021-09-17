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
        return $this->belongsTo(Shift::class)->orderBy('id', 'desc')->pluck('shift_name');
    }
    public function group()
    {
        return $this->belongsTo(Group::class)->orderBy('id', 'desc')->pluck('group_name');
    }
    public function category()
    {
        return $this->belongsTo(Category::class)->orderBy('id', 'desc')->pluck('category_name');
    }
    public function status()
    {
        return $this->belongsTo(Status::class)->orderBy('id', 'desc')->pluck('status_name');
    }
}
