<?php

namespace App\Http\Controllers\Step;

use App\Http\Controllers\Controller;

class ArticleService extends Controller
{
    public static function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $image->move(public_path('images') . 'temp');
        }
        return;
    }
}
?>
