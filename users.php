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

$sql_users = "SELECT * FROM `users`";
$result = $connection->query($sql_users);

require_once __DIR__ . '/layouts/head.php';
?>

<main class="pt-3 pb-5 mt_6">
    <div class="container">
        <div class="row">
            <?php
            if ($result->num_rows > 0) :
                while ($row = $result->fetch_assoc()) :
                    ['username' => $username, 'email' => $email, 'birthdate' => $birthday] = $row ?>
                    <div class="col g-3 ">
                        <div class="card bg-light gray_shadow" style="width:18rem; min-height:12rem;">
                            <div class="card-body d-flex flex-column justify-content-between gap-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title"><?= $username ?></h5>
                                    <div>
                                        <button type="button" class="border-0 bg-transparent text-secondary" data-bs-toggle="modal" data-bs-target="#addFriend">
                                            <i class="fa-solid fa-user-plus"></i>
                                        </button>
                                        <!-- /button (icon add friend) -->

                                        <div id="addFriend" class="modal" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ops, sorry!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>This action is not yet integrated.<br>Maybe it will be in the future!</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok, I'll be back</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /modal add friend -->
                                    </div>
                                </div>
                                <p class="card-text">Date of birth: <?= $birthday ?></p>
                                <h6 class="card-subtitle mb-2 text-muted "><i class="fa-solid fa-paper-plane"></i></i> <?= $email ?></h6>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                <?php
                endwhile;
            elseif ($result->num_rows <= 0) : ?>
                <div class="container pt-5 ">
                    <h2 class="text-light">Ops, something went wrong!</h2>
                </div>
            <?php endif ?>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>