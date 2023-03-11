<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;
    protected $table = 'experience';

    protected $fillable = [
        'user_id',
        'title',
        'company_name',
        'location',
        'employment_type',
        'start_date',
        'end_date',
    ];
}
