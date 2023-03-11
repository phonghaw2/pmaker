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
        'username',
        'aboutme',
        'company_func',
        'address',
        'phone_number',
        'tech_stack',
        'education',
        'layout_id',
    ];

    public function getLayoutNameAttribute()
    {
        return LayoutBlogEnum::getKey($this->layout_id);
    }
}
