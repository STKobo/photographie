<?php
class Photos
{
    private $pdo = null;
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }
    
    public function listerPhotos()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM photo');
        }
        $photos = [];
        while ($photo = $stmt->fetchObject()) {
            $photos[] = $photo;
        }
        return $photos;
    }

    public function afficherPhoto($id)
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->prepare('SELECT * FROM photo WHERE id = ?');
        }
        $photo = null;
        if ($stmt->execute([$id])) {
            $photo = $stmt->fetchObject();
            if (!is_object($photo)) {
                $photo = null;
            }
        }
        return $photo;
    }

}