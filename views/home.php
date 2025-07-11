<?php

if($_SESSION['login']) {
  
?>
<!-- html pour adhérents -->
<section class="flex flex-col gap-4 p-4 px-40">
<h2 class="text-5xl text-center capitalize font-bold z-3">à la une</h2>
<section class="flex flex-col gap-15 w-full ">
    <?php require_once './backend/models/dataMapper.php'?>
    <?php $array = getHomePageEvent();?>
    <?php if($array): ?>
        <?php foreach ($array as $event): ?>
         <article class="flex flex-col  gap-5  ">
            <?php
            // Tableau de traduction des jours et mois en français
            $jours = array('Sunday'=>'Dimanche','Monday'=>'Lundi','Tuesday'=>'Mardi','Wednesday'=>'Mercredi','Thursday'=>'Jeudi','Friday'=>'Vendredi','Saturday'=>'Samedi');
            $mois = array('January'=>'janvier','February'=>'février','March'=>'mars','April'=>'avril','May'=>'mai','June'=>'juin','July'=>'juillet','August'=>'août','September'=>'septembre','October'=>'octobre','November'=>'novembre','December'=>'décembre');

            // Création de la date
            $date = date_create(htmlspecialchars($event["date_EVEN"], ENT_QUOTES | ENT_SUBSTITUTE));
            $jour_en = date_format($date, 'l');
            $mois_en = date_format($date, 'F');
            $jour_fr = isset($jours[$jour_en]) ? $jours[$jour_en] : $jour_en;
            $mois_fr = isset($mois[$mois_en]) ? $mois[$mois_en] : $mois_en;
            $date_fr = $jour_fr . ' ' . date_format($date, 'd') . ' ' . $mois_fr;
            ?>
            <h1 class="title text-2xl font-bold">
                <?= utf8_decode(htmlspecialchars($event["titre"], ENT_QUOTES | ENT_SUBSTITUTE,"ISO-8859-15")) ?>
                <?= $date_fr ?>
            </h1>
            <div class="content flex gap-5 border-t border-[#ffbe46] ">
                <img src=<?=htmlspecialchars($event["image1"])?> alt="" class="w-[600px] h-96 object-cover rounded-lg">
                <p class="text-lg"><?=utf8_decode( htmlspecialchars($event["texte"], ENT_QUOTES | ENT_SUBSTITUTE)) ?></p>
            </div>
         </article>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-lg text-center">Aucun événement à afficher pour le moment.</p>
    <?php endif; ?>
</section>

</section>

   
<?php } else {
    
    ?>
    <!-- html pour visiteur -->

    <section class="flex flex-col p-4 px-40">
<section class=" p-10 flex flex-col items-center justify-center gap-10 border border-[#ffbe46] rounded-lg shadow-sm   bg-white  ">
       
    <p class="text-lg text-center ">
       

    Bienvenue sur le site de l’association AILE. Depuis 2001, AILE réunit dans un esprit de bénévolat et de convivialité les habitants de Cugnaux, Frouzins, Seysses et Villeneuve-Tolosane autour d’activités de loisirs collectifs. La diversité de nos loisirs séduit petits et grands : sport, culture, détente ou ateliers créatifs, il y en a pour tous les goûts !

    </p>
    <button type="button" class=" w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">En savoir plus</button>
</section>

<section class="flex flex-col items-center justify-between gap-20 mt-20">
    <h2 class="text-5xl text-center capitalize font-bold">Nos activités</h2>
    <div class="grid sm:grid-cols-2  sm:gap-30 grid-cols-1 gap-10">
    <?php
     require_once 'data/activities.php';
     foreach ($activities as $activity): ?>
        
    <article class="flex border border-[#ffbe46] rounded-lg shadow-sm  bg-white   sm:h-100 sm:w-150 ">
        <div class="w-[100%] h-[100%] "><img class="object-cover w-[100%]! h-[100%]!  rounded-t-lg  md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="<?= htmlspecialchars($activity['image']) ?>" alt=""></div>
    
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> <?= htmlspecialchars($activity['title'])?>  </h2>
        <p class="mb-3 font-normal text-gray-700 "><?= htmlspecialchars($activity['description'])?></p>
        <button type="button" class="self-end w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">En savoir plus</button>
    </div>
    
    </article>    
    <?php endforeach; ?>

    </div>
</section>

<section class="mt-20 p-10 flex flex-col items-center justify-center gap-10 border border-[#ffbe46] rounded-lg shadow-sm   bg-white  ">
    <div class="flex flex-col items-center gap-5 ">
    <h3 class="text-3xl  mb-1">Vous n'êtes pas adhérents ?</h3>
        <p class="text-lg">Vous pouvez adhérer à l'association en remplissant le formulaire d'adhésion.</p>

        <a href="/index.php?page=adherer" > <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2" >Adhérer</button></a>
    </div>
</section>
</section>
<?php 
}
?>
