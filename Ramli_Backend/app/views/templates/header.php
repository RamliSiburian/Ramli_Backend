<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['title']; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <p class="navbar-brand">My App</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-md-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/article">Article</a>
                    </li> -->
                </ul>
                <div class="auth d-md-flex gap-3">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login">
                        Login
                    </button>
                    <!-- <a class="btn btn-outline-success" href="<?= BASEURL; ?>/register">Register</a> -->
                </div>

            </div>
        </div>
    </nav>


    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginLabel">FORM LOGIN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASEURL; ?>/auth/login" method="post">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="username" class="form-label fw-bold"> Username </label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label fw-bold"> Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>