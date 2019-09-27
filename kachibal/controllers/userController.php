<?php

include './core/database.php';

class UserController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM users');          

        return $query->fetchAll();
    }

    public function store($request)
    {

        isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $query = $this->db->pdo->prepare('INSERT INTO users (name, email, password, is_admin) VALUES (:name, :email, :password, :is_admin)');
        $query->bindParam(':name', $request['fullName']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $password);
        $query->bindParam(':is_admin', $isAdmin);
        $query->execute();

        return header('Location: ./login.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;

        $query = $this->db->pdo->prepare('UPDATE users SET name = :name, email = :email, is_admin = :is_admin WHERE id = :id');
        $query->execute([
            'name' => $request['fullName'],
            'email' => $request['email'],
            'is_admin' => $isAdmin,
            'id' => $id
        ]);

        return header('Location: ./index.php');
    }

    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ./index.php');
    }
}
