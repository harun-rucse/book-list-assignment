<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Icon -->
    <link rel="icon" href="assets/icon.png" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Book List</title>
    <style>
    body {
        background-color: #0f172a;
    }
    </style>
</head>

<body>
    <?php
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
        
    ?>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Book Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-lg-auto">
                    <a href="create.php" class="btn btn-sm btn-info col-lg-12 col-sm-3 ">
                        <i class="bi bi-plus-circle"></i>
                        <span class="fw-bold fs-6">New book</span>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <div class="container-fluid">
        <div class="row py-1">
            <!-- Main section start -->
            <div class="row mt-3 d-flex justify-content-center">
                <div class="col-sm-12 col-lg-10">
                    <div class="card">
                        <div class="card-header bg-white fs-5">
                            <i class="bi bi-tag-fill"></i> All Books Information
                        </div>
                        <div class="card-body">
                            <!-- Table start -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered mt-2">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Available</th>
                                            <th>Pages</th>
                                            <th>ISBN</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($books as $book): ?>
                                        <tr>
                                            <td><?php echo $book['title']; ?></td>
                                            <td><?php echo $book['author']; ?></td>
                                            <td><?php echo $book['available'] ? 'Yes' : 'No'; ?></td>
                                            <td><?php echo $book['pages']; ?></td>
                                            <td><?php echo $book['isbn']; ?></td>
                                            <td>
                                                <a href="#">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Table end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main section end -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>