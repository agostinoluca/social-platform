<?php

class Media extends Post
{
    protected array $type;

    // inserisco un costruttore che richiama con parent:: il costruttore della classe estesa Post
    public function __construct(int $id, string $username, string $title, int $likes, array $tags, DateTime $date, array $type)
    {
        parent::__construct($id, $username, $title, $likes, $tags, $date);
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
