<?php
require_once __DIR__ . '/layouts/head.php';
?>

<main>
    <div class="container mt_8 pb-5 ">
        <div class="row mt-5 text-center main_about">
            <div class="col-12">
                <h1 class="display-4 mb-3">About Us</h1>
                <p class="lead">Web App created by a student of Boolean School.</p>
            </div>
            <!-- /title of about page -->
            <div class="col-10 pb-3 m-auto">
                <img src="./src/img/about.png" alt="">
            </div>
            <!-- /image of about page -->
            <div class="col-4">
                <ul class="list-unstyled">
                    <li class="fw-bold fs-5">For Users</li>
                    <li><a class="text-dark" href="#">How to Get Started</a></li>
                    <li><a class="text-dark" href="#">Account Setup</a></li>
                    <li><a class="text-dark" href="#">Account Management</a></li>
                    <li><a class="text-dark" href="#">Privacy & Security</a></li>
                    <li><a class="text-dark" href="#">Terms of Service</a></li>
                </ul>
            </div>
            <!-- /col ul "For Users" -->

            <div class="col-4">
                <ul class="list-unstyled">
                    <li class="fw-bold fs-5">Products & Services</li>
                    <li><a class="text-dark" href="#">Features</a></li>
                    <li><a class="text-dark" href="#">Pricing</a></li>
                    <li><a class="text-dark" href="#">Plans & Subscriptions</a></li>
                    <li><a class="text-dark" href="#">Add-ons & Extras</a></li>
                    <li><a class="text-dark" href="#">Benefits</a></li>
                </ul>
            </div>
            <!-- /col ul "Products & Services" -->


            <div class="col-4">
                <ul class="list-unstyled">
                    <li class="fw-bold fs-5">About Our Platform</li>
                    <li><a class="text-dark" href="#">Our Mission</a></li>
                    <li><a class="text-dark" href="#">Vision & Values</a></li>
                    <li><a class="text-dark" href="#">Our Team</a></li>
                    <li><a class="text-dark" href="#">History</a></li>
                    <li><a class="text-dark" href="#">Awards & Recognition</a></li>
                </ul>
            </div>
            <!-- /col ul "About Our Platform" -->

        </div>
</main>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>