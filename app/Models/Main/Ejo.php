<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejo extends Model
{
    public $table = 'ejo';
    use HasFactory;
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
    protected $fillable = [
        'ejo_number', 'ejo_machine', 'ejo_description', 'shift_id', 'group_id', 'category_id', 'status_id'
    ];
    /**++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

    public function shift()
    {
        return $this->belongsTo(Shift::class)->select('id', 'shift_name');
    }
    public function group()
    {
        return $this->belongsTo(Group::class)->select('id', 'group_name');
    }
    public function category()
    {
        return $this->belongsTo(Category::class)->select('id', 'category_name');
    }
    public function status()
    {
        return $this->belongsTo(Status::class)->select('id', 'status_name');
    }
}
