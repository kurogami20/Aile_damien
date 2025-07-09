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

?>

<!-- partie menu secondaire (sur le côté) -->
    <!-- bouton d'ouverture -->
    <div class="text-center fixed z-9">
    <button class="text-xl border border-[#ffbe45] border-2 w-fit  p-2 rounded-full cursor-pointer " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
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
                    <?php if ( htmlspecialchars($type['type'])!== $activiteTypes[0]['type'] ){?>
                    <a href="#<?= htmlspecialchars($type['type']) ?>" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  ">
                    <?php } else { ?>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  ">   
                    <?php } ?>
                    <span class="ms-3 capitalize"><?= htmlspecialchars($type['type']) ?> </span>
                    </a>
                    <!-- on vérifie si un type a plusieurs activité -->
                    <?php if (isset($type['activites']) && !empty($type['activites']))  {?>
                    <ul class="hidden group-hover:block border-l-2 border-[#ffbe45] ">
                        <!-- si un type a plusieurs activité, on boucle sur les activités de chaque type pour créer le sous-menu -->
                        <?php foreach ($type['activites'] as $activite) : ?>
                        <li>
                            <a href="#<?= htmlspecialchars($activite) ?>" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  group">
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
<!-- fin de la partie menu secondaire (sur le côté) -->

<!-- partie contenu de la page-->
    <!-- le contenu de chaque élément est généré via un fichier php de données, le fichier php est défini ici './utils/routerActiviteIndex.php' -->
    <section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center relative">
        <!-- affichage du titre de la page -->
        <h2 class="text-5xl text-center capitalize font-bold z-3"><?= $titrePage ?></h2>
        <!-- affichage de l'illustration de la page -->
        <img class="w-[40%] fixed z-1" src="<?= $illustrationActivite ?>" alt="">
        <!-- on boucle sur les informations des activités pour afficher chaque section -->
        <?php foreach ($activiteInfo as $info) : ?>
            <section class="flex flex-col gap-15 w-full z-3">
                <!-- affichage du titre de la section -->
                <h3 class="text-3xl capitalize font-bold" id="<?= htmlspecialchars($info['titre']) ?>">
                    <?= htmlspecialchars($info['titre']) ?>
                </h3>
                <div class="flex flex-col gap-10">
                    <!-- on boucle sur les activités de chaque section pour afficher chaque activité dans un article -->
                    <?php foreach ($info['activites'] as $activite) : ?>
                        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 justify-center w-[800px] odd:items-start even:items-end odd:self-start even:self-end odd:text-left even:text-right">
                            <!-- on affiche le nom de l'activité -->
                             <!-- ici il est possible de mettre h1 car le contenu est dans un article -->
                            <h1 class="title text-2xl font-bold" id="<?= htmlspecialchars($activite['titre']) ?>">
                                <?= htmlspecialchars($activite['titre']) ?>
                            </h1>
                            <div class="card-content flex flex-col items-stretch gap-4">
                                <!-- on affiche la description de l'activité -->
                                <p class="text-lg"><?= htmlspecialchars($activite['description']) ?></p>
                                <!-- on vérifie si un utilisateur est connecté, si oui on affiche la div suivante -->
                                <?php if (isset($_SESSION['login'])) : ?>
                                    <div class="flex flex-col gap-3">
                                        <details>
                                            <summary>
                                                <h3 class="text-xl font-semibold">Les animateurs/rices</h3>
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
                                                                <!-- on affiche les informations de l'animateur dans un tableau -->
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
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                    <!-- on augmente $globalIndex de 1 ce qui permet de passer à un nouvel animateur-->
                                                    <?php $globalIndex++; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </details>
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
</script>