<?php

namespace Profili {
    class Utente {
        public $id;
        public $nome;
        public $cognome;
        public $username;
        public $email;
        public $password;

        public function __construct($id, $nome, $cognome, $username, $email, $password){
            $this->id = $id;
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }
    }
}