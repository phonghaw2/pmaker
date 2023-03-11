<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifications extends Model
{
    use HasFactory;
    protected $table = 'certification';

    protected $fillable = [
        'user_id',
        'name',
        'organization',
        'issue_date',
        'expiration_date',
        'credential_id',
        'credential_url',
    ];
}
