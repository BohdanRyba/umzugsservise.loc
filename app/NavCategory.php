<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavCategory extends Model
{
    public function parent()
    {
        return $this->belongsTo(static::class,'category_id');
    }
    public function children()
    {
        return $this->hasMany(static::class,'category_id');
    }
}
