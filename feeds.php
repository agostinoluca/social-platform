<?php
require_once __DIR__ . '/database/DbConnect.php';
require_once __DIR__ . '/Models/Functions.php';

$connection = DbConnection::connect();

$sql_posts = "SELECT `users`.`username` AS author_post, `posts`.`title`, `posts`.`tags`, `posts`.`date`, COUNT(`likes`.`post_id`) AS num_likes
FROM `posts`
JOIN `users` ON `posts`.`user_id` = `users`.`id`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
GROUP BY `posts`.`id`
ORDER BY num_likes DESC;";

$result = $connection->query($sql_posts);

DbConnection::disconnect($connection);


require_once __DIR__ . '/layouts/head.php';
?>

<main class="mt_8 pb-5">
    <div class="container">
        <div class="row justify-content-center ">
            <!-- ciclo con un while utilizzando un fetch_assoc() per recuperare un'array associativa con chiave (colonna) e valore (riga) -->
            <?php while ($row = $result->fetch_assoc()) :
                ['author_post' => $username, 'title' => $title, 'num_likes' => $likes, 'tags' => $tags, 'date' => $date] = $row;

                // converto la stringa JSON dei tags originari in un array PHP con json_decode
                $tagsArray = json_decode($tags, true);

                // creo l'istanza per recuperare la funzione dalla classe Functions
                $randomImage = new Functions();
                $formatDate = new Functions();

            ?>
                <div class="col-12 col-lg-9 p-3">
                    <div class="card bg-light gray_shadow">
                        <div class="card-body d-flex flex-column justify-content-between gap-2">
                            <div>
                                <h5 class="card-title"><?= $username ?></h5>
                                <span class="fs_85">Ha pubblicato il <?= $formatDate->formatDate($date) ?></span>
                            </div>
                            <p class="card-text"><?= $title ?></p>
                            <img class="rounded-2" src="<?= $randomImage->generateImage('1920', '1080') ?>" alt="random image by lorem picsum">
                            <div class="d-flex justify-content-between pt-2">
                                <!-- ciclo dentro la array dei tags per ottenere i singoli tag e incartarli dentro a degli span -->
                                <div>
                                    <?php foreach ($tagsArray as $tag) : ?>
                                        <span class="tag bg_gray"><?= $tag ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <div>
                                    <button type="button" class="border-0 bg-transparent text-secondary" data-bs-toggle="modal" data-bs-target="#addLike">
                                        <h5><i class="fa-regular fa-thumbs-up text-info"></i> <?= $likes ?></h5>
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
            endwhile; ?>
        </div>
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