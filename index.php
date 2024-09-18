<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Guest Book :: Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hello User
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            <form action="" class="mb-2">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Send</button>
            </form>

            <hr>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">User 1</h5>
                            <p class="message-created">2023-07-23 12:10</p>
                        </div>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>

                        <div class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, sapiente.
                        </div>

                        <div class="card-actions mt-2">
                            <p>
                                <a href="">Disable</a> |
                                <a href="">Approve</a> |
                                <a data-bs-toggle="collapse" href="#collapse-1">Edit</a> |
                            </p>

                            <div class="collapse" id="collapse-1">
                                <form action="">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="message-1"
                                            style="height: 100px">
                                        Some placeholder content for the collapse component.
                                         This panel is hidden by default but
                                             revealed when the user activates the relevant trigger.
                                    </textarea>
                                        <label for="message-1">Comments</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">User 2</h5>
                            <p class="message-created">2023-07-23 12:10</p>
                        </div>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>

                        <div class="card-text">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, sapiente.
                        </div>

                        <div class="card-actions mt-2">
                            <p>
                                <a href="">Disable</a> |
                                <a href="">Approve</a> |
                                <a data-bs-toggle="collapse" href="#collapse-2">Edit</a> |
                            </p>

                            <div class="collapse" id="collapse-2">
                                <form action="">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="message-2"
                                            style="height: 100px">
                                        Some placeholder content for the collapse component.
                                         This panel is hidden by default but
                                             revealed when the user activates the relevant trigger.
                                    </textarea>
                                        <label for="message-2">Comments</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>