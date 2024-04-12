<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Platform</title>
    <!-- Local Css -->
    <link rel="stylesheet" href="./src/css/style.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <header class="bg-primary black_shadow p-5 d-flex justify-content-between align-items-center">
        <div>
            <img src="./src/img/soocialean.png" alt="Logo" width="250">
            <!-- /logo -->
        </div>
        <div>
            <button class="btn btn-primary fs-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></button>
        </div>
        <!-- /button of nav -->
    </header>
    <nav>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Soocialean sections</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column gap-3">
                <a href="./index.php" class="text-secondary text-decoration-none">Homepage</a>
                <a href="./query.php" class="text-secondary text-decoration-none">Query exercise</a>
                <a href="./schema.php" class="text-secondary text-decoration-none">Schema of Database</a>
            </div>
        </div>
    </nav>
    <!-- /nav (offcanvas) -->