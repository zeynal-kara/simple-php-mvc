<?php

namespace App\Repositories;

use SimpleMVC\Core\Repository;

class UserRepository extends Repository
{
    protected string $table = 'users';

    public function get_user(string $username, string $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        return $stmt->fetch();
    }
}