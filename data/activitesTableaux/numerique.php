<?php
// titre de la page
$titrePage = "Numérique";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings
$activiteId = [110, 120, 111, 121, 22, 23]; 

// id des activités de la page envoyé au data mapper pour récupérer les activités pour le planning
$activiteIdForPlanning = [110, 120, 111, 121, 22, 23];

// variable pour savoir si on affiche les salles et heures
$salleEtHeure = true;

// illustration de la page
$illustrationActivite = 'assets/img/activites/undraw_engineering-team_13ax.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes = [
 
    [ "type" => "informatique",
    "activites"=> [
        "Informatique Initiation",
        "Informatique Accompagnement - Applications",
        "Informatique Perfectionnement",
        "Informatique Dépannage",
        ]
    ],

    [ "type" => "photos" ],
    [ "type" => "généalogie" ]
];

// tableau contenant les informations des activités
$activiteInfo = [
   
    [
        "titre" => "informatique",
        "activites" => [
           
            [
                "titre" => "Informatique Initiation",
                "description" => "<p>Pour profiter au mieux des cours, il est conseillé d'être équipé d'un PC sous Windows.<br>
                Si possible, apportez votre ordinateur portable.</p>
                <p><b>Mise à jour le 4 juillet 2025</b><br>
                <b>Le programme</b><br>
                Connaissances informatiques requises : Aucune<br>
                Contenu :
                <ul class='list-disc text-lg'>
                    <li>Maîtrise de la souris, du clavier, du bureau et des fenêtres.</li>
                    <li>Notion de création/gestion de fichier et dossier.</li>
                    <li>Utilisation d'un traitement de texte, d'un navigateur Web et du webmail.</li>
                    <li>Compte tenu des conditions sanitaires, il est indispensable d'apporter chacun son PC portable.</li>
                </ul>
                <p><b>Calendrier des sessions</b><br>
                À venir<br>
                Session 2025-2026 : du 1er octobre 2025 au 24 juin 2026</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Informatique Accompagnement - Applications",
                "description" => "<p>Il ne s'agit pas d'un cours magistral, l'adhérent qui sait utiliser son PC exprime ses besoins pour utiliser des applications.<br>
                L'accompagnement informatique est une prestation à la demande pour fournir des solutions, proposer des améliorations et donner une idée de l'évolution de l'informatique.</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Informatique Perfectionnement",
                "description" => "<p>Ces cours s'adressent aux personnes qui savent déjà utiliser un ordinateur de façon basique, c'est à dire utiliser la souris, le clavier et faire des recherches sur le Web, et qui veulent progresser dans la maîtrise de leurs machines, ordinateurs, tablettes ou smartphones.</p>
                <p><b>Mise à jour le 4 juillet 2025</b><br>
                <b>Le programme</b><br>
                Sujets abordés :
                <ul class='list-disc text-lg'>
                    <li>L'ordinateur : Les matériels - Les dispositifs de pointage - La saisie vocale - Le clavier - Les autres éléments</li>
                    <li>Le système : Démarrage de l'ordinateur - Les systèmes d'exploitation - Les environnements graphiques - Gérer les fenêtres</li>
                    <li>Les fichiers : Gestion des fichiers - Fichiers et applications</li>
                    <li>La bureautique : Le traitement de texte - Les feuilles de calcul - Autres applications</li>
                    <li>Internet : Généralités - La navigation sur le Web - Les adresses Web - Les moteurs de recherches - Publier sur le Web - Le droit du Web</li>
                    <li>Communiquer : Le courrier électronique - Les autres solutions</li>
                    <li>Le multimédia : Tour d'horizon - Gestion des données</li>
                    <li>La boîte à outils : Protéger - Réparer - Améliorer</li>
                </ul>
                Les thèmes abordés seront approfondis en fonction des besoins exprimés par les participants.</p>
                <p><b>Calendrier des sessions</b><br>
                À venir :<br>
                Session 2025-2026 : du 1er octobre 2025 au 24 juin 2026</p>",
                "animateur" => ""
            ],
            [
                "titre" => "Informatique Dépannage",
                "description" => "<p>Les responsables informatique proposent une assistance ponctuelle pour celles et ceux qui ont des soucis avec leurs ordinateurs, tablettes ou smartphones (dysfonctionnement matériel ou logiciel et autres difficultés).<br>
                Selon les cas, les problèmes pourront être résolus sur place ou une solution pourra être proposée. Prévenir un des animateurs au moins 24h à l'avance en décrivant le problème rencontré.</p>",
                "animateur" => ""
            ],

        ]
    ],
   
    [
        "titre" => "photos",
        "activites" => [
            [
                "titre" => "Photos",
                "description" => "<p>Les cours de photographie se déroulent tout au long de la saison en plusieurs modules.</p>
                <ul class='list-disc text-lg'>
                <li> Le cadrage et la composition des images lors de la prise de vue.</li>
                <li> Les notions de base de la technique photographique et de la technologie numérique (pour mieux comprendre la nature des fichiers photos issus des appareils de prise de vue).</li>
                <li> Traitement numérique des images.</li>
                </ul>
                <p>Le nombre maximal de participants par module est de six.</p>
                <p>Attention une bonne maitrise de Windows et de la gestion des dossiers et fichiers est nécessaire.</p>",
                "animateur" => ""
            ]
        ]
            ],
            [
                "titre" => "généalogie",
                "activites" => [
                    [
                        "titre" => "Généalogie",
                        "description" => "<p>Si vous êtes à la recherche de vos ancêtres...<br>
                        Si votre arbre généalogique vous pose quelques soucis...<br>
                        Elle se pratique uniquement à l'aide de ressources gratuites : logiciels, archives en ligne...<br>
                        Dès la première séance, apportez votre ordinateur portable ainsi que les données en votre possession.</p>
                        <p>Pour tous renseignements complémentaires, veuillez contacter :<br>
                        Lydie au 05 34 47 79 84<br>
                        Elisabeth au 06 19 24 58 38</p>",
                        "animateur" => ""
                    ]
                ]
            ],
];

?>