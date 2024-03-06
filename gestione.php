<?php 
    session_start();
    require_once('Profili.php');
    require_once('database.php');
    $config = require_once('config.php');
    require_once('RegistroProfiliDTO.php');
    var_dump($_REQUEST);
    
    use Profili\Utente;
    use db\Database;
    use RegistroProfiliDTO\UtenteDTO;
    
    $PDOConn = Database::getInstance($config);
    $conn = $PDOConn->getConnection();
    
    $UtenteDTO = new UtenteDTO($conn);
    
    $contacts = isset($_SESSION['contacts'])  ?  $_SESSION['contacts'] : [] ;
    //$target_dir = "uploads/";
    /* $image = $target_dir.'avatar.png'; */


    // Controlla se sono stati inviati dati dal modulo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati inviati dal modulo
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Crea un oggetto Utente con i dati ottenuti dal modulo
        $u = new Utente($_REQUEST['id'], $nome, $cognome, $username, $email, $password);

        // Passa l'oggetto Utente al metodo saveUtente della classe UtenteDTO
        $UtenteDTO->saveUtente($u);
    }
    
    $contact = [
        'nome' => $_REQUEST['nome'], 
        'cognome' => $_REQUEST['cognome'], 
        'username' => $_REQUEST['username'], 
        'email' => $_REQUEST['email'],  
        'password' => $_REQUEST['password'],
        //'Image' => $target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname']
    ];
    $_SESSION['contacts'] = [...$contacts, $contact];

    session_write_close();

    header('Location: http://localhost/Progetto-settimana-4-Back-end/');
