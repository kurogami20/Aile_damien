<?php session_start();?>



<?php 
require 'layout/header.php';
?>
    <body >

        <div class="h-full min-[1480px]:m-15 xl:m-10 m-[1rem] relative">
        <?php 

            if (isset($_SESSION['timeout']) && $_SESSION['timeout'] + 10 * 60 * 60 < time()) {
            session_unset();
            session_destroy();
            require_once './views/connexion.php';
           
            exit();
            }
        ?>
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
                        
                    case 'evenements':
                        require_once './views/evenementList.php';
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
                    case 'sport':
                    case 'ensemble':
                    case 'apprendre':
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
<script>
    console.log(<?= json_encode($_SESSION) ?>);
</script>