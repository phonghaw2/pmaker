<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $table = 'certifications';

    protected $fillable = [
        'user_id',
        'name',
        'organization',
        'issue_date',
        'expiration_date',
        'credential_id',
        'credential_url',
    ];

    public function getDataFormId($user_id)
    {
        $data = static::whereUserId($user_id)->get();
        return $data;
    }

    public static function checkExists(array $certification)
    {
        return static::whereUserId($certification['user_id'])
                    ->whereName($certification['name'])
                    ->whereOrganization($certification['organization'])
                    ->exists();
    }

    public function getDateIssueAttribute()
    {
        return date('M Y', strtotime($this->issue_date));
    }
}
