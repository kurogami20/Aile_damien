<?php

if (isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    switch ($categorie) {
        case 'art_plastique':
            require_once './data/activitesTableaux/art_plastique.php';
            break;

        case 'art_performatifs':
            require_once './data/activitesTableaux/art_performatif.php';
            break;

        case 'rando':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'velo':
            require_once './data/activitesTableaux/velo.php';
            break;

        case 'ski':
            require_once './data/activitesTableaux/ski.php';
            break;

        case 'tourisme':
            require_once './data/activitesTableaux/tourisme.php';
            break;

        case 'festivites':
            require_once './data/activitesTableaux/festivites.php';
            break;

        case 'numerique':
            require_once './data/activitesTableaux/numerique.php';
            break;

        case 'langues':
            require_once './data/activitesTableaux/langues.php';
            break;

        case 'bien_etre':
            require_once './data/activitesTableaux/bien_etre.php';
            break;

        case 'jeux':
            require_once './data/activitesTableaux/jeux.php';
            break;
    }
}


?>
