<?php

namespace App\Models;

use App\User;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable;

    public $translatedAttributes = ['title', 'description', 'content'];

    protected $fillable = ['status', 'user_id', 'postImg', 'postImgMime', 'postImgName', 'postImgSize'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
