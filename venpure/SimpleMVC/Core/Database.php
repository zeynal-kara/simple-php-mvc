<?php

namespace SimpleMVC\Core;

use PDO;
use PDOException;

class Database
{
    private PDO $pdo;

    public function __construct($host, $dbname, $username, $password, $charset = 'utf8mb4')
    {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
    // PDO prepare() metodunu ekleyin
    public function prepare($query): bool|\PDOStatement
    {
        return $this->pdo->prepare($query);
    }

    // Execute metodu (opsiyonel)
    public function execute($query, $params = []): bool|\PDOStatement
    {
        $stmt = $this->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}