<?php


class Users
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createUsers(string $firstName, string $lastName, string $email, string $password, int $tel): bool
    {

        if ($this->userExists($email)) return false;

        $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);

        $sql = 'INSERT INTO `users`(`nom`, `prenom`, `email`, `password`, `tel`) VALUES (:nom, :prenom, :email, :password, :tel)';
        $query = $this->db->prepare($sql);
        $query->bindValue(':nom', $lastName, PDO::PARAM_STR);
        $query->bindValue(':prenom', $firstName, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
        $query->bindValue(':tel', $tel, PDO::PARAM_INT);
        $query->execute();

        return true;
    }
    
    public function logUser(string $email, string $password)
    {
        if(!$this->userExists($email)) return false;

        $sql = 'SELECT * FROM `users` WHERE `email` = :email';
        $query = $this->db->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch();
        if(!password_verify($password, $user['password'])) return false;

        return $user;
    }

    private function userExists(string $email)
    {

        $sql = 'SELECT COUNT(*) FROM `users` WHERE email = :email';
        $query = $this->db->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();

        return ($query->fetchColumn() > 0);
    }
}