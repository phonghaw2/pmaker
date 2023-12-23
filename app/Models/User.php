<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'blog_name',
        'portfolio_name',
        'about_me',
        'aboutme_p',
        'company_func',
        'address',
        'phone_number',
        'tech_stack',
        'education',
        'skill_stack',
    ];

    public function getBlog(): HasOne {
        return $this->hasOne(Blog::class);
    }
}

