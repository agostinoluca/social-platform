<?php
require_once __DIR__ . '/Models/Functions.php';
require_once __DIR__ . '/layouts/head.php';
require_once __DIR__ . '/models/Post.php';

// post inseriti con costruttore della classe Post
$postLuca = new Post(
    0,
    'Luca Agostino',
    'Sto facendo la Milestone 4 di Boolean, non ho tempo per fare altre cose!',
    16,
    ['develop', 'Boolean', 'busy'],
    new DateTime(),
    []
);

$postFabio = new Post(
    1,
    'Fabio Pacifici',
    'Sto insegnando PHP e MySql.',
    28,
    ['teacher', 'Boolean'],
    new DateTime(),
    [
        new Video(
            1,
            'mp4',
            'C:/Utenti/NomeUtente/Video/Lezioni/Php.mp4',
            'registrazione della lezione su PHP',
            '1,2 Gb',
            new DateTime(),
            '10 minutes',
            '1920 x 1080'
        ),
        new Document(
            2,
            'pdf',
            'C:/Utenti/NomeUtente/Documenti/Progetti/Progetto2/Dati/Documentazione/slide php OOP.pdf',
            'slide della lezione',
            '29,20 Mb',
            new DateTime(),
            'slide php OOP',
            7
        ),
    ]
);

$postLuigi = new Post(
    2,
    'Luigi Micco',
    'Sono a disposizione per rivedere gli argomenti di PHP e MySql.',
    47,
    ['support', 'teacher', 'Boolean'],
    new DateTime(),
    [
        new Photo(
            3,
            'png',
            'C:/Utenti/NomeUtente/Photo/Screenshots/screenshot847628.png',
            'Screenshot della funzione statica',
            '1,7 Mb',
            new DateTime(),
            1920,
            1080,
            'HD'
        ),
        new Document(
            4,
            'txt',
            'C:/Utenti/NomeUtente/Documenti/Progetti/Progetto2/Dati/Documentazione/appunti.txt',
            'Appunti della lezione su PHP',
            '795,20 Kb',
            new DateTime(),
            'appunti',
            2
        ),
    ]
);

$postFabiana = new Post(
    3,
    'Fabiana',
    'Con la scusa del corso mio marito non fa più niente in casa &#128545; &#128545; &#128545;',
    732,
    ['fury', 'patience', 'divorce'],
    new DateTime(),
    []
);

// creo un array con le costanti dei post appena creati
$posts = [$postLuigi, $postLuca, $postFabio, $postFabiana];

?>

<main class="mt_8 pb-5">
    <div class="container">
        <div class="row justify-content-center ">
            <!-- ciclo con un while utilizzando un fetch_assoc() per recuperare un'array associativa con chiave (colonna) e valore (riga) -->
            <?php foreach ($posts as $post) :
                // creo l'istanza per recuperare la funzione dalla classe Functions
                $randomImage = new Functions();
            ?>
                <!-- creo delle colonne dinamiche con bootstrap con all'interno delle card -->
                <div class="col-12 col-lg-9 p-3">
                    <div class="card bg-light gray_shadow">
                        <div class="card-body d-flex flex-column justify-content-between gap-2">
                            <div class="d-flex justify-content-between ">
                                <div>
                                    <h5 class="card-title"><?= $post->getPostUsername() ?></h5>
                                    <span class="fs_85">Published on <?= Post::formatDateHour($post->getPostDate()) ?></span>
                                </div>

                                <div class="d-flex align-items-center text-primary">
                                    <!-- recupero i media dei posts -->
                                    <?php foreach ($post->getPostMedia() as $media) : ?>

                                        <!-- inserisco un bottone per il download (rimanda ad una Modal che chiede il Log In) -->
                                        <span>
                                            <button class="btn text_secondary" data-bs-toggle="modal" data-bs-target="#denied">
                                                <i class="fa-regular fa-circle-down"></i>
                                            </button>
                                        </span>

                                        <!-- se di formato txt -->
                                        <?php if ($media->getFormat() === 'txt') : ?>
                                            <span class="fs-4">
                                                <i class="fa-solid fa-file"></i>
                                            </span>
                                        <?php endif ?>

                                        <!-- se di formato pdf -->
                                        <?php if ($media->getFormat() === 'pdf') : ?>
                                            <span class="fs-4">
                                                <i class="fa-solid fa-file-pdf"></i>
                                            </span>
                                        <?php endif ?>

                                        <!-- se di formato mp4 o formato avi -->
                                        <?php if ($media->getFormat() === 'mp4' || $media->getFormat() === 'avi') : ?>
                                            <span class="fs-4">
                                                <i class="fa-solid fa-video"></i>
                                            </span>
                                        <?php endif ?>

                                        <!-- se di formato jpeg o formato png -->
                                        <?php if ($media->getFormat() === 'jpeg' || $media->getFormat() === 'png') : ?>
                                            <span class="fs-4">
                                                <i class="fa-solid fa-image"></i>
                                            </span>
                                        <?php endif ?>

                                    <?php endforeach; ?>
                                </div>


                            </div>
                            <p class="card-text"><?= $post->getPostTitle() ?></p>
                            <img class="rounded-2" src="<?= $randomImage->generateImage('1920', '1080') ?>" alt="random image by lorem picsum">
                            <div class="d-flex justify-content-between pt-2">
                                <div>
                                    <!-- ciclo dentro la array dei tags per recuperare il singolo tag -->
                                    <?php foreach ($post->getPostTags() as $tag) : ?>
                                        <span class="tag bg_gray"><?= $tag ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <div>
                                    <button type="button" class="border-0 bg-transparent text-secondary" data-bs-toggle="modal" data-bs-target="#denied">
                                        <h5><i class="fa-regular fa-thumbs-up text-info like_scale"></i> <?= $post->getPostLikes() ?></h5>
                                    </button>
                                    <!-- /button (icon add like) -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            <?php
            endforeach; ?>
        </div>


        <div id="denied" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">You are not logged in!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>To perform this action, you need to have an account.<br>Log in or sign up to continue.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="index.php" class="btn btn-primary">Go to login page</a>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /modal add Like -->
</main>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>