<?php

namespace App\Models;

use App\Enums\SortNameEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $table = 'series';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'describe',
        'cover',
        'sort',
        'blog_id',
    ];

    public function getSortNameAttribute()
    {
        return SortNameEnum::getKey($this->layout_id);
    }

    /**
     * Get a series of user
     *
     * @param int $user_id
     * @param int $series_id
     * @return static
     */
    public static function getSeries($user_id, $series_id) {
        return static::whereUserId($user_id)->whereId($series_id)->first();
    }

    /**
     * Get all information series of user
     *
     * @param int $user_id
     * @return static
     */
    public static function getAllSeriesByUser($user_id) {
        return static::whereUserId($user_id)->get();
    }
}
