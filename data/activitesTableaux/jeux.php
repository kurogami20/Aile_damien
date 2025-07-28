<?php

$titrePage = "Jeux de Société";

$activiteId = [36,34,35,64]; // Add relevant IDs if needed
$activiteIdForPlanning = [36,34,35,64]; // Add relevant IDs if needed

$illustrationActivite = 'assets\img\activites\undraw_playing-cards_yoqo.svg';

$activiteTypes = [
    [
        "type" => "cartes",
        "activites" => [
            "Belote",
            "Bridge",
            "Tarot"
        ]
    ],
    [
        "type" => "jeux multiples",
        
    ],
    [
        "type" => "mahjong",
       
    ]
];

$activiteInfo = [
    [
        "titre" => "cartes",
        "activites" => [
            [
                "titre" => "Belote",
                "description" => "<p class='text-lg'> La belote est un jeu de cartes très populaire en France, se jouant généralement à quatre joueurs en équipes de deux. Le but est de remporter un maximum de points en réalisant des plis. Les règles peuvent varier, mais la convivialité est toujours au rendez-vous.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Bridge",
                "description" => "<p class='text-lg'>Depuis septembre dernier, six personnes se sont initiées au Bridge. Et, pour étoffer l'effectif actuel, nous accueillons volontiers de nouveaux joueurs, même novices. L'ambiance est conviviale, sans prétention autre que celle de pratiquer un jeu passionnant, accessible à TOUS. Il y a de la place au moins pour 12 personnes. Aucun complexe à avoir, surtout pas d'idée reçue : le bridge n'est pas réservé à une certaine élite, il est accessible à TOUS. Une initiation est dispensée, ce n'est pas un cours magistral, mais une découverte progressive. Et nous pratiquons l'échange des savoirs d'une façon continue entre nous.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Tarot",
                "description" => "<p class='text-lg'>Les débutants sont les bienvenus...</p>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "jeux multiples",
        "activites" => [
            [
                "titre" => "jeux multiples",
                "description" => "<p class='text-lg'>Béatrice et Gérard ont le plaisir de partager les lundis après-midi avec les \"joueurs\".<br>Ils apporteront les jeux proposés. La liste de ces jeux peut évoluer selon la demande.<br>A bientôt pour des moments conviviaux.</p>",
                "animateur" => [
                    [
                        "anim_prenom" => "Ruiz Béatrice",
                        "anim_telfixe"=> "",
                        "anim_telmob"=> "	06 87 81 00 30",
                        "anim_boitemail"=> "marie_chaumond@hotmail.fr",
                    ],
                    [
                        "anim_prenom" => "Ruiz Gérard",
                        "anim_telfixe"=> "",
                        "anim_telmob"=> "06 66 33 09 69",
                        "anim_boitemail"=> "gerard@example.com",
                    ]
                    ],
                    "planning" => [
                        [
                        "activite_jour" => "Lundi",
                        "activite_horaire" => "14h à 16h30",
                        "salle_nom" => "Salle des arts du Vivier 2"
                        ],]

            ]
        ]
    ],
    [
        "titre" => "mahjong",
        "activites" => [
            [
                "titre" => "mahjong",
                "description" => "<p class='text-lg'>Le Mahjong ou jeu des 4 vents nous vient de Chine. Bien qu'il se pratique avec les mêmes tuiles que le jeu sur ordinateur, les règles se rapprochent en fait plus du jeu de Rami. Il se joue à 4 personnes ou moins. Les règles de jeu que nous utilisons sont légèrement simplifiées ceci afin de privilégier la simplicité et la convivialité. La manipulation des tuiles est agréable et le jeu devient vite addictif et amusant. Un espace est toujours réservé pour initier les nouveaux venus lors de nos réunions. Nous disposons de plusieurs jeux, il n'est donc pas nécessaire d'en acheter un pour venir nous retrouver.</p>",
                "animateur" => ""
            ]
        ]
    ]
];

$salleEtHeure = true;

?>