<?php
require_once __DIR__ . '/database/DbConnect.php';

$connection = DbConnection::connect();

$name = $_POST['name'];
$sql_users = "SELECT * FROM `users` WHERE `username` LIKE '%{$name}%'";
$result = $connection->query($sql_users);

DbConnection::disconnect($connection);

require_once __DIR__ . '/layouts/head.php';
?>

<main class="pt-3 pb-5 mt_6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="py-2">
                    <form action="" method="POST">
                        <input class="btn btn-light" type="text" name="name" id="name" placeholder="type a name here">
                        <input class="btn btn-primary" type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container for input of form -->

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
                                                        <h5 class="modal-title">You are not logged in!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>To add friends, you need to have an account.<br>Log in or sign up to continue.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="index.php" class="btn btn-primary">Go to login page</a>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
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
                    <h2 class="text-dark">No results for your search.</h2>
                </div>
            <?php endif ?>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>