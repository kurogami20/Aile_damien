<?php 
    // on appelle le fichier router pour récupérer les données des activités
    require_once './utils/routerActiviteIndex.php';

    // on appelle le fichier de récuperation des données des activités (animateur et plannings)
    require_once './backend/models/dataMapper.php';

   $allGap = getGapInfo();

?>
<!-- partie menu secondaire (sur le côté) -->
    <!-- bouton d'ouverture -->
    <?php if ($titrePage !== "Festivités"){?>
    <div class="text-center max-sm:mt-[42px] fixed z-9">
    <button class="text-sm sm:text-xl border border-[#ffbe45] border-2 w-fit  p-2 rounded-full cursor-pointer bg-[#fff6ed] " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    <!-- <i class="fa-solid fa-bars text-[#ffbe45] "></i> --> Menu tourisme
    </button>
    </div>
   
    <!-- menu sur le côté -->
    <div id="drawer-navigation" class=" fixed top-0 mt-[103px] min-[1480px]:mt-[154px]  h-screen   z-40 w-64 p-4  transition-transform -translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-navigation-label">
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
                        <ul class="  min-[1200px]:max-h-0 min-[1200px]:opacity-0 min-[1200px]:scale-y-75 min-[1200px]:overflow-hidden transform transition-all duration-[2000ms] ease-in-out origin-top min-[1200px]:group-hover:max-h-[1000px] min-[1200px]:group-hover:opacity-100 min-[1200px]:group-hover:scale-y-100 border-l-2 border-[#ffbe45]">
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
    <section class="flex flex-col p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2 h-[100%] gap-20 items-center relative">
        <!-- affichage du titre de la page -->
        <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3"><?= $titrePage ?></h2>
        <!-- affichage de l'illustration de la page -->
        <img class="w-[30rem] top-[50vh]  fixed z-1" src="<?= $illustrationActivite ?>" alt="">
        <!-- on boucle sur les informations des activités pour afficher chaque section -->
        <?php foreach ($activiteInfo as $info) : ?>
            <section class="flex flex-col gap-15 w-full z-3">
                <!-- affichage du titre de la section -->
                <h3 class="text-2xl sm:text-3xl capitalize font-bold" id="<?= htmlspecialchars($info['titre']) ?>">
                    <?= htmlspecialchars($info['titre']) ?>
                </h3>
                <div class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 sm:justify-center text-base sm:h-full h-150 overflow-scroll"><?= html_entity_decode($info['description']) ?></div>
                <div class="flex flex-col gap-10">
                    <!-- on boucle sur les activités de chaque section pour afficher chaque activité dans un article -->
                    <?php foreach ($info['activites'] as $activite) : ?>
                        <?php if ($activite['titre'] === "Calendrier"){?>
                        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 justify-center w-full min-[1000px]:odd:items-start  min-[1000px]:even:items-end  min-[1000px]:odd:self-start  min-[1000px]:even:self-end  min-[1000px]:odd:text-left  min-[1000px]:even:text-right">
                        <?php } else { ?>
                            <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 justify-center w-full min-[850px]:w-[950px]  min-[1000px]:odd:items-start  min-[1000px]:even:items-end  min-[1000px]:odd:self-start  min-[1000px]:even:self-end  min-[1000px]:odd:text-left  min-[1000px]:even:text-right">
                        <?php } ?>
                            <!-- on affiche le nom de l'activité -->
                             <!-- ici il est possible de mettre h1 car le contenu est dans un article -->
                            <h1 class="title text-2xl font-bold" id="<?= htmlspecialchars($activite['titre']) ?>">
                                <?= htmlspecialchars($activite['titre']) ?>
                            </h1>
                            <div class="card-content flex flex-col items-stretch gap-4 w-full">
                                <!-- on affiche la description de l'activité -->
                                <?php if (isset($activite['description']) && !empty($activite['description'])) : ?>
                                <div class="text-base! sm:text-lg flex flex-col gap-1"><?= html_entity_decode($activite['description']) ?></div>
                                <?php endif; ?>
                                <!-- on vérifie si un utilisateur est connecté, si oui on affiche la div suivante -->
                                <div class="relative overflow-x-auto">
                                    <table class="text-sm text-gray-500 w-full">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Date</th>
                                                <th scope="col" class="px-6 py-3">Description</th>
                                                <th scope="col" class="px-6 py-3">Contact</th>
                                                <?php if ($activite['titre'] === "Calendrier"){?>
                                                <th scope="col" class="px-6 py-3">Catégorie</th>
                                                <?php } ?>
                                                <th scope="col" class="px-6 py-3">En savoir plus</th>
                                            </tr>
                                        </thead>
                                        <?php if ($activite['titre'] === "Calendrier"){?>
                                        <tbody>
                                            <?php if (isset($allGap) && !empty($allGap)) : ?>
                                            <?php foreach ($allGap as $gap) : ?>

                                            <tr class="bg-white border-b border-gray-200">
                                                <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>
                                                <td class="px-6 py-4"><?php if ($gap['activite']==="sej"){?>
                                                Séjour
                                                <?php } elseif ($gap['activite']==="jour"){?>
                                                Sortie journée
                                                <?php } elseif ($gap['activite']==="dim"){?>
                                                Sortie du dimanche
                                                <?php } elseif ($gap['activite']==="ven"){?>
                                                Sortie demi-journée
                                                <?php } elseif ($gap['activite']==="conf"){?>
                                                Conférences
                                                <?php }?></td>
                                                <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                                </tr>

                                                <?php endforeach; ?>
                                                <?php else: ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td colspan="5" class="px-6 py-4 text-center">Aucune information disponible</td>
                                            </tr>
                                        </tbody> 
                                        <?php endif; ?>

                                        <?php } elseif ($activite['titre'] === "Sorties demi-journée"){ ?>
                                        <tbody>
                                            <?php if (isset($allGap) && !empty($allGap)) : ?>
                                            <?php  $hasInfo = false; foreach ($allGap as $gap) : ?>
                                            <?php if ($gap['activite'] === "ven") : ?>
                                            <?php $hasInfo = true; ?>
                                                <tr class="bg-white border-b border-gray-200">
                                                <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>

                                                <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                            </tr>

                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?php if (!$hasInfo) : ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td colspan="5" class="px-6 py-4 text-center">Pas de sortie prévue</td>
                                            </tr> <?php endif; ?>
                                            <?php endif; ?>
                                        </tbody> 
                                        <?php } elseif ($activite['titre'] === "Sorties journée"){ ?>
                                        <tbody>
                                            <?php if (isset($allGap) && !empty($allGap)) : ?>
                                            <?php  $hasInfo = false; foreach ($allGap as $gap) : ?>
                                            <?php if ($gap['activite'] === "jour") : ?>
                                            <?php $hasInfo = true; ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                            <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>

                                            <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                            </tr>


                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?php if (!$hasInfo) : ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td colspan="5" class="px-6 py-4 text-center">Pas de sortie prévue</td>
                                            </tr> <?php endif; ?>
                                            <?php endif; ?>
                                        </tbody> 
                                        <?php } elseif ($activite['titre'] === "Sorties du dimanche"){ ?>
                                        <tbody>
                                            <?php if (isset($allGap) && !empty($allGap)) : ?>
                                            <?php  $hasInfo = false; foreach ($allGap as $gap) : ?>
                                            <?php if ($gap['activite'] === "dim") : ?>
                                            <?php $hasInfo = true; ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>

                                                <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                            </tr>


                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?php if (!$hasInfo) : ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td colspan="5" class="px-6 py-4 text-center">Pas de sortie prévue</td>
                                            </tr> <?php endif; ?>
                                            <?php endif; ?>
                                        </tbody> 
                                        <?php } elseif ($activite['titre'] === "Conférences"){ ?>
                                        <tbody>
                                        <?php if (isset($allGap) && !empty($allGap)) : ?>
                                        <?php $hasInfo = false; foreach ($allGap as $gap) : ?>
                                        <?php if ($gap['activite'] === "conf") : ?>
                                        <?php $hasInfo = true; ?>
                                        <tr class="bg-white border-b border-gray-200">
                                            <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                            <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                            <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>
                                            <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if (!$hasInfo) : ?>
                                        <tr class="bg-white border-b border-gray-200">
                                            <td colspan="5" class="px-6 py-4 text-center">Pas de sortie prévue</td>
                                        </tr>
                                        <?php endif; ?>

                                        <?php endif; ?>
                                        </tbody> 
                                        <?php } elseif ($activite['titre'] === "Séjours"){ ?>
                                        <tbody>
                                        <?php if (isset($allGap) && !empty($allGap)) : ?>
                                        <?php  $hasInfo = false; foreach ($allGap as $gap) : ?>
                                        <?php if ($gap['activite'] === "sej") : ?>
                                        <?php $hasInfo = true; ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>

                                                <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                            </tr>


                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if (!$hasInfo) : ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td colspan="5" class="px-6 py-4 text-center">Pas de sortie prévue</td>
                                            </tr> <?php endif; ?>
                                        <?php endif; ?>
                                        </tbody> 
                                        <?php } elseif ($activite['titre'] === "Prochain voyage"){ ?>
                                        <tbody>
                                        <?php if (isset($allGap) && !empty($allGap)) : ?>
                                        <?php  $hasInfo = false;  foreach ($allGap as $gap) : ?>
                                        <?php if ($gap['activite'] === "voy") : ?>
                                        <?php $hasInfo = true; ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td class="px-6 py-4"><?= htmlspecialchars($gap['dateinformation']) ?> </td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['titreinformation']) ?>-<?= htmlspecialchars($gap['soustitreinformation']) ?></td>
                                                <td class="sm:px-6 py-4"><?= htmlspecialchars($gap['contactinformation']) ?></td>

                                                <td class="px-6 py-4"> <a class="underline " href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($gap['id']) ?>">En savoir plus</a></td>
                                            </tr>


                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php if (!$hasInfo) : ?>
                                            <tr class="bg-white border-b border-gray-200">
                                                <td colspan="5" class="px-6 py-4 text-center">Pas de voyage prévu</td>
                                            </tr> <?php endif; ?>
                                        <?php endif; ?>
                                        </tbody> 
                                        <?php } ?>  
                                    </table>
                                </div>   
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </section>
<!-- fin de la partie contenu de la page-->


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

console.log(<?= json_encode($allGap) ?>);
</script>