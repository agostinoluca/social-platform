<?php
class Post
{

    // inizializzo le variabili delle proprietà con protected
    protected int $id;
    protected string $username;
    protected string $title;
    protected int $likes;
    protected array $tags;
    protected DateTime $date;

    // creo un costruttore per creare i nuovi post
    public function __construct(int $id, string $username, string $title, int $likes, array $tags, DateTime $date)
    {
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
        $this->likes = $likes;
        $this->tags = $tags;
        $this->date = $date;
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
        return $this->date;
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

// estendo la classe Post per eventuali pubblicazioni con allegati
class PostAttached extends Post
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
