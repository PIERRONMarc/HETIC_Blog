<?php

namespace Service\Database;

use PDO;
use Service\Database\DatabaseInterface;

class Database implements DatabaseInterface {

    private $dbConnection = null;
    static private $instance = null;

    private function __construct()
    {
        $host = '127.0.0.1:3306';
        $db   = 'hetic_blog';
        $user = 'root';
        $pass = 'root';

        try {
            $this->dbConnection = new \PDO(
                "mysql:host=$host;dbname=$db",
                $user,
                $pass
            );
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        return $this->dbConnection;
    }

    static public function getInstance(): DatabaseInterface 
    {
        if(!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}