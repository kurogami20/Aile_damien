<?php

if($_SESSION['login']) {
    // Tableau de traduction des jours et mois en français
    $jours = array('Sunday'=>'Dimanche','Monday'=>'Lundi','Tuesday'=>'Mardi','Wednesday'=>'Mercredi','Thursday'=>'Jeudi','Friday'=>'Vendredi','Saturday'=>'Samedi');
    $mois = array('January'=>'janvier','February'=>'février','March'=>'mars','April'=>'avril','May'=>'mai','June'=>'juin','July'=>'juillet','August'=>'août','September'=>'septembre','October'=>'octobre','November'=>'novembre','December'=>'décembre');

    // Création de la date
    function createDate($date) {
        global $jours, $mois;
         $date = date_create(htmlspecialchars($date, ENT_QUOTES | ENT_SUBSTITUTE));
         $jour_en = date_format($date, 'l');
         $mois_en = date_format($date, 'F');
         $jour_fr = isset($jours[$jour_en]) ? $jours[$jour_en] : $jour_en;
         $mois_fr = isset($mois[$mois_en]) ? $mois[$mois_en] : $mois_en;
         $date_fr = $jour_fr . ' ' . date_format($date, 'd') . ' ' . $mois_fr;
         return $date_fr;
    }
?>
<!-- boutons de gestion pour les admin -->

<?php if (($_SESSION['login'] == 'LOGIN0' OR $_SESSION['login'] == 'LOGIN1'  OR $_SESSION['login'] == 'LOGIN20') ) { ?>
<div class="text-center max-sm:mt-[42px] fixed z-9 right-3 flex flex-col gap-5 items-end">
    <button class="text-sm sm:text-xl border border-[#ffbe45] border-2 w-fit  p-2 rounded-full cursor-pointer bg-[#fff6ed] " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    Administration site
    </button>
    <button class="text-sm sm:text-xl border border-[#ffbe45] border-2 w-fit  p-2 rounded-full cursor-pointer bg-[#fff6ed] " type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    Base adhérents
    </button>
    </div>
<?php } ?>
<!-- html pour adhérents -->
 
<section class="flex flex-col gap-4 p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2">
    <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3">à la une</h2>
    <section class="flex flex-col gap-8 sm:gap-15 w-full ">
        <?php require_once './backend/models/dataMapper.php'?>
        <?php $array = getHomePageEvent();?>
        <?php if($array): ?>
            <?php foreach ($array as $event): ?>
            <article class="flex flex-col gap-4 sm:gap-5">
                <h1 class="title text-lg sm:text-2xl font-bold flex flex-col min-[1200px]:flex-row justify-between">
                    <?= htmlspecialchars($event["titreinformation"], ENT_QUOTES | ENT_SUBSTITUTE,"UTF-8") ?>
                <span class="font-normal text-base sm:text-xl"><?= $event["dateinformation"] ?></span>  
                </h1>
                <?php if($event["soustitreinformation"]):?>
                <h2 class="font-normal text-base sm:text-xl"><?= htmlspecialchars($event["soustitreinformation"], ENT_QUOTES | ENT_SUBSTITUTE,"UTF-8") ?></h2>
                <?php endif ?>
                <div class="content flex flex-col min-[1200px]:flex-row gap-4 sm:gap-5 border-t-2 border-[#ffbe46] rounded-l-lg justify-between">
                    <div class="flex flex-col min-[1200px]:flex-row gap-4 sm:gap-5">
                        <?php if($event["image1"]): ?>
                        <img src=<?='https://aile31.fr/'.htmlspecialchars($event["repertoire"]).'/images/'.htmlspecialchars($event["image1"])?> alt="" class="w-full min-[1200px]:w-[600px] h-40 sm:h-70 object-cover rounded-lg rounded-r-none">
                        <?php endif; ?>
                        <?php if($event["image1a"]): ?>
                        <img src=<?='https://aile31.fr/'.htmlspecialchars($event["repertoire"]).'/images/'.htmlspecialchars($event["image1a"])?> alt="" class="w-full min-[1200px]:w-[600px] h-40 sm:h-70 object-cover rounded-lg rounded-r-none">
                        <?php endif; ?>
                        <?php if($event["textetoutinformation"]): ?>
                        <div class="text-base sm:text-lg"><?=htmlspecialchars_decode($event["textetoutinformation"]) ?></div>
                        <?php endif; ?>
                        <?php if($event["texteinformation1"]): ?>
                        <div class="text-base sm:text-lg"><?=htmlspecialchars_decode($event["texteinformation1"]) ?></div>
                        <?php endif; ?>
                    </div>

                    <?php if($event["choix"]==="EVEN" ): ?>
                        <?php if($event["info2"]){?>
                        <a href="http://dam31270.free.fr/index.php?page=detailEvenement&id=<?= $event['id'] ?>" class="self-end w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-5 py-2.5 me-2 mb-2">En savoir plus</a>
                        <?php } ?>  
                <?php else: ?>
                <a href="http://dam31270.free.fr/index.php?page=detailsTourisme&id=<?= htmlspecialchars($event['id']) ?>" class="self-end w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-5 py-2.5 me-2 mb-2">En savoir plus</a>
                <?php endif; ?>
             
                </div>
            </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-base sm:text-lg text-center">Aucun événement à afficher pour le moment.</p>
        <?php endif; ?>
    </section>
</section>
<script>

    console.log(<?= json_encode(getHomePageEvent()) ?>);
    
</script>
   
<?php } else {
    
    ?>
<!-- html pour visiteur -->

<section class="flex flex-col p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2 h-[100%] gap-20 items-center relative">
    <section class="p-4 sm:p-10 flex flex-col items-center justify-center gap-6 sm:gap-10 border border-[#ffbe46] rounded-lg shadow-sm bg-white">
        <p class="text-base sm:text-lg text-center">
        Bienvenue sur le site de l’association AILE. Depuis 2001, AILE réunit dans un esprit de bénévolat et de convivialité les habitants de Cugnaux, Frouzins, Seysses et Villeneuve-Tolosane autour d’activités de loisirs collectifs. La diversité de nos loisirs séduit petits et grands : sport, culture, détente ou ateliers créatifs, il y en a pour tous les goûts !
        </p>
     <a href="/index.php?page=qui_sommes_nous">   <button type="button" class="cursor-pointer w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-5 py-2.5 me-2 mb-2">Découvrir l'association</button></a>
    </section>

    <section class="flex flex-col items-center justify-between gap-10 sm:gap-20 mt-10 sm:mt-20">
        <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold">Nos activités</h2>
        <div class="grid grid-cols-1 min-[1480px]:grid-cols-2 gap-6 sm:gap-30 w-full">
            <?php
                require_once 'data/activities.php';
                foreach ($activities as $activity): ?>
            <article class="flex flex-col min-[800px]:flex-row border border-[#ffbe46] rounded-lg shadow-sm bg-white h-auto min-[800px]:h-100 w-full min-[1480px]:w-150">
                <div class="w-full min-[800px]:w-[48%] h-40 min-[800px]:h-100">
                    <img class="object-cover w-full h-full rounded-t-lg sm:rounded-none sm:rounded-s-lg" src="<?= htmlspecialchars($activity['image']) ?>" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h1 class="mb-2 text-lg sm:text-2xl font-bold tracking-tight text-gray-900"><?= htmlspecialchars($activity['title'])?></h1>
                    <p class="mb-3 font-normal text-gray-700 text-base sm:text-lg"><?= htmlspecialchars($activity['description'])?></p>
                    <span class="flex flex-wrap gap-2 sm:gap-4">
                    <?php foreach ($activity['type'] as $type): ?>
                       <a href="<?= htmlspecialchars($type[1]) ?>"><button type="button" class="cursor-pointer self-end w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-5 py-2.5 me-2 mb-2"><?= htmlspecialchars($type[0]) ?></button></a>
                    <?php endforeach; ?>
                    </span>
                </div>
            </article>    
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mt-10 sm:mt-20 p-4 sm:p-10 flex flex-col items-center justify-center gap-6 sm:gap-10 border border-[#ffbe46] rounded-lg shadow-sm bg-white                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ">
        <div class="flex flex-col items-center gap-3 sm:gap-5">
            <h3 class="text-xl sm:text-3xl mb-1">Vous n'êtes pas adhérents ?</h3>
            <p class="text-base sm:text-lg">Vous pouvez adhérer à l'association en remplissant le formulaire d'adhésion.</p>
            <a href="/index.php?page=adherer">
                <button type="button" class="cursor-pointer self-end w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-5 py-2.5 me-2 mb-2">Adhérer</button>
            </a>
        </div>
    </section>
</section>
<?php 
}
?>
