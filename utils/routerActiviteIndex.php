<?php

if (isset($_GET['categorie'])) {
    $categorie = $_GET['categorie'];
    switch ($categorie) {
        case 'art_plastique':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'art_performatifs':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'rando':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'velo':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'ski':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'tourisme':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'festivites':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'numerique':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'langues':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'bien_etre':
            require_once './data/activitesTableaux/rando.php';
            break;

        case 'jeux':
            require_once './data/activitesTableaux/rando.php';
            break;
    }
}


?>
