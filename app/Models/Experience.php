<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';

    protected $fillable = [
        'user_id',
        'title',
        'company_name',
        'location',
        'employment_type',
        'start_date',
        'end_date',
    ];

    public static function checkExists(array $experience) {
        return static::where('user_id', $experience['user_id'])
                    ->where('company_name', $experience['company_name'])
                    ->where('title', $experience['title'])
                    ->exists();
    }
}
