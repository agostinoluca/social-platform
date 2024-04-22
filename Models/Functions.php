<?php

class Functions
{
    public static function generateImage($width, $height)
    {

        $randomNumber = rand(1, 1000);
        $imageUrl = "https://picsum.photos/{$width}/{$height}?random={$randomNumber}";
        return $imageUrl;
    }

    // funzione generica per formattare la data nel formato nostrano
    public static function formatDate($date)
    {
        // converto la data in un oggetto DateTime
        $dateTime = new DateTime($date);
        // formatto la data nella versione 00-00-0000
        return $dateTime->format('d-m-Y');
    }
}
