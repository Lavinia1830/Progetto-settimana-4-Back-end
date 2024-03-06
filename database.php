<?php
    namespace db {
        use PDO;
        class Database {
            // Classe con pattern Singleton
            private PDO $conn;
            private static ?Database $instance = null;

            private function __construct(array $config){
                // 'mysql:host=localhost; port=3306; dbname=biblioteca
                $this->conn = new PDO(
                                        $config['driver'].":host=".$config['host']."; port=".$config['port']."; dbname=".$config['database'].";", 
                                        $config['user'], 
                                        $config['password']);
            }

            public static function getInstance(array $config){
                if(!static::$instance) {
                    static::$instance = new Database($config);
                }
                return static::$instance;
            }

            public function getConnection(){
                return $this->conn;
            }
        }
    }