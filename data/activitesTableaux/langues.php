<?php
// titre de la page
$titrePage = "Langues";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings
$activiteId = [70,71,72,76,74,80,81,122,83,89,92];

// id des activités de la page envoyé au data mapper pour récupérer les activités pour le planning
$activiteIdForPlanning = [70,71,72,76,74,80,81,122,83,89,92];

$salleEtHeure = true; // variable pour savoir si on affiche les salles et heures

// illustration de la page
$illustrationActivite = 'assets/img/activites/undraw_language_learning.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes = [
    [
        "type" => "anglais",
        "activites" => [
            "Anglais niv1 : Faux débutant",
            "Anglais niv2 : Niveau \"Collège\"",
            "Anglais niv3 : Niveau \"Lycée\"",
            "Anglais niv4 : Initiation à la conversation",
            "Anglais niv5 : Conversation"
        ]
  ],
    ["type" => "espagnol",
    "activites" => [
                "Espagnol niv1 : Débutants & faux débutants",
                "Espagnol niv2 : Intermédiaire",
                "Espagnol niv3 : Perfectionnement",
                "Espagnol niv4 : Conversation"
            ]
    ],
    ["type" => "italien"],
    ["type" => "occitan"]
];

// tableau contenant les informations des activités
$activiteInfo = [
    [
        "titre" => "anglais",
        "activites" => [
            [
                "titre" => "Anglais niv1 : Faux débutant",
                "description" => "<p>Ce cours s'adresse aux personnes ayant peu ou pas de notions en anglais, ou souhaitant reprendre depuis les bases.</p>
                <ul class='list-disc pl-5'>
                    <li>Revoir l'alphabet et les sons de base</li>
                    <li>Travailler la prononciation des mots courants</li>
                    <li>Apprendre à écrire des phrases simples</li>
                    <li>Acquérir les bases de la grammaire et de la conjugaison (présent, verbes essentiels)</li>
                    <li>Enrichir son vocabulaire utile au quotidien (présentations, chiffres, formules de politesse…)</li>
                </ul>
                <p>Les deux premiers trimestres seront centrés sur ces fondamentaux. Le dernier trimestre proposera une mise en situation avec des dialogues simples et de l’écoute audio (CD).</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Anglais niv2 : Niveau \"Collège\"",
                "description" => "<p>Ce niveau s’adresse aux personnes ayant acquis les bases mais souhaitant consolider leurs acquis et améliorer leur compréhension.</p>
                <ul class='list-disc pl-5'>
                    <li>Révision des temps de base (présent simple, présent continu, passé simple)</li>
                    <li>Développement du vocabulaire courant (vie quotidienne, loisirs, travail…)</li>
                    <li>Amélioration de la prononciation</li>
                    <li>Premières expressions idiomatiques</li>
                </ul>
                <p>Effectif maximum recommandé : 12 participants pour garantir la qualité des échanges.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Anglais niv3 : Niveau \"Lycée\"",
                "description" => "<p>Ce cours permet de renforcer ses compétences linguistiques à travers une approche plus approfondie de la langue.</p>
                <ul class='list-disc pl-5'>
                    <li>Révision et utilisation des temps principaux (présent, prétérit, futur, conditionnel)</li>
                    <li>Introduction à des structures grammaticales plus complexes</li>
                    <li>Enrichissement du vocabulaire thématique</li>
                    <li>Début de conversation guidée</li>
                </ul>
                <p>Une participation active est encouragée. Une connaissance préalable des bases grammaticales est recommandée.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Anglais niv4 : Initiation à la conversation",
                "description" => "<p>Cours de transition vers l’oral : ce niveau vise à prendre confiance à l’oral et à s’exprimer dans des situations simples.</p>
                <ul class='list-disc pl-5'>
                    <li>Activités orales en petits groupes</li>
                    <li>Jeux de rôle</li>
                    <li>Discussions autour de sujets de la vie courante</li>
                    <li>Utilisation de dialogues, vidéos et chansons</li>
                </ul>
                <p>Objectifs : Comprendre et participer à une conversation simple, réutiliser le vocabulaire appris dans des contextes concrets, gagner en fluidité et en spontanéité.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Anglais niv5 : Conversation",
                "description" => "<p>Ce cours s'adresse à ceux qui souhaitent pratiquer l’anglais à l’oral de manière active et régulière.</p>
                <ul class='list-disc pl-5'>
                    <li>Développer l’aisance orale</li>
                    <li>Approfondir la compréhension orale de l’anglais naturel (accents, registres…)</li>
                    <li>Enrichir l’expression personnelle, la précision du vocabulaire et la fluidité des échanges</li>
                </ul>
                <p>Chaque participant propose ou choisit un thème à présenter brièvement. Les échanges sont ensuite menés sous forme de discussions collectives. Des supports variés peuvent compléter les séances.</p>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "espagnol",
        "activites" => [
            [
                "titre" => "Espagnol niv1 : Débutants & faux débutants",
                "description" => "<p>Pour que ce cours puisse avoir lieu, un minimum de 6 participants est nécessaire.</p>
                <ul class='list-disc pl-5'>
                    <li>Partir de la base alphabet</li>
                    <li>Prononciation</li>
                    <li>Ecrit</li>
                    <li>Les indispensables en grammaire et conjugaison</li>
                    <li>Acquisition d'un maximum de vocabulaire pratique</li>
                </ul>
                <p>Les 2 premiers trimestres seront prioritairement consacrés aux 5 premiers points. Le dernier trimestre : étude de différentes situations rencontrées au cours d'un voyage, avec écoute de CD.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Espagnol niv2 : Intermédiaire",
                "description" => "<p>Les cours se font sur la base de textes, d'exercices et d'audio en utilisant des phrases simples afin d'améliorer compréhension et prononciations.</p>
                <p>Une approche des règles de grammaire ainsi que de la conjugaison aux temps simples et les plus usités seront étudiés à partir de ces textes.</p>
                <p>Le but est de se familiariser avec les bases du quotidien et de mettre l'accent sur le langage parlé et d'enrichir son vocabulaire.</p>
                <p>Pour permettre une fluidité des cours, un maximum de 12 participants est imposé.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Espagnol niv3 : Perfectionnement",
                "description" => "<p>Ce cours étant une introduction à la conversation, l’animation se fera majoritairement en langue espagnole afin d’accroitre sa compréhension.</p>
                <p>Bien que certaines règles de grammaire y soient revues, l’essentiel sera basé sur la lecture et la traduction de textes tirés pour la plupart du coffret « Harrap’s Espagnol perfectionnement » (ISBN: 978-2-81-870241-3) utilisé pour les cours.</p>
                <p>Le but majeur sera de converser au maximum afin d’enrichir son vocabulaire et sa prononciation. La conjugaison espagnole dans les temps majeurs est un pré requis souhaitable.</p>
                <p>Pour permettre une fluidité des cours, un maximum de 12 participants est imposé.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Espagnol niv4 : Conversation",
                "description" => "<p>Cada participante de este cursillo de conversación hablará sobre un tema de su propia elección. Este informe de poca duración será motivo para una discusión entre todos los participantes. En otras ocasiones se podrá leer poesías españolas, y escuchar canciones para restituir la letra.</p>
                <p>También, se podrá programar una sesión de cine.</p>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "italien",
        "activites" => [
            [
                "titre" => "Italien conversationnel",
                "description" => "<p>Ce cours s'adresse à ceux qui souhaitent pratiquer l'italien à l'oral de manière active et régulière.</p>",
                "animateur" => ""
            ]
        ]
    ],
    [
        "titre" => "occitan",
        "activites" => [
            [
                "titre" => "Occitan",
                "description" => "<p>Dans une ambiance conviviale, cet atelier propose de (re)découvrir la langue occitane, la parler et puis la lire et l'écrire. Il propose aussi de mieux connaitre l'actualité et la culture occitanes (littérature, théâtre, concerts). Il est ouvert à tous, débutants ou locuteurs confirmés.</p>",
                "animateur" => ""
            ]
        ]
    ]
];

?>
