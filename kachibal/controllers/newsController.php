<?php
    include './core/database.php';

    class newsController {

        protected $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function all() {
            $query = $this->db->pdo->query("SELECT * FROM news");

            return $query->fetchAll();
        }

        public function store($request)
        {

            $query = $this->db->pdo->prepare('INSERT INTO news (title, description,image,user_id,category_id) VALUES (:title, :description,:image,:user_id,:category_id)');
            $query->bindParam(':title', $request['title']);
            $query->bindParam(':description', $request['description']);
            $query->bindParam(':image', $image);
            $query->bindParam(':user_id', $_SESSION['user_id']);
            $query->bindParam(':category_id', $request['category_id']);
           
            $query->execute();
    
            return header('Location: ./index.php');
        }

        public function findByID($id){
            $query = $this->db->pdo->prepare('SELECT * FROM news a inner join category c on a.category_id = c.id where c.id = :id ');
            $query->execute(['id' => $id]);
            return $query->fetch();
        }
    
        public function edit($id)
        {
            $query = $this->db->pdo->prepare('SELECT * FROM news WHERE id = :id');
            $query->execute(['id' => $id]);
    
            return $query->fetch();
        }
    
        public function update($id, $request)
        {
            
    
            $query = $this->db->pdo->prepare('UPDATE news SET title = :title, description = :description, image = :image WHERE id = :id');
            $query->execute([
                'title' => $request['title'],
                'description' => $request['description'],
                'image' => $image,
                'id' => $id
            ]);
    
            return header('Location: ./index.php');
        }

        // public function findByID(){
        //     $query = $this->db->pdo->prepare('SELECT * FROM  articles
        //                                     INNER JOIN categories on articles.category_id = categories.id');
        //     return $query->fetch();

                                           
        // }
    
        public function destroy($id)
        {
            $query = $this->db->pdo->prepare('DELETE FROM news WHERE id = :id');
            $query->execute(['id' => $id]);
    
            return header('Location: ./index.php');
        }
    }
    
?>