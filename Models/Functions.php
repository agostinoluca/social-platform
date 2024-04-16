<?php

class Functions
{
    public function generateImage($width, $height)
    {

        $randomNumber = rand(1, 1000);
        $imageUrl = "https://picsum.photos/{$width}/{$height}?random={$randomNumber}";
        return $imageUrl;
    }
}
