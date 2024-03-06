

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
            </div>
        </div>
        <nav class="d-flex me-4">
            <a href="login.php">Login</a>
        </nav>
    </nav>
    <div class="container">
        <form method="post" action="gestione.php" enctype="multipart/form-data" class="my-3">
            <div class="col ">
                <div class="row-sm mb-3">
                    <input type="text" class="form-control" placeholder="Nome..." name="nome">
                </div>
                <div class="row-sm mb-3">
                    <input type="text" class="form-control" placeholder="Cognome..." name="cognome">
                </div>
                <div class="row-sm mb-3">
                    <input type="text" class="form-control" placeholder="Username..." name="username">
                </div>
                <div class="row-sm mb-3">
                    <input type="email" class="form-control" placeholder="Email..." name="email">
                </div>
                <div class="row-sm mb-3">
                    <input type="password" class="form-control" placeholder="Password..." name="password">
                </div>
                <!-- <div class="col-sm">
                    <input type="file" class="form-control" placeholder="Image..." name="image">
                </div> -->
                <div class="row-sm mb-3">
                    <button type="submit" class="btn btn-dark">Add Contact</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>