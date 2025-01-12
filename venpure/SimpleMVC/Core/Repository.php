<?php

namespace SimpleMVC\Core;

abstract class Repository
{
    protected Database $db;
    protected string $table;

    function __construct()
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $charset = $_ENV['DB_CHARSET'];

        $this->db = new Database($host, $dbname, $username, $password, $charset);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function findAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function save($data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));

        $stmt = $this->db->prepare("INSERT INTO $this->table ($columns) VALUES ($placeholders)");
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }

    public function update($id, $data)
    {
        $set = "";
        foreach ($data as $key => $value) {
            $set .= "$key = :$key, ";
        }
        $set = rtrim($set, ", ");

        $stmt = $this->db->prepare("UPDATE $this->table SET $set WHERE id = :id");
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
