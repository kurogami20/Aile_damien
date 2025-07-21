<?php
// titre de la page
$titrePage = "Art Plastique";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings
$activiteId=[28,29,30,[26,27],25,33];

// id des activités de la page envoyé au data mapper pour récupérer les activités pour le planning
$activiteIdForPlanning=[28,29,30,[26,27],25,33];

$salleEtHeure = true; // variable pour savoir si on affiche les salles et heures
// illustration de la page
$illustrationActivite = 'assets/img/activites/undraw_art_re.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes = [
    [
        "type" => "aquarelle",
        
    ],
    [
        "type" => "atelier creatif",
       
    ],
    [
        "type" => "couture",
        
    ],
    [
        "type" => "encadrement",
        
    ],
    [
        "type" => "peinture et dessin",
        "activites"=>[
            "Peinture sur toile",
            "Dessin-peinture"
        ]
    ],
    [
        "type" => "tricot",
        
    ]
];

// tableau contenant les informations des activités
$activiteInfo = [
    [
        "titre" => "aquarelle",
        "activites" => [
            [
                "titre" => "Aquarelle",
                "description" => "<span>Aquarelle</span>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "atelier créatif",
        "activites" => [
            [
                "titre" => "Atelier créatif",
                "description" => "<span>Un groupe sympathique qui ne se prend pas au sérieux tout en réalisant de très belles choses.</span>
                <span>Nos animateurs sont là pour vous initier et vous conseiller. Vous voulez plus d'informations ? n'hésitez pas à les appeler.</span>
                <span>Nous recherchons une animatrice... Si personne ne se propose, l'activité ne pourra pas reprendre en octobre.</span>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "couture",
        "activites" => [
            [
                "titre" => "Couture",
                "description" => "<span>Marie, couturière de métier et retraitée depuis peu reprend l'activité couture.</span>
                <span>Elle sera là pour vous guider, pour vous apprendre et surtout passer un bon moment ensemble.</span>
                <span>Pensez à amener votre machine à coudre si besoin, vos retouches perso, du tissu si vous voulez vous lancer dans la création ou simplement pour apprendre à piquer à la machine, votre nécessaire de couture (ciseaux, fils, aiguilles, mètre à ruban etc...)</span>
                <span>A vos ciseaux, aiguilles et fils.</span>",
                "animateur" => [[
                    "anim_nom"=> "Chaudon",
                        "anim_prenom" => "Marie",
                        "anim_telfixe"=> "",
                        "anim_telmob"=> "06 88 26 94 77",
                        "anim_boitemail"=> "marie_chaumond@hotmail.fr",
                    ]],
                "planning" => [
                    [
                    "activite_jour" => "Mercredi",
                    "activite_horaire" => "9h à 12h",
                    "salle_nom" => "Salle Jean-Louis Berlier"
                    ],]
            ]
        ],
       
    ],
    [
        "titre" => "encadrement",
        "activites" => [
            [
                "titre" => "Encadrement",
                "description" => "<span>Initiation à l'encadrement</span>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "peinture et dessin",
        "activites" => [
            [
                "titre" => "Peinture sur toile",
                "description" => "<span>On jette sur la toile Des couleurs, des fleurs d'eau. Des paysages levant le voile. Étonnez-vous, prenez un pinceau !</span>",
                "animateur" => ""
            ],
            [
                "titre" => "Dessin-peinture",
                "description" => "<span>On dessine un monde plus beau. La mer bleu-rouge et les bateaux. Le soleil parmi les étoiles ! </span>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "tricot",
        "activites" => [
            [
                "titre" => "Tricot",
                "description" => "<span>Si vous souhaitez apprendre, améliorer votre technique ou tout simplement tricoter en passant une agréable après-midi, venez nous rejoindre à l'atelier tricot.</span>
                <span>Tricot, Crochet, Broderie, Canevas, et petite Couture.</span>
                <span>Nous nous retrouverons toujours dans la convivialité et la bonne humeur.</span>",
                "animateur" => ""
            ]
        ]
    ]
];


?>
