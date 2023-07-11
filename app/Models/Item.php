<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 't_items';
    protected $primaryKey = 'id';

    public function getByName($name) {
        return $this->where('name', $name)->get();
    }
}
