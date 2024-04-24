<?php
class Media
{
    // inizializzo le variabili delle proprietà con protected
    protected string $id;
    protected string $format;
    protected string $path;
    protected string $description;
    protected string $fileSize;
    protected DateTime $date;

    // creo un costruttore per creare i nuovi file media
    public function __construct(int $id, string $format, string $path, string $description, string $fileSize, DateTime $date)
    {
        $this->id = $id;
        $this->format = $format;
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

    public function getFormat()
    {
        return $this->format;
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
    protected string $photoResolution;

    public function __construct(int $id, string $format, string $path, string $description, string $fileSize, DateTime $date, int $width, int $height, string $photoResolution)
    {
        parent::__construct($id, $format, $path, $description, $fileSize, $date);
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
    protected string $duration;
    protected string $videoResolution;

    public function __construct(int $id, string $format, string $path, string $description, string $fileSize, DateTime $date, string $duration, string $videoResolution)
    {
        parent::__construct($id, $format, $path, $description, $fileSize, $date);
        $this->duration = $duration;
        $this->videoResolution = $videoResolution;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getVideoResolution()
    {
        return $this->videoResolution;
    }
}

class Document extends Media
{
    protected string $title;
    protected int $pages;

    public function __construct(int $id, string $format, string $path, string $description, string $fileSize, DateTime $date, string $title, int $pages)
    {
        parent::__construct($id, $format, $path, $description, $fileSize, $date);
        $this->title = $title;
        $this->pages = $pages;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPages()
    {
        return $this->pages;
    }
}
