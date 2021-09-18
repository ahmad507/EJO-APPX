<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    use HasFactory;

    protected $fillable = ['category_name'];

    public function ejo()
    {
        return $this->hasMany(Ejo::class, 'id')->select('id', 'category_id');
    }
}
