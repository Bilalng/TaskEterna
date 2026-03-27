<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Licens;
class Product extends Model
{
    protected $fillable = ['title', 'description', 'avaliable_stock'];

    public $timestamps = false;

    public function licens()
    {
        return $this->hasMany(Licens::class);
    }
}
