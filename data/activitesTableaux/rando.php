
<?php
// 
// titre de la page
$titrePage= "Randonnée et Marche";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings 
$activiteId=[42,41,44,40,51,];

// illustration de la page
$illustrationActivite = 'assets\img\activites\undraw_hiking_9zta.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes= [
    [
     //item pricipal du menu secondaire 
    "type"=> "marche",
    // sous-menu 
    "activites"=> [
        "Marche à la Ramée",
        "Marche Nordique",
        "Marche Promenade",
        "Marche Rapide"
    ]
    ],
    [
        "type"=> "randonnees",
        "activites"=> [
            "Randonnées",
            "Randos Montagne",
            "Randos Raquettes"
        ]
    ]
   
];  

// tableau contenant les informations des activités 
$activiteInfo = [
    // correspond à une section
    [
        // titre de la section/activité
      "titre" => "marche",
        // tableau des activités de la section
      "activites" => [ 
        [
            "titre" => "Marche à la Ramée",
            "description" => "<p class='text-lg'>Marche à la Ramée les mardi et vendredi par Maïté Siau, de mi-septembre à mi-juin à 9h et de mi-juin à mi-septembre à 8h30. </p> <p class='text-lg'>Rassemblement côté manège.</p>",
            "animateur" => ''
        ],
        [
            "titre" => "Marche Nordique",
            "description" => "<p class='text-lg'>Tous les mardis à 8h, site de Bidot, parking du centre aéré de Frouzins, chemin Sauveur. Animateur Ignacio Lujan.</p><p class='text-lg'>  Mardi et vendredi à 9h et 8h30 à partir du mardi 17 juin autour du lac de la Ramée, parking principal (manège). animateur Jean-Claude Perez.</p> <p class='text-lg'>Tous les jeudis à 8h, départ salle Paucheville à Frouzins. animateur Brice Ledos.</p>",
            "animateur" => ''
        ],
        [
            "titre" => "Marche Promenade",
            "description" => "<p class='text-lg'>Marche promenade le jeudi matin à 9h (prévenir de votre présence).</p><p class='text-lg'> Bord du canal St Martory et parc Rachety. RdV devant le parking rue du Couserans (au Vivier) à Cugnaux.</p>",
            "animateur" => ''
        ],
        [
            "titre" => "Marche Rapide",
            "description" => "<p class='text-lg'>Marche rapide, le jeudi à 9h au parc de La Ramée à Toulouse.</p> <p class='text-lg'>RdV parking du manège.</p>",
            // tableau des animateurs dans le cas où ils ne sont pas définis dans la base de données
            "animateur" => [[
                            "anim_nom"=> "Boyer",
                            "anim_prenom" => "Joêlle",
                            "anim_telfixe"=> "",
                            "anim_telmob"=> "06 81 07 90 21",
                            "anim_boitemail"=> "joelle-boyer47@orange.fr",
                            ]]
        ],
                    ]
    ],
   
    [
        "titre"=>"randonnees",
        "activites"=> [
            [
                "titre" => "Randonnées",
                "description" => "<p class='text-lg'>Les randonnées prévues avec la Brun'AILE sont faciles et accessibles à tous, animées par plusieurs animateurs.</p><p class='text-lg'> Les lundi, jeudi et vendredi : randonnées à la journée ou à la demi-journée.</p> <p class='text-lg'>RdV 15 mn avant le départ, parking du Cast'Aile à Cugnaux.</p><p class='text-lg'> Infos supplémentaire ou de dernière minute via « randoaile », « montagneaile » ou « véloaile » sur votre messagerie (contact : Pascal Rigot, Claude Jollivet, Alain Edin). Pensez à consulter la Boîte vocale : 09 72 30 08 25 pour confirmation.</p>"
            ],
            [
                "titre" => "Randos Montagne",
                "description" => "<p class='text-lg'>La randonnée montagne exclut la haute montagne nécessitant des équipements spéciaux (corde, piolet, crampons).</p><p class='text-lg'> Activité encadrée par des animateurs brevetés. Sorties généralement le vendredi. Consulter le calendrier des randonnées.</p>"
            ],
            [
                "titre" => "Randos Raquettes",
                "description" => "<p class='text-lg' class='red'>Les randonnées raquettes nécessitent une licence FFRS pour des raisons d'assurance.</p> <p class='text-lg'>Activité encadrée par des animateurs brevetés, généralement proposée le vendredi selon l'enneigement.</p> <p class='text-lg'>Consulter le calendrier des randonnées.</p>",
                "animateur" => [
                        [
                            "anim_nom" => "Rigot",
                            "anim_prenom" => "Pascal",
                            "anim_telfixe" => "05 61 06 57 13",
                            "anim_telmob" => "06 85 45 28 00",
                            "anim_boitemail" => "pascal.rigot@gmail.com"
                        ],
                        [
                            "anim_nom" => "Edin",
                            "anim_prenom" => "Alain",
                            "anim_telfixe" => "",
                            "anim_telmob" => "06 32 84 71 96",
                            "anim_boitemail" => "alain.edin@wanadoo.fr"
                        ],
                        [
                            "anim_nom" => "Jollivet",
                            "anim_prenom" => "Claude",
                            "anim_telfixe" => "05 61 07 41 75",
                            "anim_telmob" => "06 17 64 63 31",
                            "anim_boitemail" => "mc.jollivet@hotmail.fr"
                        ],
                        [
                            "anim_nom" => "Le Gall",
                            "anim_prenom" => "Daniel",
                            "anim_telfixe" => "05 61 92 75 66",
                            "anim_telmob" => "06 28 06 89 93",
                            "anim_boitemail" => "daniel31.legall@free.fr"
                        ],
                        [
                            "anim_nom" => "Roulland",
                            "anim_prenom" => "Francis",
                            "anim_telfixe" => "05 61 07 54 54",
                            "anim_telmob" => "06 85 78 75 43",
                            "anim_boitemail" => "francis.roulland@orange.fr"
                        ],
                        [
                            "anim_nom" => "Sigur",
                            "anim_prenom" => "Daniel",
                            "anim_telfixe" => "",
                            "anim_telmob" => "06 70 79 80 21",
                            "anim_boitemail" => "sigur.daniel@orange.fr"
                        ]
                    ]
                ]
        
                     ]

    ]
];

$salleEtHeure = false; // variable pour savoir si on affiche les salles et heures

?>