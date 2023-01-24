<?php
class Controleur
{
    public function listerPhotos()
    {
        $photos = new Photos();
        $photos = $photos->listerPhotos();
        require_once('vues/liste-photos.php');
    }
    public function afficherPhoto()
    {
        $photos = new Photos();
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $photo = $photos->afficherPhoto($_GET['id']);
        }
        require_once('vues/affiche-photo.php');
    }
}