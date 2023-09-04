<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'context',
        'user_id',
        'series_id',
        'published_at',
        'time_read',
    ];

    public static function getArticleInfo($user_id) {
        // return static::whereUserId($user_id)->get(['title', 'published_at', 'time_read']);
        return static::whereUserId(2)->get(['title', 'published_at', 'time_read']);
    }

    public function getPublishTimeAttribute() {
        // 2 Sep, 2023
        return date_format(date_create($this->published_at), "j M, Y");
    }

    public function getPublishTagAttribute() {
        // 2 Sep, 2023
        return date_format(date_create($this->published_at), "j M, g:i A");
    }
}
