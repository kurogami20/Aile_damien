<?php

if($_SESSION['login']) {
//     //   Tableau de traduction des jours et mois en français
//       $jours = array('Sunday'=>'Dimanche','Monday'=>'Lundi','Tuesday'=>'Mardi','Wednesday'=>'Mercredi','Thursday'=>'Jeudi','Friday'=>'Vendredi','Saturday'=>'Samedi');
//       $mois = array('January'=>'janvier','February'=>'février','March'=>'mars','April'=>'avril','May'=>'mai','June'=>'juin','July'=>'juillet','August'=>'août','September'=>'septembre','October'=>'octobre','November'=>'novembre','December'=>'décembre');
  
//     //   Création de la date
//       function createDate($date) {
//           global $jours, $mois;
//            $date = date_create(htmlspecialchars($date, ENT_QUOTES | ENT_SUBSTITUTE));
//            $jour_en = date_format($date, 'l');
//            $mois_en = date_format($date, 'F');
//            $jour_fr = isset($jours[$jour_en]) ? $jours[$jour_en] : $jour_en;
//            $mois_fr = isset($mois[$mois_en]) ? $mois[$mois_en] : $mois_en;
//            $date_fr = $jour_fr . ' ' . date_format($date, 'd') . ' ' . $mois_fr;
//            return $date_fr;
//       }
?>

<!-- html pour adhérents -->
<section class="flex flex-col gap-4 p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2">
    <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3">évènements</h2>
    <section class="flex flex-col gap-8 sm:gap-15 w-full">
        <?php require_once './backend/models/dataMapper.php'?>
        <?php $array = getUpcomingEvents();?>
        <?php if($array): ?>
            <?php foreach ($array as $event): ?>
            <article class="flex flex-col gap-4 sm:gap-5  ">
                <h1 class="title text-lg sm:text-2xl font-bold flex flex-col sm:flex-row justify-between">
                    <?= htmlspecialchars($event["titreinformation"]) ?>
                <span class=" font-normal text-base sm:text-xl"><?= $event["dateinformation"] ?></span>  
                </h1>
                <?php if($event["soustitreinformation"]):?>
                <h2 class=" font-normal text-base sm:text-xl "><?= htmlspecialchars($event["soustitreinformation"]) ?></h2>
                <?php endif ?>
                <div class="content flex flex-col sm:flex-row gap-4 sm:gap-5 border-t-2 border-[#ffbe46] rounded-l-lg justify-between">
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-5 ">
                        <img src=<?=htmlspecialchars($event["image1"])?> alt="" class="w-full sm:w-[600px] h-40 sm:h-70 object-cover rounded-lg rounded-r-none ">
                        <div class="text-base sm:text-lg"><?=htmlspecialchars_decode($event["textetoutinformation"]) ?></div>
                    </div>
                   <?php if($event["info2"]){?> 
                    
                <a href="http://dam31270.free.fr/index.php?page=detailEvenement&id=<?= $event['id'] ?>" class="self-end w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-xs sm:text-sm px-3 sm:px-5 py-2.5 me-2 mb-2">En savoir plus</a>
               
                <?php } ?>
                </div>
                
            </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-lg text-center">Aucun événement à afficher pour le moment.</p>
        <?php endif; ?>
    </section>

</section>
<script>
    console.log(<?= json_encode(getUpcomingEvents()) ?>);
</script>
   
<?php } ?>