<?php 
   

    // on appelle le fichier de récuperation des données des activités (animateur et plannings)
    require_once './backend/models/dataMapper.php';

   

 $poles = getPoles();
  
?>

<!-- partie menu secondaire (sur le côté) -->
    <!-- bouton d'ouverture -->
    <div class="text-center fixed z-9">
    <button class="text-xl border border-[#ffbe45] border-2 w-fit  p-2 rounded-full cursor-pointer " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    <!-- <i class="fa-solid fa-bars text-[#ffbe45] "></i> --> Menu des pôles
    </button>
    </div>

    <!-- menu sur le côté -->
    <div id="drawer-navigation" class=" fixed top-0 mt-[152px] h-screen   z-40 w-64 p-4  transition-transform -translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-black uppercase ">Pôles d'activités</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close menu</span>
            </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
            <!-- on boucle sur les types d'activités pour créer le menu, les types d'activités sont récupérés depuis un fichier de données php, le fichier est défini par './utils/routerActiviteIndex.php' -->
        <?php foreach ($poles as $pole) : ?>
                <li class="group" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation">
                    <a href="#<?= htmlspecialchars($pole['nompole']) ?>" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  ">
                    <span class="ms-3 capitalize"><?= htmlspecialchars($pole['nompole']) ?> </span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<!-- fin de la partie menu secondaire (sur le côté) -->

<!-- partie contenu de la page-->
    <!-- le contenu de chaque élément est généré via un fichier php de données, le fichier php est défini ici './utils/routerActiviteIndex.php' -->
    <section class="flex flex-col p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2 h-[100%] gap-20 items-center relative">
        <!-- affichage du titre de la page -->
        <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3">pôles d'activités</h2>
        <!-- affichage de l'illustration de la page -->
        <img class="w-[40%] fixed z-1" src="" alt="">
        <!-- on boucle sur les informations des activités pour afficher chaque section -->
        <?php foreach ($poles as $pole) : ?>
            <section class="flex flex-col gap-15 w-full z-3 items-center sm:odd:items-start sm:even:items-end sm:odd:self-start sm:even:self-end sm:odd:text-left sm:even:text-right">
                <div class="flex flex-col gap-10">
                    <article class="card border  border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 items-center  flex flex-col gap-3 justify-center  w-full">
                        <!-- on affiche le nom du pôle-->
                        <!-- ici il est possible de mettre h1 car le contenu est dans un article -->
                        <h1 class="title text-lg sm:text-2xl font-bold" id="<?= htmlspecialchars($pole['nompole']) ?>">
                            <?= htmlspecialchars($pole['nompole']) ?>
                        </h1>
                        <div class="card-content flex flex-col items-stretch gap-4">
                            <!-- on affiche la description du pôle -->
                            <div class="text-base sm:text-lg flex flex-col gap-3"><?= html_entity_decode($pole['texte1']) ?></div>
                            <?php if (!empty($pole['texte2'])) : ?>
                                <div class="text-base sm:text-lg flex flex-col gap-1"><?= html_entity_decode($pole['texte2']) ?></div>
                            <?php endif; ?>
                            <!-- on vérifie si un utilisateur est connecté, si oui on affiche la div suivante -->
                            <?php if (isset($pole['libelle_lien1'])){?>
                            <div class="flex flex-col gap-2">
                                <a href="<?= htmlspecialchars($pole['lien1']) ?>" class="text-[#ffbe45] hover:underline text-base sm:text-lg font-semibold">
                                    <?= htmlspecialchars($pole['libelle_lien1']) ?>
                                </a>
                            </div>
                            <?php } ?>
                            <?php if (isset($pole['libelle_lien2'])){?>
                            <div class="flex flex-col gap-2">
                                <a href="<?= htmlspecialchars($pole['lien2']) ?>" class="text-[#ffbe45] hover:underline text-base sm:text-lg font-semibold">
                                    <?= htmlspecialchars($pole['libelle_lien2']) ?>
                                </a>
                            </div>
                            <?php } ?>
                            <?php if (isset($pole['libelle_lien3'])){?>
                            <div class="flex flex-col gap-2">
                                <a href="<?= htmlspecialchars($pole['lien3']) ?>" class="text-[#ffbe45] hover:underline text-base sm:text-lg font-semibold">
                                    <?= htmlspecialchars($pole['libelle_lien3']) ?>
                                </a>
                            </div>
                            <?php } ?>
                            <?php if ($pole['mail1']){?>
                            <p class="text-base sm:text-lg">Mail direct: <a href="mailto:<?= htmlspecialchars($pole['mail1'])?>"><?= htmlspecialchars($pole['mail1'])?></a> </p>     
                            <?php } ?>
                            <?php if ($pole['mail2']){?>
                            <p class="text-base sm:text-lg">Mail direct: <a href="mailto:<?= htmlspecialchars($pole['mail2'])?>"><?= htmlspecialchars($pole['mail2'])?></a> </p>     
                            <?php } ?>
                            <?php if ($pole['mail3']){?>
                            <p class="text-base sm:text-lg">Mail direct: <a href="mailto:<?= htmlspecialchars($pole['mail3'])?>"><?= htmlspecialchars($pole['mail3'])?></a> </p>     
                            <?php } ?>
                        </div>
                    </article>
                    
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