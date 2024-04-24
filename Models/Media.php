<?php
class Media
{
    // inizializzo le variabili delle proprietà con protected
    protected string $id;
    protected string $path;
    protected string $description;
    protected string $fileSize;
    protected DateTime $date;

    // creo un costruttore per creare i nuovi post
    public function __construct(int $id, string $path, string $description, string $fileSize, DateTime $date)
    {
        $this->id = $id;
        $this->path = $path;
        $this->description = $description;
        $this->fileSize = $fileSize;
        $this->date = $date;
    }

    // creo dei getters per leggere le informazioni
    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function getDate()
    {
        return $this->date;
    }
}

class Photo extends Media
{
    protected int $width;
    protected int $height;
    protected int $photoResolution;

    public function __construct(int $id, string $path, string $description, string $fileSize, DateTime $date, int $width, int $height, int $photoResolution)
    {
        parent::__construct($id, $path, $description, $fileSize, $date);
        $this->width = $width;
        $this->height = $height;
        $this->photoResolution = $photoResolution;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getPhotoResolution()
    {
        return $this->photoResolution;
    }
}

class Video extends Media
{
    protected int $duration;
    protected string $format;
    protected int $videoResolution;

    public function __construct(int $id, string $path, string $description, string $fileSize, DateTime $date, float $duration, string $format, string $videoResolution)
    {
        parent::__construct($id, $path, $description, $fileSize, $date);
        $this->duration = $duration;
        $this->format = $format;
        $this->videoResolution = $videoResolution;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function getVideoResolution()
    {
        return $this->videoResolution;
    }
}

class Document extends Media
{
    protected string $title;
    protected string $format;
    protected int $pages;

    public function __construct(int $id, string $path, string $description, string $fileSize, DateTime $date, string $title, string $format, int $pages)
    {
        parent::__construct($id, $path, $description, $fileSize, $date);
        $this->title = $title;
        $this->format = $format;
        $this->pages = $pages;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function getPages()
    {
        return $this->pages;
    }
}
