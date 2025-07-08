<?php


$titrePage= "Randonnée et Marche";

$activiteId=[42,41,44,40,51,];
    
$illustrationActivite = 'assets\img\activites\undraw_hiking_9zta.svg';

$activiteTypes= [
    [
    "type"=> "marche",
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

$activiteInfo = [
    [
      "titre" => "marche",
      "activites" => [ 
        [
            "titre" => "Marche à la Ramée",
            "description" => "Marche à la Ramée les mardi et vendredi par Maïté Siau, de mi-septembre à mi-juin à 9h et de mi-juin à mi-septembre à 8h30. Rassemblement côté manège.",
            "animateur" => ''
        ],
        [
            "titre" => "Marche Nordique",
            "description" => "Tous les mardis à 8h, site de Bidot, parking du centre aéré de Frouzins, chemin Sauveur ; animateur Ignacio Lujan. Mardi et vendredi à 9h et 8h30 à partir du mardi 17 juin autour du lac de la Ramée, parking principal (manège) ; animateur Jean-Claude Perez. Tous les jeudis à 8h, départ salle Paucheville à Frouzins ; animateur Brice Ledos.",
            "animateur" => ''
        ],
        [
            "titre" => "Marche Promenade",
            "description" => "Marche promenade le jeudi matin à 9h (prévenir de votre présence). Bord du canal St Martory et parc Rachety ; RdV devant le parking rue du Couserans (au Vivier) à Cugnaux.",
            "animateur" => ''
        ],
        [
            "titre" => "Marche Rapide",
            "description" => "Marche rapide, le jeudi à 9h au parc de La Ramée à Toulouse. RdV parking du manège.",
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
                "description" => "Les randonnées prévues avec la Brun'AILE sont faciles et accessibles à tous, animées par plusieurs animateurs. Les lundi, jeudi et vendredi : randonnées à la journée ou à la demi-journée. RdV 15 mn avant le départ, parking du Cast'Aile à Cugnaux. Infos de dernière minute via « randoaile », « montagneaile » ou « véloaile » (contact : Pascal Rigot, Claude Jollivet, Alain Edin). Boîte vocale : 09 72 30 08 25. Licence FFRS obligatoire pour sorties neige, raquettes, ski de fond et vélo."
            ],
            [
                "titre" => "Randos Montagne",
                "description" => "La randonnée montagne exclut la haute montagne nécessitant des équipements spéciaux (corde, piolet, crampons). Activité encadrée par des animateurs brevetés. Sorties généralement le vendredi. Consulter le calendrier des randonnées."
            ],
            [
                "titre" => "Randos Raquettes",
                "description" => "Les randonnées raquettes nécessitent une licence FFRS pour des raisons d'assurance. Activité encadrée par des animateurs brevetés, généralement proposée le vendredi selon l'enneigement. Consulter le calendrier des randonnées.",
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



?>