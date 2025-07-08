<?php 
require_once './utils/routerActiviteIndex.php';
require_once './backend/models/dataMapper.php';
$animateur = getAnimFromActivity($activiteId);
$globalIndex = 0;
?>

<!-- drawer init and show -->
<div class="text-center fixed">
   <button class="text-4xl border border-[#ffbe45] border-2 w-18 h-18 p-2 rounded-full cursor-pointer " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
   <i class="fa-solid fa-bars text-[#ffbe45] "></i>
   </button>
</div>

<!-- drawer component -->
<div id="drawer-navigation" class=" fixed top-0 mt-[152px] h-screen   z-40 w-64 p-4  transition-transform -translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-black uppercase ">Activités</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
    <?php foreach ($activiteTypes as $type) : ?>
            <li class="group" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation">
                <?php if ( htmlspecialchars($type['type'])!== $activiteTypes[0]['type'] ){?>
                <a href="#<?= htmlspecialchars($type['type']) ?>" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  ">
                <?php } else { ?>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  ">   
                <?php } ?>
                <span class="ms-3 capitalize"><?= htmlspecialchars($type['type']) ?> </span>
                </a>
                <ul class="hidden group-hover:block border-l-2 border-[#FFBE45] ">
                    <?php foreach ($type['activites'] as $activite) : ?>
                    <li>
                        <a href="#<?= htmlspecialchars($activite) ?>" class="flex items-center p-2 text-gray-900 rounded-lg  hover:bg-[#FFBE45]/40  group">
                            <span class="ms-5"><?= htmlspecialchars($activite) ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center">

<h2 class="text-5xl text-center capitalize font-bold"><?= $titrePage?></h2>
  
        <?php ; foreach ($activiteInfo as $info) : ;?>
            <section class="flex flex-col gap-15  w-full">
                <h3 class="text-3xl capitalize font-bold " id="<?= htmlspecialchars($info['titre']) ?>"><?= htmlspecialchars($info['titre']) ?></h3>
                <div class="flex flex-col gap-10">
                <?php foreach ($info['activites'] as $activite) : ?>
                    <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3  justify-center w-[800px] odd:items-start even:items-end odd:self-start even:self-end"> 
                        <h2 class="title text-2xl font-bold"id="<?= htmlspecialchars($activite['titre']) ?>" class="text-xl font-semibold mb-2"><?= htmlspecialchars($activite['titre']) ?></h2>
                        <div class="card-content flex flex-col items-center gap-3">
                            <p class="text-lg "><?= htmlspecialchars($activite['description']) ?></p>
                            <?php  if( is_array($activite['animateur'])){?>
                            <div class="animateur flex flex-col items-center gap-2">
                                <h3 class="text-xl font-semibold">Animateur(s) :</h3>
                                <?php foreach ($activite['animateur'] as $anim) : ?>
                                    <div class="animateur-info flex flex-col items-center">
                                        <p class="text-lg"><?= htmlspecialchars($anim['anim_nom']) ?> <?= htmlspecialchars($anim['anim_prenom']) ?></p>
                                        <p class="text-sm">Tél : <?= htmlspecialchars($anim['anim_telmob']) ?></p>
                                        <p class="text-sm">Email : <?= htmlspecialchars($anim['anim_boitemail']) ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                                    <?php } else { 
                                        $animateur 
                                         ?>
                                        <div class="animateur flex flex-col items-center gap-2">
                                            <h3 class="text-xl font-semibold">Animateur(s) :</h3>
                                            <?php if(isset($animateur[$globalIndex]) && !empty($animateur[$globalIndex])){ ?>
                                            <?php foreach ($animateur[$globalIndex] as $anim) : ?>
                                                <div class="animateur-info flex flex-col items-center">
                                                    <p class="text-lg"><?= htmlspecialchars($anim['anim_nom']) ?> <?= htmlspecialchars($anim['anim_prenom']) ?></p>
                                                    <p class="text-sm">Tél : <?= htmlspecialchars($anim['anim_telmob']) ?></p>
                                                    <p class="text-sm">Email : <?= htmlspecialchars($anim['anim_boitemail']) ?></p>
                                                </div>
                                            <?php endforeach; ?>
                                            <?php $globalIndex++; ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                        </div>
                    </article>
                         
                        <?php endforeach; ?>
                        </div>
                    </section>
        <?php endforeach; ?>
 
   
</section>

<script>
   
</script>