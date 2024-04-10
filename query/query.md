# Execution of the query:

1. Seleziona gli utenti che hanno postato almeno un video (25)

```sql
SELECT `users`.`username`, COUNT(`medias`.`user_id`) AS `video_uploaded` FROM `users`
JOIN `medias` ON `users`.`id` = `medias`.`user_id`
WHERE `medias`.`type` = 'video'
GROUP BY `users`.`username`
ORDER BY `video_uploaded` DESC;
```

2. Seleziona tutti i post senza Like (13)

```sql
SELECT `users`.`username` AS `author_post`, `posts`.`title` AS `post_without_likes`
FROM `posts`
JOIN `users` ON `posts`.`user_id` = `users`.`id`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
WHERE `likes`.`post_id` IS NULL
ORDER BY `author_post`;
```

3. Conta il numero di like per ogni post (165)

```sql
SELECT `posts`.`id`, `users`.`username` AS `author_post`, `posts`.`title` AS `post_title`, COUNT(`likes`.`post_id`) AS `total_likes`
FROM `posts`
JOIN `users` ON `posts`.`user_id` = `users`.`id`
LEFT JOIN `likes` ON `posts`.`id` = `likes`.`post_id`
GROUP BY `posts`.`id`
ORDER BY `total_likes` DESC;
```

4. Ordina gli utenti per il numero di media caricati (25)

```sql
SELECT `users`.`username` AS `author`, COUNT(`medias`.`user_id`) AS `uploaded_media`
FROM `users`
JOIN `medias` ON `users`.`id` = `medias`.`user_id`
GROUP BY `user_id`
ORDER BY `uploaded_media` DESC;
```

5. Ordina gli utenti per totale di likes ricevuti nei loro posts (25)
