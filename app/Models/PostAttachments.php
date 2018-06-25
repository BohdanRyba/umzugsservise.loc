<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostAttachments extends Model
{
    protected $fillable = [
        'post_id',
        'fileName',
        'fileExtension',
        'fileMime',
        'fileSize',
        'filePath',
        'fileHeight',
        'fileWidth',
        'sizeType'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
