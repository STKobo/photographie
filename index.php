<?php
require_once('controleurs/Controleur.php');
require_once('modeles/Photos.php');
$controleur = new Controleur();
if (isset($_GET['page']) && 'photo' === $_GET['page']) {
    $controleur->afficherPhoto();
} else {
    $controleur->listerPhotos();
}