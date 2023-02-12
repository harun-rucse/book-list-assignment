<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Create new book</title>
    <style>
    body {
        background-color: #0f172a;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row pt-5 d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fs-6 text-primary">
                            <i class="bi bi-file-earmark-plus-fill"></i>
                            <span>Entry new book</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="entry_book_handler.php" method="POST">
                            <div class="form-group mb-3">
                                <input type="text" name="title" class="form-control p-2" placeholder="Title" required />
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="author" class="form-control p-2" placeholder="Author"
                                    required />
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="available" class="form-control p-2" placeholder="Available"
                                    required />
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="pages" class="form-control p-2" placeholder="Pages" required />
                            </div>
                            <div class="form-group">
                                <input type="text" name="isbn" class="form-control p-2" placeholder="ISBN" required />
                            </div>
                            <button class="btn btn-info col-12 mt-3 p-2">
                                <i class="bi bi-plus-circle"></i>
                                <span class="fw-bold fs-6">Submit</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>