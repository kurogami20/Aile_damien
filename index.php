<?php session_start();?>
<?php 
require 'layout/header.php';
?>
<body >
    <div class="h-full m-15 ">
        <?php
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'qui_sommes_nous':
                    require_once './views/association/quiSommesNous.php';
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
                    
                case 'accueil':
                    require_once './views/home.php';
                    break;

                case 'adherer':
                    require_once './views/adherer.php';
                    break;    

                default:
                    require_once './views/home.php';
            }
        } else {
            require 'views/home.php';
        }
        ?>
    </div>
</body>
<?php require 'layout/footer.php'?>