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

    public static function getSeries($user_id, $series_id) {
        return static::where('user_id', $user_id)->where('id',  $series_id)->first();
    }
}
