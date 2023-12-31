<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLinkSocial extends Model
{
    use HasFactory;
    protected $table = 'user_link_social';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'platform',
        'image',
        'link',
    ];
}
