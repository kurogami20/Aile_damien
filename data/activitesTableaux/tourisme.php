
<?php
// 
// titre de la page
$titrePage= "Tourisme";

// id des activités de la page envoyé au data mapper pour récupérer les animateur et les plannings 
$activiteId=[42,41,44,40,51,];

// illustration de la page
$illustrationActivite = 'assets\img\activites\undraw_hiking_9zta.svg';

// tableau pour le menu secondaire pour naviguer sur la page
$activiteTypes= [
    [
     //item pricipal du menu secondaire 
    "type"=> "Groupe d'Activités Patrimoine - GAP",
    // sous-menu 
    "activites"=> [
        "Calendrier",
        "Sorties demi-journée",
        "Sorties journée",
        "Sorties du dimanche",
        "Conférences",
        "Séjours",
    ]
    ],
    [
        "type"=> "Groupe d'Activités Voyage - GAV",
        "activites"=> [
            "Prochain voyage",
        ]
    ]
   
];  

// tableau contenant les informations des activités 
$activiteInfo = [
    // correspond à une section
    [
        // titre de la section/activité
        "titre" => "Groupe d'Activités Patrimoine - GAP",
        "description" =>" <p class='text-lg' >Le GAP (Groupe d'Activités Patrimoine) est constitué de bénévoles organisant et animant des sorties à la 1/2 journée, des sorties à la journée, des séjours ayant pour but de faire connaitre notre patrimoine français.</p>
        <p class='text-lg'> <span class='font-bold text-red!'> INFORMATIONS IMPORTANTES de la part des Animateurs du GAP
        Sorties, voyages en France, conférences</span><br>
        Après la pandémie, restaurateurs, offices de tourisme, guides conférenciers ont révisé leurs prestations nettement à la hausse. Aujourd'hui, nous faisons face à une hausse très importante du prix du gas-oil. Tout ceci se répercute sur le prix que nous vous demandons lors de nos sorties et malgré des négociations serrées avec nos différents intervenants, nous ne pouvons que nous incliner face à une situation qui échappe à tous.
        Notre Association a toujours eu pour principe, depuis sa création, de ne demander AUCUNE subvention de quelque origine que ce soit et nous continuerons en ce sens car il nous parait très important de partager des moments de convivialité en votre compagnie, surtout en ces temps troublés.
        Francine Gioanni - Danielle Christiaens - Lise et Gérard Masson
        Animateurs GAP (Groupe Activités Patrimoine)</p>
        <p class='text-lg'> <span class='font-bold '>Rappel pour les sorties, séjours, visites</span><br>
        En cas de désistement, veuillez vous référer à l'annexe du Règlement Intérieur en lien <a href='https://aile31.fr/divers/documents/activites2024v2.pdf#%5B%7B%22num%22%3A652%2C%22gen%22%3A0%7D%2C%7B%22name%22%3A%22XYZ%22%7D%2C51.15%2C451.139%2C0%5D'>ici</a></p>
        ",
      
        // tableau des activités de la section
      "activites" => [ 
       [
        "titre" => "Calendrier",
       ],
        [
            "titre" => "Sorties demi-journée",
        ],
        [
            "titre" => "Sorties journée",
        ],
        [
            "titre" => "Sorties du dimanche",
        ],
        [
            "titre" => "Conférences",
        ],
        [
            "titre" => "Séjours",
        ]
    ],
    ],
    [
        "titre"=>"Groupe d'Activités Voyage - GAV",
        "description"=>"<p class='text-lg'> Le GAV (Groupe d'Activités Voyage) est constitué de bénévoles organisant et animant des voyages à l'étranger.
        Elles gèrent les inscriptions, le planning, les désistements, les réclamations.</p>
        <p class='text-lg'> <span class='font-bold'>Organisation</span><br>

        Les participants doivent être en bonne condition physique et être équipés de bonnes chaussures et d'un bon équipement (bâtons si nécessaire), car ces sorties imposent souvent beaucoup de marche.
        Lors de l’inscription, les personnes ayant un régime alimentaire devront le signaler. Nous ne pourrons pas, en cours de séjour ou voyage, faire modifier les menus. Nous ne sommes pas habilités à demander un certificat médical.
        Dans le cas d’une demande expresse de changement de menu, seul l’organisateur du séjour ou de la sortie est habilité à le faire.
        Durant le séjour, le groupe est sous la responsabilité des animateurs GAP ou GAV. Aussi, aucune initiative individuelle susceptible de faire perdre du temps au groupe ne sera admise. Les temps libres sont définis dans le descriptif du séjour mais, suivant les circonstances, ils peuvent être raccourcis ou aménagés différemment. En règle générale, chacun doit se conformer au descriptif du voyage et suivre les responsables. Aucune dérogation ne sera acceptée.
        Si, en cours du séjour ou du voyage, un participant quitte le groupe plusieurs heures pour convenance personnelle il devra signer une décharge, en rapport avec ce cas, dégageant la responsabilité du voyagiste et de l’organisateur. Ceci doit toutefois rester une exception.
        Si une ou plusieurs personnes se permettent de faire des remarques désobligeantes, voire injurieuses envers les animateurs ou d’autres personnes du groupe, leur comportement sera signalé au CA, qui décidera des suites à donner.</p>

        <p class='text-lg'> <span class='font-bold'>Désistement</span><br>
        En cas de désistement, veuillez vous référer à l'annexe du Règlement Intérieur en lien <a class='underline cursor-pointer' href='https://aile31.fr/divers/documents/activites2024v2.pdf#%5B%7B%22num%22%3A652%2C%22gen%22%3A0%7D%2C%7B%22name%22%3A%22XYZ%22%7D%2C51.15%2C451.139%2C0%5D'>ici</a></p>

        ",
        "activites"=> [
            [
                "titre" => "Prochain voyage",
               
            ],

        ]

    ]
        ];

$salleEtHeure = false; // variable pour savoir si on affiche les salles et heures

?>