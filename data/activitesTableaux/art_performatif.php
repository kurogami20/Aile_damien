<?php

$titrePage = "Art Performatif";

$activiteId = [21,19,129,20,65,16,128,18];
$activiteIdForPlanning = [21,19,129,20,65,16,128,18];

$illustrationActivite = 'assets\img\activites\undraw_compose-music_9403.svg';

$activiteTypes = [
    [
        "type" => "musique",
        "activites" => [
            "Animation Orchestrale",
            "Chorale",
            "Folk-Aile",
            "Karaoké"
        ]
    ],
    [
        "type" => "cinema",
        "activites" => [
            "CinéCafé"
        ]
    ],
    [
        "type" => "poesie",
        "activites" => [
            "Poésie"
        ]
    ],
    [
        "type" => "litterature",
        "activites" => [
            "Rencontres Littéraires"
        ]
    ],
    [
        "type" => "theatre",
        "activites" => [
            "Théâtre"
        ]
    ]
];

$activiteInfo = [
    [
        "titre" => "musique",
        "activites" => [
            [
                "titre" => "Animation Orchestrale",
                "description" => "<span>Musique d'ensemble instrumental : guitares, saxo, harmonica, trompette, clavier et chanteurs.</span> <span>Répertoire variété française et étrangère ; ambiance conviviale et ludique, musique de groupe, avec possibilité de se produire à l'extérieur.</span>",
                "animateur" => ""
            ],
            [
                "titre" => "Chorale",
                "description" => "<span>Groupe Ritourn'Aile : chorale composée d'une cinquantaine de choristes dont 3 musiciens, dirigée par Jean-Claude Walrawens.</span> <span>Chante parfois dans les maisons de retraite ou pour des associations caritatives.</span> <span>Répertoire de chants classiques ou de variété françaises et étrangères.</span> <span>Les adhérents qui souhaitent se joindre au groupe seront les bienvenus !</span>",
                "animateur" => "Jean-Claude Walrawens"
            ],
            [
                "titre" => "Folk-Aile",
                "description" => "<span>Découvrez les bienfaits du chant et libérez votre voix.</span> <span>Chant en douceur et création de lien.</span> <span>Répertoire orienté vers la musique française (inspirations : Graeme Allwright, Renaud, Hugues Aufray, J Halliday, JJ Goldman, Cabrel, Bruel, Lama, Dassin, Kaas, Vianney, etc.).</span>",
                "animateur" => ""
            ],
            [
                "titre" => "Karaoké",
                "description" => "<span>Groupe musical chantant des chansons sur le principe du karaoké, dans une ambiance conviviale.</span> <span>Ensemble vocal d'une quinzaine de personnes, prestations en maisons de retraite, participations à des karaokés ou à des évènements municipaux.</span>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "cinema",
        "activites" => [
            [
                "titre" => "CinéCafé",
                "description" => "<span>Activité dédiée au 7ème art.</span> <span>Découverte de la diversité de la création cinématographique grâce à des films du monde entier.</span> <span>Émotions et échanges autour d’un café.</span> <span>Proposé par Fabienne et Martine, 2 fois par mois au cinéma Utopia de Tournefeuille.</span>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "poesie",
        "activites" => [
            [
                "titre" => "Poésie",
                "description" => "<span>L'atelier poésie invite à partager un moment de trêve et de convivialité.</span> <span>Lecture de poésies de votre choix, proposées à chaque atelier, ou de votre création, ou simplement pour écouter.</span> <span>Animé par Annie.</span>",
                "animateur" => "",
            ]
        ]
    ],
    [
        "titre" => "litterature",
        "activites" => [
            [
                "titre" => "Rencontres Littéraires",
                "description" => "<span> Activité issue de la Médiathèque de Villeneuve. Réunion mensuelle autour de la lecture d'une œuvre de littérature classique, française, européenne ou anglo-saxonne.</span> <span>Échanges sur la lecture et les questions de société soulevées par les auteurs classiques. Aucune obligation de lire ou de parler, possibilité d'écouter seulement.</span> ",
                "animateur" => "",
                "calendrier" => ""
            ]
        ]
    ],
    [
        "titre" => "theatre",
        "activites" => [
            [
                "titre" => "Théâtre",
                "description" => "<span>Groupe théâtre LES FARFAD'AILE.</span> <span>L'atelier prépare une comédie à quatre acteurs et souhaite augmenter le nombre de participants pour monter des comédies plus importantes.</span><span> Ouvert à tous, même sans expérience. Activité bénéfique pour la mémoire.</span>",
                "animateur" => ""
            ]
        ]
    ]
];
$salleEtHeure = true; // variable pour savoir si on affiche les salles et heures
?>