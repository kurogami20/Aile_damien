<?php
if (isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
            switch ($categorie) {
                    case 'art_plastique':
                    case 'art_performatifs':
                    case 'rando':
                    case 'velo':
                    case 'ski':
                    case 'tourisme':
                    case 'festivites':
                    case 'numerique':
                    case 'langues':
                    case 'bien_etre':
                    case 'jeux':
                        require_once './views/indexActivites.php';
                        break;
               
                default:
                    require_once './404.php';
                  
            }
        }


        ?>