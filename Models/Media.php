<?php

class Media extends Post
{
    protected array $type;

    public function __construct(int $id, string $username, string $title, int $likes, array $tags, array $type)
    {
        parent::__construct($id, $username, $title, $likes, $tags);
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
