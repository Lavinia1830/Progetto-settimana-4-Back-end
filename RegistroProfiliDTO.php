<?php
    namespace RegistroProfiliDTO{
        use Profili\Utente;
        use PDO;
        class UtenteDTO{
            private PDO $conn;
            public function __construct(PDO $conn){
                $this->conn = $conn;
            }
            public function getAll(){
                $sql = 'SELECT * FROM progetto_settimana4_backend.users';
                $res = $this->conn->query($sql, PDO::FETCH_ASSOC);
                return $res ? $res : null;
            }
            public function getUtenteByID(int $id){
                $sql = 'SELECT * FROM progetto_settimana4_backend.users WHERE id = :id';
                $stm = $this->conn->prepare($sql);
                $stm->execute(['id' => $id]);
                return $stm->fetchAll();
            }
            public function saveUtente(Utente $utente){
                $sql = "INSERT INTO progetto_settimana4_backend.users (nome, cognome, username, email, password) VALUES (:nome, :cognome, :username, :email, :password)";
                $stm = $this->conn->prepare($sql);
                $stm->execute([
                    'nome' => $utente->nome,
                    'cognome' => $utente->cognome,
                    'username' => $utente->username,
                    'email' => $utente->email,
                    'password' => $utente->password
                ]);
                return $stm->rowCount();
            }
            public function updateUtente(Utente $utente){
                $sql = "UPDATE progetto_settimana4_backend.users SET nome = :nome, cognome = :cognome, username = :username, email = :email, password = :password WHERE id = :id";
                $stm = $this->conn->prepare($sql);
                $stm->execute([
                    'nome' => $utente->nome,
                    'cognome' => $utente->cognome,
                    'username' => $utente->username,
                    'email' => $utente->email,
                    'password' => $utente->password,
                    'id' => $utente->id
                ]);
                return $stm->rowCount();
            }
            public function deleteUtente(int $id){
                $sql = "DELETE FROM progetto_settimana4_backend.users WHERE id = :id";
                $stm = $this->conn->prepare($sql);
                $stm->execute(['id' => $id]);
                return $stm->rowCount();
            }
        }
    }