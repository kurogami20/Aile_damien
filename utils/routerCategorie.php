<?php
if (isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
            switch ($categorie) {
                case 'art_manuel':
                    require_once './views/art/artManuel.php';
                    break;

                case 'art_performatifs':
                    require_once './views/art/artPerformatifs.php';
                    break;

                case 'rando':
                    require_once './views/sport/rando.php';
                    break;

                case 'velo':
                    require_once './views/sport/velo.php';
                    break;

                case 'ski':
                    require_once './views/sport/ski.php';
                    break;

                case 'tourisme':
                    require_once './views/ensemble/tourisme.php';
                    break;

                case 'festivites':
                    require_once './views/ensemble/festivites.php';
                    break;

                case 'numerique':
                    require_once './views/apprendre/numerique.php';
                    break;

                case 'langues':
                    require_once './views/apprendre/langues.php';
                    break;

                case 'bien_etre':
                    require_once './views/detente/bienEtre.php';
                    break;

                case 'jeux':
                    require_once './views/detente/jeuxDeSociete.php';
                    break;
                    
                default:
                    // Handle unknown categories if necessary
            }
        }


        ?>