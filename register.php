<?php
require_once __DIR__ . '/incs/db.php';
require_once __DIR__ . '/incs/functions.php';

/** @var PDO $db */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = load(['name', 'email', 'password']);

    dump($_POST);

    dump($data);
}

?>

<?php require_once __DIR__ . '/views/incs/header.tpl.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <form method="post">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    <label for="name">name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Registration</button>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/views/incs/footer.tpl.php'; ?>