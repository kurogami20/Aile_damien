<?php 
    // on appelle le fichier router pour récupérer les données des activités
    require_once './utils/routerActiviteIndex.php';

    // on appelle le fichier de récuperation des données des activités (animateur et plannings)
    require_once './backend/models/dataMapper.php';

    // on récupère les données animateur des activités sous la forme d'un tableau
    // $activiteId est un tableau contenant les id des activités
    $animateur = getAnimFromActivity($activiteId);

    // on défini un index global pour parcourir $animateur
    $globalIndex = 0;
    $planningIndex = 0;

?>

<!-- partie menu secondaire (sur le côté) -->
    <!-- bouton d'ouverture -->
     <?php if ($titrePage !== "Festivités"){?>
    <div class="text-center max-sm:mt-[42px] fixed z-9">
    <button class="text-sm sm:text-xl border border-[#ffbe45] border-2 w-fit  p-2 rounded-full cursor-pointer bg-[#fff6ed] " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    <!-- <i class="fa-solid fa-bars text-[#ffbe45] "></i> --> Menu activités
    </button>
    </div>
   
    <!-- menu sur le côté -->
    <div id="drawer-navigation" class=" fixed top-0 mt-[152px] h-screen   z-40 w-64 p-4  transition-transform -translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-black uppercase ">Activités</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
            <!-- on boucle sur les types d'activités pour créer le menu, les types d'activités sont récupérés depuis un fichier de données php, le fichier est défini par './utils/routerActiviteIndex.php' -->
        <?php foreach ($activiteTypes as $type) : ?>
                <li class="group" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation">
                    <a href="#<?= htmlspecialchars($type['type']) ?>" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  ">
                    <span class="ms-3 capitalize"><?= htmlspecialchars($type['type']) ?> </span>
                    </a>
                    <!-- on vérifie si un type a plusieurs activité -->
                    <?php if (isset($type['activites']) && !empty($type['activites']))  {?>
                        <ul class="max-h-0 opacity-0 scale-y-75 overflow-hidden transform transition-all duration-[2000ms] ease-in-out origin-top group-hover:max-h-[1000px] group-hover:opacity-100 group-hover:scale-y-100 border-l-2 border-[#ffbe45]">
                            <?php foreach ($type['activites'] as $activite) : ?>
                            <li>
                                <a href="#<?= htmlspecialchars($activite) ?>" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-[#FFBE45]/40 group">
                                    <span class="ms-5"><?= htmlspecialchars($activite) ?></span>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                    <?php } ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php } ?>
<!-- fin de la partie menu secondaire (sur le côté) -->

<!-- partie contenu de la page-->
    <!-- le contenu de chaque élément est généré via un fichier php de données, le fichier php est défini ici './utils/routerActiviteIndex.php' -->
    <section class="flex flex-col sm:p-4 sm:px-40 h-[100%] gap-20 items-center relative">
        <!-- affichage du titre de la page -->
        <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3"><?= $titrePage ?></h2>
        <!-- affichage de l'illustration de la page -->
        <img class="w-[30rem] top-[50vh]  fixed z-1" src="<?= $illustrationActivite ?>" alt="">
        <!-- on boucle sur les informations des activités pour afficher chaque section -->
        <?php foreach ($activiteInfo as $info) : ?>
            <section class="flex flex-col gap-15 w-full z-3 ">
                <!-- affichage du titre de la section -->
                <h3 class="text-2xl sm:text-3xl capitalize font-bold" id="<?= htmlspecialchars($info['titre']) ?>">
                    <?= htmlspecialchars($info['titre']) ?>
                </h3>
                <div class="flex flex-col gap-10">
                    <!-- on boucle sur les activités de chaque section pour afficher chaque activité dans un article -->
                    <?php foreach ($info['activites'] as $activite) : ?>
                        <?php if ($titrePage !== "Festivités"){?>
                        <article class="card border border-[#ffbe46]  rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 justify-center w-fit sm:w-[800px]  sm:odd:items-start sm:even:items-end sm:odd:self-start sm:even:self-end sm:odd:text-left sm:even:text-right">
                        <?php } else { ?>
                        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 justify-center w-fit sm:w-[800px] ">
                            <?php } ?>
                            <!-- on affiche le nom de l'activité -->
                            <!-- ici il est possible de mettre h1 car le contenu est dans un article -->
                            <h1 class="title text-xl sm:text-2xl font-bold" id="<?= htmlspecialchars($activite['titre']) ?>">
                                <?= htmlspecialchars($activite['titre']) ?>
                            </h1>
                            <div class="card-content flex flex-col items-stretch gap-4 w-full">
                                <!-- on affiche la description de l'activité -->
                                <div class="text-base! sm:text-lg flex flex-col gap-1"><?= html_entity_decode($activite['description']) ?></div>
                                <!-- on vérifie si un utilisateur est connecté, si oui on affiche la div suivante -->
                                <?php if (isset($_SESSION['login'])) : ?>
                                    <div class="flex flex-col gap-5">
                                        <?php if($salleEtHeure) {?>
                                        <?php $horaireSalle = getHourAndRoomForActivity($activiteIdForPlanning) ?>    
                                        <div>
                                            <h3 class=" text-lg sm:text-xl  font-semibold">Planning</h3>
                                            <table class="text-sm text-gray-500 w-full">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3">Jour</th>
                                                        <th scope="col" class="px-6 py-3">Heure</th>
                                                        <th scope="col" class="px-6 py-3">Salle</th>
                                                    </tr>
                                                </thead>
                                                <?php if(is_array($activite['planning'])){?>
                                                <tbody>
                                                    <?php foreach ($activite['planning'] as $horaire) : ?>
                                                        <tr class="bg-white border-b border-gray-200">
                                                            <td class="px-6 py-4"><?= htmlspecialchars($horaire['activite_jour']) ?></td>
                                                            <td class="px-6 py-4"><?= htmlspecialchars($horaire['activite_horaire']) ?></td>
                                                            <td class="px-6 py-4"><?= htmlspecialchars($horaire['salle_nom']) ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <?php } else { ?>
                                                <tbody>
                                                  
                                                    <?php if (is_array($horaireSalle[$planningIndex]) && isset($horaireSalle[$planningIndex][0]) && is_array($horaireSalle[$planningIndex][0])) { ?>
                                                    <?php foreach ($horaireSalle[$planningIndex] as $horaire) : ?>
                                                        <?php if(!empty($horaire['activite_jour']) && !empty($horaire['activite_horaire']) && !empty($horaire['salle_nom'])) { ?>
                                                            <tr class="bg-white border-b border-gray-200">
                                                                <td class="px-6 py-4"><?= htmlspecialchars($horaire['activite_jour']) ?></td>
                                                                <td class="px-6 py-4"><?= htmlspecialchars($horaire['activite_horaire']) ?></td>
                                                                <td class="px-6 py-4"><?= htmlspecialchars($horaire['salle_nom']) ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                        <?php } else {?>
                                                        <tr class="bg-white border-b border-gray-200">
                                                            <td class="px-6 py-4"><?= htmlspecialchars($horaireSalle[$planningIndex]['activite_jour']) ?></td>
                                                            <td class="px-6 py-4"><?= htmlspecialchars($horaireSalle[$planningIndex]['activite_horaire']) ?></td>
                                                            <td class="px-6 py-4"><?= htmlspecialchars($horaireSalle[$planningIndex]['salle_nom']) ?></td>
                                                        </tr>
                                                            <?php } ?>
                                                    <?php $planningIndex++; ?>
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                            <?php if ($horaireSalle['date_reprise'] && $horaireSalle['date_fin'] > date('Y-m-d')) { ?>
                                            <p class="text-base sm:text-lg text-gray-500 mt-2">Date de reprise : <?= htmlspecialchars($horaireSalle['date_reprise']) ?></p>
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                        <?php if ($titrePage !== "Festivités"){?>
                                        <details >
                                            <summary class="cursor-pointer list-none">
                                                <h3 class="sm:text-xl text-lg font-semibold"><i class="fa-solid fa-angle-down"></i> Les animateurs/rices</h3>
                                            </summary>
                                            <!-- on vérifie si des animateurs sont défini dans un tableau du fichier d'information php des activité-->
                                            <?php if (is_array($activite['animateur'])) : ?>
                                                <table class="text-sm text-gray-500 w-full">
                                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">Nom</th>
                                                            <th scope="col" class="px-6 py-3">Prénom</th>
                                                            <th scope="col" class="px-6 py-3">Téléphone</th>
                                                            <th scope="col" class="px-6 py-3">Mail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- on boucle sur les animateurs de l'activité pour afficher leurs informations -->
                                                        <?php foreach ($activite['animateur'] as $anim) : ?>
                                                            <!-- on vérifie si les informations de l'animateur sont définies et non vides -->
                                                            <?php if (!empty($anim['anim_nom']) && !empty($anim['anim_prenom']) && (!empty($anim['anim_telmob']) || !empty($anim['anim_telfixe']))) : ?>
                                                                <tr class="bg-white border-b border-gray-200">
                                                                    <td class="px-6 py-4"><?= htmlspecialchars($anim['anim_nom']) ?></td>
                                                                    <td class="px-6 py-4"><?= htmlspecialchars($anim['anim_prenom']) ?></td>
                                                                    <!-- on vérifie si le numéro de téléphone mobile est défini, sinon on affiche le numéro de téléphone fixe -->
                                                                    <td class="px-6 py-4"><?= !empty($anim['anim_telmob']) ? htmlspecialchars($anim['anim_telmob']) : htmlspecialchars($anim['anim_telfixe']) ?></td>
                                                                    <td class="px-6 py-4"><?= htmlspecialchars($anim['anim_boitemail']) ?></td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            <!-- si il n'y a pas de tableau d'animateur défini on récupère les information de la base de données ($animateur) -->
                                            <?php else : ?>
                                                <!-- on vérifie si des données existent -->
                                                <?php if (isset($animateur[$globalIndex]) && !empty($animateur[$globalIndex])) : ?>
                                                   
                                                    <table class="text-sm text-gray-500 w-full">
                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                            <tr>
                                                                <th scope="col" class="px-6 py-3">Nom</th>
                                                                <th scope="col" class="px-6 py-3">Prénom</th>
                                                                <th scope="col" class="px-6 py-3">Téléphone</th>
                                                                <th scope="col" class="px-6 py-3">Mail</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- on affiche les données des animateur via une boucle, les animateurs changent grâce à $globalIndex (un nombre), cela est possible car $animateur renvoie un tableau de tableau d'animateur -->
                                                            <?php foreach ($animateur[$globalIndex] as $anim) : ?>
                                                                <!-- on vérifie si les informations de l'animateur sont définies et non vides -->
                                                                <?php if (!empty($anim['anim_nom']) && !empty($anim['anim_prenom']) && (!empty($anim['anim_telmob']) || !empty($anim['anim_telfixe']))) : ?>
                                                                    <tr class="bg-white border-b border-gray-200">
                                                                        <td class="px-6 py-4"><?= htmlspecialchars($anim['anim_nom']) ?></td>
                                                                        <td class="px-6 py-4"><?= htmlspecialchars($anim['anim_prenom']) ?></td>
                                                                        <!-- on vérifie si le numéro de téléphone mobile est défini, sinon on affiche le numéro de téléphone fixe -->
                                                                        <td class="px-6 py-4"><?= !empty($anim['anim_telmob']) ? htmlspecialchars($anim['anim_telmob']) : htmlspecialchars($anim['anim_telfixe']) ?></td>
                                                                        <td class="px-6 py-4"><?= htmlspecialchars($anim['anim_boitemail']) ?></td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <?php if (is_array($anim)){?>
                                                                    <?php foreach ($anim as $anim2) : ?>
                                                                <!-- on vérifie si les informations de l'animateur sont définies et non vides -->
                                                                <?php if (!empty($anim2['anim_nom']) && !empty($anim2['anim_prenom']) && (!empty($anim2['anim_telmob']) || !empty($anim2['anim_telfixe']))) : ?>
                                                                    <tr class="bg-white border-b border-gray-200">
                                                                        <td class="px-6 py-4"><?= htmlspecialchars($anim2['anim_nom']) ?></td>
                                                                        <td class="px-6 py-4"><?= htmlspecialchars($anim2['anim_prenom']) ?></td>
                                                                        <!-- on vérifie si le numéro de téléphone mobile est défini, sinon on affiche le numéro de téléphone fixe -->
                                                                        <td class="px-6 py-4"><?= !empty($anim2['anim_telmob']) ? htmlspecialchars($anim2['anim_telmob']) : htmlspecialchars($anim2['anim_telfixe']) ?></td>
                                                                        <td class="px-6 py-4"><?= htmlspecialchars($anim2['anim_boitemail']) ?></td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                <?php }?>    
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                    <!-- on augmente $globalIndex de 1 ce qui permet de passer à un nouvel animateur-->
                                                    <?php $globalIndex++; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </details>
                                        <?php } ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </section>
<!-- fin de la partie contenu de la page-->

<!-- script pour mettre les éléments appelé par le menu secondaire au millieu de la page-->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const rawHash = this.getAttribute('href');
      const id = decodeURIComponent(rawHash).substring(1); // remove '#'
      const target = document.getElementById(id);
      if (target) {
        const offset = target.getBoundingClientRect().top + window.scrollY;
        const centerOffset = offset - (window.innerHeight / 2) + (target.offsetHeight / 2);
        window.scrollTo({
          top: centerOffset,
          behavior: 'smooth'
        });
      }
    });
});
    document.addEventListener("DOMContentLoaded", function () {
  const redElements = document.querySelectorAll(".red");
  redElements.forEach(function (element) {
    element.style.color = "red";
  });
});

console.log(<?= json_encode($horaireSalle) ?>);
</script>