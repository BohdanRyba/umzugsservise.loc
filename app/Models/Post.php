<?php

namespace App\Models;

use App\User;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable;

    const STATUS_PUBLISHED = 'published';
    const STATUS_PROCESSING = 'processing';

    public $translatedAttributes = ['title', 'description', 'content'];

    protected $fillable = ['status', 'user_id'];

    public static function getStatuses()
    {
        return [
            Post::STATUS_PROCESSING => 'Processing',
            Post::STATUS_PUBLISHED => 'Published',
        ];
    }

    public function attachments()
    {
        return $this->hasOne(PostAttachments::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'post_categories');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
