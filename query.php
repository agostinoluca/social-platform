<?php
require_once __DIR__ . '/layout/head.php';
?>

<main>
    <div class="container mt-5 mb-5">
        <div>
            <h5>1. Seleziona gli utenti che hanno postato almeno un video (25)</h5>
            <p>
                SELECT `users`.`username`, COUNT(`medias`.`user_id`) AS `video_uploaded` <br>
                FROM `users` <br>
                JOIN `medias` ON `users`.`id` = `medias`.`user_id` <br>
                WHERE `medias`.`type` = 'video' <br>
                GROUP BY `users`.`username` <br>
                ORDER BY `video_uploaded` DESC;
            </p>
        </div>
        <div>
            <h5>2. Seleziona tutti i post senza Like (13)</h5>
            <p>
                SELECT `users`.`username` AS `author_post`, `posts`.`title` AS `post_without_likes` <br>
                FROM `posts` <br>
                JOIN `users` ON `posts`.`user_id` = `users`.`id` <br>
                LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id` <br>
                WHERE `likes`.`post_id` IS NULL <br>
                ORDER BY `author_post`;
            </p>
        </div>
        <div>
            <h5>3. Conta il numero di like per ogni post (165)</h5>
            <p>
                SELECT `posts`.`id`, `users`.`username` AS `author_post`, `posts`.`title` AS `post_title`, COUNT(`likes`.`post_id`) AS `total_likes` <br>
                FROM `posts` <br>
                JOIN `users` ON `posts`.`user_id` = `users`.`id` <br>
                LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id` <br>
                GROUP BY `posts`.`id` <br>
                ORDER BY `total_likes` DESC;
            </p>
        </div>
        <div>
            <h5>4. Ordina gli utenti per il numero di media caricati (25)</h5>
            <p>
                SELECT `users`.`username` AS `author`, COUNT(`medias`.`user_id`) AS `uploaded_media` <br>
                FROM `users` <br>
                JOIN `medias` ON `users`.`id` = `medias`.`user_id` <br>
                GROUP BY `user_id` <br>
                ORDER BY `uploaded_media` DESC;
            </p>
        </div>
        <div>
            <h5>5. Ordina gli utenti per totale di likes ricevuti nei loro posts (25)</h5>
            <p>
                SELECT `users`.`id` AS `user_id`, `users`.`username` AS `author_posts`, COUNT(`likes`.`post_id`) AS `total_likes` <br>
                FROM `users` <br>
                JOIN `posts` ON `users`.`id` = `posts`.`user_id` <br>
                LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id` <br>
                GROUP BY `users`.`id` <br>
                ORDER BY `total_likes` DESC;
            </p>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/layout/footer.php'; ?>