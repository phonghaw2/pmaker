<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\VarKeyEnum;
use App\Enums\TemplateEnum;
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

    /**
     * Get a data for step 2
     *
     * @param int $user_id
     * @return static
     */
    public static function getDataStep2($user_id, $type) {
        $data           = static::whereId($user_id)->first();
        $data->p_type   = $type;
        $data->p_name   = ($data->p_type == TemplateEnum::BLOG) ? $data->blog_name : $data->portfolio_name;
        $data->p_about  = ($data->p_type == TemplateEnum::BLOG) ? $data->about_me : $data->about_me_p;

        return $data;
    }

    /**
     * Get a data for step 3
     *
     * @param int $user_id
     * @return static
     */
    public static function getDataStep3($user_id, $type) {
        $data         = static::whereId($user_id)->first(['tech_stack','skill_stack','education']);
        $data->p_type = $type;

        return $data;
    }

    public function getTechStackArrayAttribute()
    {
        return explode(VarKeyEnum::SEPARATION, $this->tech_stack);
    }

    public function getSkillStackArrayAttribute()
    {
        return explode(VarKeyEnum::SEPARATION, $this->skill_stack);
    }

    public function getEducationArrayAttribute()
    {
        return explode(VarKeyEnum::SEPARATION, $this->education);
    }
}

