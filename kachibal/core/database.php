<?php

class Database
{
    public $pdo;

    public function __construct()
    {
        try{
            session_start();
            $link = new PDO('mysql:host=localhost;dbname=kachibal', 'root', '');
            $this->pdo = $link;
        }catch(PDOException $e) {
            die('DIE'. $e->getMessage());
        }
    }
}

?>
