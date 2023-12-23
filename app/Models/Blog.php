<?php

namespace App\Models;

use App\Enums\LayoutBlogEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'layout_id',
        'your_website',
        'x_link',
        'linked_link',
        'youtube_link',
        'github_link',
        'daily_link',
        'pmaker',
    ];

    public function getLayoutNameAttribute()
    {
        return LayoutBlogEnum::getKey($this->layout_id);
    }
}
