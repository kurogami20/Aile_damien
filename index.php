<?php 

require_once 'layout/header.php';

if(isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'association':
            require_once './views/association.php';
            break;
        case 'art':
            require_once './views/art.php';
            break;
        case 'sport':
            require_once './views/sport.php';
            break;
        case 'ensemble':
            require_once './views/ensemble.php';
            break;
        case 'apprendre':
            require_once './views/apprendre.php';
            break;
        case 'detente':
            require_once './views/detente.php';
            break;
        case 'connexion':
            require_once './views/connexion.php';
            break; 
            
        default:
            require_once './views/home.php';
    }
} else {
    require_once 'views/home.php';
}

?>
