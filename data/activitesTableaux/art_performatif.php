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
                "description" => "<p>Musique d'ensemble instrumental : guitares, saxo, harmonica, trompette, clavier et chanteurs.</p> <p>Répertoire variété française et étrangère ; ambiance conviviale et ludique, musique de groupe, avec possibilité de se produire à l'extérieur.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Chorale",
                "description" => "<p>Groupe Ritourn'Aile : chorale composée d'une cinquantaine de choristes dont 3 musiciens, dirigée par Jean-Claude Walrawens.</p> <p>Chante parfois dans les maisons de retraite ou pour des associations caritatives.</p> <p>Répertoire de chants classiques ou de variété françaises et étrangères.</p> <p>Les adhérents qui souhaitent se joindre au groupe seront les bienvenus !</p>",
                "animateur" => "Jean-Claude Walrawens"
            ],
            [
                "titre" => "Folk-Aile",
                "description" => "<p>Découvrez les bienfaits du chant et libérez votre voix.</p> <p>Chant en douceur et création de lien.</p> <p>Répertoire orienté vers la musique française (inspirations : Graeme Allwright, Renaud, Hugues Aufray, J Halliday, JJ Goldman, Cabrel, Bruel, Lama, Dassin, Kaas, Vianney, etc.).</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Karaoké",
                "description" => "<p>Groupe musical chantant des chansons sur le principe du karaoké, dans une ambiance conviviale.</p> <p>Ensemble vocal d'une quinzaine de personnes, prestations en maisons de retraite, participations à des karaokés ou à des évènements municipaux.</p>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "cinema",
        "activites" => [
            [
                "titre" => "CinéCafé",
                "description" => "<p>Activité dédiée au 7ème art.</p> <p>Découverte de la diversité de la création cinématographique grâce à des films du monde entier.</p> <p>Émotions et échanges autour d’un café.</p> <p>Proposé par Fabienne et Martine, 2 fois par mois au cinéma Utopia de Tournefeuille.</p>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "poesie",
        "activites" => [
            [
                "titre" => "Poésie",
                "description" => "<p>L'atelier poésie invite à partager un moment de trêve et de convivialité.</p> <p>Lecture de poésies de votre choix, proposées à chaque atelier, ou de votre création, ou simplement pour écouter.</p> <p>Animé par Annie.</p>",
                "animateur" => "",
            ]
        ]
    ],
    [
        "titre" => "litterature",
        "activites" => [
            [
                "titre" => "Rencontres Littéraires",
                "description" => "<p> Activité issue de la Médiathèque de Villeneuve. Réunion mensuelle autour de la lecture d'une œuvre de littérature classique, française, européenne ou anglo-saxonne.</p> <p>Échanges sur la lecture et les questions de société soulevées par les auteurs classiques. Aucune obligation de lire ou de parler, possibilité d'écouter seulement.</p> ",
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
                "description" => "<p>Groupe théâtre LES FARFAD'AILE.</p> <p>L'atelier prépare une comédie à quatre acteurs et souhaite augmenter le nombre de participants pour monter des comédies plus importantes.</p><p> Ouvert à tous, même sans expérience. Activité bénéfique pour la mémoire.</p>",
                "animateur" => ""
            ]
        ]
    ]
];
$salleEtHeure = true; // variable pour savoir si on affiche les salles et heures
?>