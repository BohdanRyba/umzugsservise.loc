<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;


    const STATUS_PUBLISHED = 'published';
    const STATUS_PROCESSING = 'processing';

    protected $fillable = ['alias', 'status'];

    public $translatedAttributes = ['name'];

    public static function getStatuses()
    {
        return [
            Category::STATUS_PROCESSING => 'Processing',
            Category::STATUS_PUBLISHED => 'Published',
        ];
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_categories');
    }
}
