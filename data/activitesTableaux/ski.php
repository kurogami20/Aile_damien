<?php
//
// titre de la page
$titrePage = "Ski de fond";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings
$activiteId = []; 

// illustration de la page
$illustrationActivite = 'assets\img\activites\undraw_skiing.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes = [
    [
        "type" => "ski de fond",
       
    ]
];

// tableau contenant les informations des activités
$activiteInfo = [
    [
        "titre" => "ski",
        "activites" => [
            [
                "titre" => "Ski de fond",
                "description" => ' <span class="red">Il faut être licencié FFRS pour participer à cette activité.</span>
                                    <span>  Le ski de fond pratiqué est le ski alternatif dit “ski de fond classique”, dans des domaines classés pour celui-ci. Le ski “skating” peut être pratiqué à titre personnel.</span>
                                    <span> Exceptionnellement, des sorties de fond nordique pourront être organisées avec des skieurs expérimentés sur des pistes forestières et autres domaines publics non tracés mais sécurisants. Un message collectif précisant le RV et la destination est adressé aux personnes inscrites dans cette discipline.</span>',
                "animateur" => [
                    [
                        "anim_nom" => "Lujan",
                        "anim_prenom" => "Ignacio",
                        "anim_telfixe" => "",
                        "anim_telmob" => "06 46 00 91 79",
                        "anim_boitemail" => "ignacio.lujan@sfr.fr"
                    ]    
                ]
            ]
        ]
    ]
];

$salleEtHeure = false;

?>