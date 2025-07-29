<?php
// titre de la page
$titrePage = "Festivités";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings
$activiteId = []; // à remplir si nécessaire

// id des activités de la page envoyé au data mapper pour récupérer les activités pour le planning
$activiteIdForPlanning = []; // à remplir si nécessaire

$salleEtHeure = false; // variable pour savoir si on affiche les salles et heures

// illustration de la page
$illustrationActivite = 'assets/img/activites/undraw_party.svg';

// tableau pour le menu secondaire pour naviguer sur la page


// tableau contenant les informations des activités
$activiteInfo = [
    [
        "activites" => [
            [
                "titre" => "Rassemblements festifs",
                "description" => "<p class='text-lg'>Tout au long de la saison, plusieurs rassemblements festifs sont organisés dans une ambiance conviviale et joyeuse. Ces moments privilégiés sont l’occasion parfaite de se retrouver, de partager de bons moments et de créer des souvenirs inoubliables dans la bonne humeur.</p>
                <ul class='list-disc pl-5'>
                    <li>Galette fin janvier</li>
                    <li>Repas festifs et/ou à thème en principe en mars</li>
                    <li>Repas partagés</li>
                    <li>Repas de retrouvailles début septembre</li>
                    <li>Et plus encore</li>
                </ul>",
                "animateur" => ""
            ]
        ]
    ]
];
?>