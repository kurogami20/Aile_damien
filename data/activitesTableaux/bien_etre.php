<?php
// 
// titre de la page
$titrePage= "Bien-être";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings 
$activiteId=[38,53,126];
$activiteIdForPlanning=[38,53,[126,127]];
// illustration de la page
$illustrationActivite = 'assets\img\activites\undraw_meditation_vje0.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes= [
    
       [ "type"=> "Atelier Mémoire"],
       [ "type"=> "Massages Bien-Etre"],
       [ "type"=> "Relaxation"],
       [ "type"=> "Séance Multi Seniors"],
       [ "type"=> "Sophrologie"],
    ];  

// tableau contenant les informations des activités 
$activiteInfo = [
    [
        "titre" => "",
        "activites" => [
            [
            "titre" => "Atelier Mémoire",
            "description" => '<p class="text-lg">Dans une ambiance amicale et décontractée, venez nous rejoindre pour jouer et entretenir votre mémoire par des jeux aux thèmes très variés.</p> <p class="text-lg">Vous avez envie de solliciter vos neurones autrement que par mots fléchés, croisés, sudoku, lecture et autres...</p> <p class="text-lg">Voulez-vous réviser votre géographie, histoire de France et autres en jouant et vous amusant, alors rejoignez-moi :- Atelier limité à 20 participants- Se munir de papier, stylo, gomme</p>',
            "animateur" => '',
            "planning" =>""
            ],
            [
            "titre" => "Massages Bien-Etre",
            "description" => '<p class="text-lg">L\'atelier pour les « Massages Amma Assis » prend son envol.</p> <p class="text-lg">Ils se pratiquent, habillés et assis sur une chaise prévue à cet effet.</p> <p class="text-lg">C\'est une approche énergétique, faite pour détendre le corps et l\'esprit afin de parvenir à un lâcher prise.</p> <p class="text-lg">Afin d\'avoir un peu plus de temps pour chaque personne, désormais les horaires seront de 9h à 14h (sur RDV) toujours au Cast\'aile le dernier samedi de chaque mois.</p> <p class="text-lg">Si vous êtes intéressés, n\'hésitez pas à m\'appeler.</p>',
            "animateur" => [[
                "anim_nom"=> "Boyer",
                    "anim_prenom" => "Joêlle",
                    "anim_telfixe"=> "",
                    "anim_telmob"=> "06 81 07 90 21",
                    "anim_boitemail"=> "joelle-boyer47@orange.fr",
                ]],
            "planning" => [
                [
                "activite_jour" => "Dernier samedi du mois",
                "activite_horaire" => "9h à 11h",
                "salle_nom" => "Cast-Aile"
                ],]
            ],
            [
            "titre" => "Relaxation",
            "description" => '<p class="text-lg">"Et si vous relâchiez les tensions qui bloquent votre corps et votre mental, pour retrouver la joie d\'être simplement là..."</p><p class="text-lg">Par des exercices variés, utilisant entre autres les postures corporelles, la respiration, l\'écoute de sons, de récits, le corps s\'installe dans un état de bien-être et de détente qui amène vers le lâcher-prise du mental.</p><p class="text-lg">Prévoir un tapis de yoga pour les postures allongées et une couverture polaire pour ne pas avoir froid lors des détentes.</p>',
            "animateur" => [[
                "anim_nom"=> "Boyer",
                    "anim_prenom" => "Joêlle",
                    "anim_telfixe"=> "",
                    "anim_telmob"=> "06 81 07 90 21",
                    "anim_boitemail"=> "joelle-boyer47@orange.fr",
                ]],
            "planning" => [
                [
                "activite_jour" => "Mardi",
                "activite_horaire" => "10h30 à 11h30",
                "salle_nom" => "Salle Albert Camus"
                ],
                [
                "activite_jour" => "Mardi",
                "activite_horaire" => "14h30 à 15h30",
                "salle_nom" => "Salle du Manoir"
                ]
            ]
            ],
            [
            "titre" => "Séance Multi Seniors",
            "description" => '<p class="text-lg">Cette activité concerne ceux et celles qui souhaitent reprendre une activité physique.</p> <p class="text-lg">Le « sport sur ordonnance » : c\'est une nouvelle formule concrétisée en mars 2016.</p> <p class="text-lg">Nous sommes labellisés depuis Juillet 2016 par la commission médicale et la direction technique de la FFRS et ce label nous permet de communiquer auprès des acteurs locaux de santé.</p> <p class="text-lg">Le label a été renouvelé en Fèvrier 2022.</p><p class="text-lg">Après une séance d\'échauffement, des exercices ludiques font travailler les participants au niveau physique mais aussi mental, adresse, équilibre et mémoire.</p> <p class="text-lg">Sous une attention bienveillante, chacun fait de son mieux, à son rythme et selon ses possibilités.</p> <p class="text-lg">Un atelier de retour au calme vient cloturer la séance qui dure environ 1h30.</p>',
            "animateur" => '',
            "planning" =>""
            ],
            [
            "titre" => "Sophrologie",
            "description" => '<p class="text-lg">La sophrologie est une méthode psychocorporelle.</p> <p class="text-lg">Le terme sophrologie signifie l\'harmonie de la conscience.</p> <p class="text-lg">Elle a été conçue par le neuropsychiatre Alfonso Caycedo et est inspirée de techniques occidentales comme orientales.</p><p class="text-lg">Méthode exclusivement verbale et non tactile, la sophrologie utilise un ensemble de techniques qui vont à la foi agir sur le corps et sur le mental.</p> <p class="text-lg">Un tapis de gym peut-être utilisé suivant le programme de la séance.</p>',
            "animateur" => '',
            "planning" =>""
            ]
        ]
    ]
];

$salleEtHeure = true; // variable pour savoir si on affiche les salles et heures
?>
