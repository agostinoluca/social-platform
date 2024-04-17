<?php
class Post
{

    // inizializzo le variabili delle proprietà con protected
    protected int $id;
    protected string $username;
    protected string $title;
    protected int $likes;
    protected array $tags;

    // creo un costruttore per creare i nuovi post
    public function __construct(int $id, string $username, string $title, int $likes, array $tags)
    {
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
        $this->likes = $likes;
        $this->tags = $tags;
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
}
