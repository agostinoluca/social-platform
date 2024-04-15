<?php

require_once __DIR__ . '/layouts/head.php';
?>

<main class="mt_8">
    <section class="pt-5 pb-5">
        <div class="container text-center ">
            <h1>Welcome in Soocialean</h1>
            <p class="lead pt-3">Connect with friends, share your thoughts, and discover new things!</p>
            <button type="button" class="btn btn-secondary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#signUp">Login</button>
            <button type="button" class="btn btn-primary btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</button>
        </div>
        <!-- /div content of welcome section -->

        <div id="signUp" class="modal" tabindex="-1">
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
        <!-- /modal advise for signUp button -->
    </section>
    <!-- /section of welcome -->


    <section class="mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h2>Discover</h2>
                    <img src="./src/img/discover.jpg" class="rounded-4 my-3 " alt="image of colorful signs">
                    <p>Explore new content and discover what's trending</p>
                </div>
                <div class="col-md-4">
                    <h2>Connect</h2>
                    <img src="./src/img/connect.jpg" class="rounded-4 my-3 " alt="image of a group of friends">
                    <p>Connect with friends and family to share moments together</p>
                </div>
                <div class="col-md-4">
                    <h2>Engage</h2>
                    <img src="./src/img/engage.jpg" class="rounded-4 my-3 " alt="image of a group of people with emoticon faces">
                    <p>Engage with communities and discussions that interest you</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>