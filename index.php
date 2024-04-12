<?php
// DATABASE CONNECTION

// CONSTANTS
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'social-platform');

//CONNECTION
$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECK CONTROL FOR ERROR
if ($connection && $connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    die;
}

$sql_users = "SELECT `users`.`username` FROM `users`";

$result = $connection->query($sql_users);

var_dump($result);
require_once __DIR__ . '/layout/head.php';
?>

<main>

</main>

<?php require_once __DIR__ . '/layout/footer.php'; ?>