<?php

namespace App\Http\Controllers\Step;

class ArticleService
{
    public function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $image->move(public_path('images') . 'temp');
        }
        return;
    }
}
?>
