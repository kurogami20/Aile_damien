<?php session_start();?>

<?php 
require 'layout/header.php';
?>
<body >

    <div class="h-full m-15 relative">
        <?php
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'qui_sommes_nous':
                    require_once './views/association/quiSommesNous.php';
                    break;

                case 'poles_d_activites':
                    require_once './views/association/poles.php';
                    break;

                case 'tableau_d_activite':
                    require_once './views/association/tableauxDActivite.php'; 
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

                case 'detailEvenement':
                    require_once './views/detailEvenement.php'; 
                    break;
                    
                case 'art':
                    require_once './utils/routerCategorie.php';
                    break;

                case 'sport':
                    require_once './utils/routerCategorie.php';
                    break;

                case 'ensemble':
                    require_once './utils/routerCategorie.php';

                    break;

                case 'apprendre':
                    require_once './utils/routerCategorie.php';

                    break;

                case 'detente':
                    require_once './utils/routerCategorie.php';
                    break;

                case 'activites':
                    require_once './views/indexActivites.php';
                    break;

                case 'detailsTourisme':
                    require_once './views/detailsGapGav.php';
                    break;

                default:
                    require_once './404.php';
            }
        } else {
            require 'views/home.php';
        }
       
        ?>
        
    </div>

</body>
<?php require 'layout/footer.php'?>