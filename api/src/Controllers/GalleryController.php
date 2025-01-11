<?php

namespace Controllers;

use Http\Response;

class GalleryController
{
    public function index()
    {
        $gallery = get_gallery();
        $images = [];
        for($i = 0; $i < count($gallery); $i++) {
            $images[] = [
                'id' => $i,
                'url' => $gallery[$i],
                'title' => 'Image ' . $i+1,
            ];
        }

        return new Response(
            200,
            'OK',
            [],
            $images
        );
    }
}