<?php
require_once __DIR__ . '/Models/Functions.php';
require_once __DIR__ . '/layouts/head.php';
require_once __DIR__ . '/models/Post.php';
require_once __DIR__ . '/models/Media.php';

// post inseriti con costruttore della classe Post
$postLuca = new Post(0, 'Luca Agostino', 'Sto facendo la Milestone 4 di Boolean, non ho tempo per fare altre cose!', 16, ['develop', 'Boolean', 'busy'], new DateTime());
$postFabio = new Media(1, 'Fabio Pacifici', 'Sto insegnando PHP e MySql.', 28, ['teacher', 'Boolean'], new DateTime(), ['photo', 'video', 'slide']);
$postLuigi = new Media(2, 'Luigi Micco', 'Sono a disposizione per rivedere gli argomenti di PHP e MySql.', 47, ['support', 'teacher', 'Boolean'], new DateTime(), ['video']);
$postFabiana = new Post(3, 'Fabiana', 'Con la scusa del corso mio marito non fa più niente in casa &#128545; &#128545; &#128545;', 732, ['fury', 'patience', 'divorce'], new DateTime());


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
                                    <span class="fs_85">Ha pubblicato il <?= Post::formatDateHour($date) ?></span>
                                </div>
                                <span>
                                    <!-- se $post è un'istanza della classe Media -->
                                    <?php if ($post instanceof Media) : ?>
                                        <?php foreach ($post->getType() as $type) : ?>
                                            <span class="tag bg_primary mx_15">
                                                <?= $type ?>
                                            </span>
                                        <?php endforeach; ?>
                                        <!-- altrimenti posta la stringa 'No Media' -->
                                    <?php else : ?>
                                        <span class="tag bg_secondary text_gray">
                                            No Media
                                        </span>
                                    <?php endif; ?>
                                </span>
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
                                    <button type="button" class="border-0 bg-transparent text-secondary" data-bs-toggle="modal" data-bs-target="#addLike">
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


        <div id="addLike" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">You are not logged in!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>To add Likes, you need to have an account.<br>Log in or sign up to continue.</p>
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