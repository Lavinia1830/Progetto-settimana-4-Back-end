<?php
    session_start();
    require_once('Profili.php');
    require_once('database.php');
    $config = require_once('config.php');
    require_once('RegistroProfiliDTO.php');
    
    use Profili\Utente;
    use db\Database;
    use RegistroProfiliDTO\UtenteDTO;
    
    $PDOConn = Database::getInstance($config);
    $conn = $PDOConn->getConnection();
    
    $UtenteDTO = new UtenteDTO($conn);
    
    // Assumiamo che $nome, $cognome, $username, $email e $password siano stati definiti precedentemente
    
    /* $u = new Utente(0, $nome, $cognome, $username, $email, $password);
    
    $UtenteDTO->saveUtente($u); */




    //print_r($_SESSION);
    $contacts = [];
    if(isset($_SESSION['contacts'])){
        $contacts = $_SESSION['contacts'];
    }
    
    
    session_write_close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
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
    <div class="my-3 container">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <!-- <th scope="col">Image</th> -->
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($contacts){
                foreach ($contacts as $key => $contact) { 
                ?>
                    <tr>
                        <th scope="row"><?= $key+1 ?></th>
                        <!-- <td><img src=<?= $contact['Image'] ?> width="50" ></td> -->
                        <td><?= $contact['nome'] ?></td>
                        <td><?= $contact['cognome'] ?></td>
                        <td><?= $contact['username'] ?></td>
                        <td><?= $contact['email'] ?></td>
                        <td><?= $contact['password'] ?></td>
                        <td>
                            <a class="btn btn-danger" href="RegistroProfiliDTO.php?id=<?= $contact['id'] ?>" role="button">X</a>
                            <a class="btn btn-warning" href="update.php?id=<?= $contact['id'] ?>" role="button">M</a>
                        </td>
                    </tr>
                <?php } }?>
            </tbody>
        </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
