<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['alias', 'status'];

}