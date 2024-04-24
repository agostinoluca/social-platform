<?php

require_once __DIR__ . '/Media.php';
class Post
{

    // inizializzo le variabili delle proprietà con protected
    protected int $id;
    protected string $username;
    protected string $title;
    protected int $likes;
    protected array $tags;
    protected DateTime $date;
    protected array $media;

    // creo un costruttore per creare i nuovi post
    public function __construct(int $id, string $username, string $title, int $likes, array $tags, DateTime $date, array $media)
    {
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
        $this->likes = $likes;
        $this->tags = $tags;
        $this->date = $date;
        $this->media = $media;
    }

    // creo dei getters per leggere le informazioni (altrimenti protette dal 'protected' dell'istanza) 
    public function getPostId()
    {
        return $this->id;
    }

    public function getPostUsername()
    {
        return $this->username;
    }

    public function getPostTitle()
    {
        return $this->title;
    }

    public function getPostLikes()
    {
        return $this->likes;
    }

    public function getPostTags()
    {
        return $this->tags;
    }

    public function getPostDate()
    {
        return $this->date->format('Y-m-d H:i');
    }

    public function getPostMedia()
    {
        return $this->media;
    }

    // funzione per formattare la data nel formato nostrano e l'orario ore:minuti
    public static function formatDateHour($date)
    {
        // converto data ed ora in un oggetto DateTime
        $dateTime = new DateTime($date);

        // formatto la data nella versione 00-00-0000 e concateno l' orario in formato ore:minuti
        return $dateTime->format('d-m-Y') . ' at ' . $dateTime->format('H:i');
    }
}
