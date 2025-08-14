<?php 
    require_once './backend/models/dataMapper.php';
    $id=0;
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }     

    // Récupération des informations de GAP_actucalend
    $sortie = getGapInfoById($id);

    $textInfoTab=[1,2,3,4,5];
    $imgTab = ["1a", "1b", "1c", "2a", "2b", "2c", "3a", "3b", "3c", "4a", "4b", "4c", "5a", "5b", "5c"];

// recuperation des info de new_GAP_GAV
    $newGAPDetails = getNewGapInfoById($id);
    //traduction des mois et des jours 
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
   
       $imgTab2 = ['image1', 'image2']
   ?>
   
  

<section class="flex flex-col p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2 h-[100%] gap-10 sm:gap-20 items-center relative">
    <!-- affichage du titre de la page -->
    <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3 flex flex-col gap-5"><?= htmlspecialchars($sortie['titreinformation']) ?> <span class="font-normal text-xl sm:text-2xl"> <?= htmlspecialchars($sortie['soustitreinformation']) ?></span></h2>
    <p class="text-justify text-lg sm:text-xl font-bold"><?= htmlspecialchars_decode($sortie['dateinformation']) ?></p>
    <section class="flex gap-10 flex-wrap w-full justify-center">
        <?php foreach ($imgTab as $index) : ?>
        <?php if ($sortie['image' . $index]) : ?>
        <img class=" w-60 h-60 sm:w-90 sm:h-90 object-cover" src="<?= 'https://aile31.fr/'.htmlspecialchars($sortie["repertoire"]).'/images/'.htmlspecialchars($sortie['image' . $index]) ?>" alt="Image <?= $index ?>">
        <?php endif; ?>
        <?php endforeach; ?>
    </section>
    <section>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 text-base sm:text-lg">
        <?php foreach ($textInfoTab as $index) : ?>
        <?= htmlspecialchars_decode($sortie['textetoutinformation' . $index]) ?>
        <?php endforeach; ?>
        </article>
    </section>
    <section class="flex min-[1000px]:flex-row min-[1000px]:items-start gap-4 w-full flex-col items-center">
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 w-full">
        <h1 class="text-xl sm:text-2xl font-bold">Informations complémentaires</h1>
        <ul class="list-disc sm:pl-5 flex flex-col gap-3">
            <?php if (!empty($sortie['lieuinformation'])) : ?>
            <li class="flex gap-2"> <span class="font-bold">Lieu : </span> <?= htmlspecialchars_decode($sortie['lieuinformation']) ?></li>
            <?php endif; ?>
            <?php if (!empty($sortie['contactinformation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Contact : </span> <?= htmlspecialchars_decode($sortie['contactinformation']) ?></li>
            <?php endif; ?>
            <?php if (!empty($sortie['mailinformation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Mail : </span> <a class="text-blue-500 underline" href="mailto:<?= htmlspecialchars_decode($sortie['mailinformation']) ?>"><?= htmlspecialchars_decode($sortie['mailinformation']) ?></a></li>
            <?php endif; ?>
            <?php if (!empty($sortie['lieuinscription']) && !empty($sortie['dateinscriptionclair'])) : ?>
            <li class="flex gap-2"> <span class="font-bold">Inscription :</span> <?= htmlspecialchars_decode($sortie['lieuinscription']) ?>, le <?= htmlspecialchars_decode($sortie['dateinscriptionclair']) ?></li>
            <?php endif; ?>
            <?php if (!empty($sortie['dateinformation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Date :</span> <?= htmlspecialchars_decode($sortie['dateinformation']) ?></li>
            <?php endif; ?>
            <?php if (!empty($sortie['participation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Participation :</span> <?= htmlspecialchars_decode($sortie['participation']) ?></li>
            <?php endif; ?>
        </ul>
        </article>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 h-fit w-full">
            <h1 class="text-xl sm:text-2xl font-bold">Lien(s) utile(s)</h1>
            <ul class="list-disc pl-5">
                <?php $lien= false; foreach ($imgTab as $index) : ?>
                <?php if (!empty($sortie['lien' . $index])&& !empty($sortie['info' . $index])) : ?>
                <?php $lien = true; ?>
                <li><a class="text-blue-500 hover:underline" href="<?= htmlspecialchars($sortie['lien' . $index]) ?>" target="_blank"> <?= htmlspecialchars($sortie['info' . $index]) ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php if (!$lien) : ?>
                <li>Aucun lien disponible</li>
                <?php endif; ?>
            </ul>
        </article>
    </section>
</section>


<script>
console.log(<?= json_encode($sortie) ?>);

</script>