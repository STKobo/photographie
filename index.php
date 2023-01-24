<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon book</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', 'root');
            } catch (PDOException $e) {
                exit('Erreur : '.$e->getMessage());
            }
            $stmt = $pdo->query('SELECT * FROM photo');
            $photos = [];
            while ($photo = $stmt->fetchObject()) {
                $photos[] = $photo;
            }

            require_once('vues/liste-photos.php')
        ?>
        