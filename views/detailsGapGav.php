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
   
  
<?php if ($sortie) { ?>
<section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center relative">
    <!-- affichage du titre de la page -->
    <h2 class="text-5xl text-center capitalize font-bold z-3 flex flex-col gap-3"><?= htmlspecialchars($sortie['titreinformation']) ?> <span class="font-normal text-2xl"> <?= htmlspecialchars($sortie['soustitreinformation']) ?></span></h2>
    <p class="text-justify text-lg font-bold"><?= htmlspecialchars_decode($sortie['dateinformation']) ?></p>
    <section class="flex gap-4  w-full justify-center">
        <?php foreach ($imgTab as $index) : ?>
        <?php if ($sortie['image' . $index]) : ?>
        <img class="w-1/2" src="<?= htmlspecialchars($sortie['image' . $index]) ?>" alt="Image <?= $index ?>">
        <?php endif; ?>
        <?php endforeach; ?>
    </section>
    <section>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
        <?php foreach ($textInfoTab as $index) : ?>
        <?= htmlspecialchars_decode($sortie['textetoutinformation' . $index]) ?>
        <?php endforeach; ?>
        </article>
    </section>
    <section class="flex gap-4 w-full">
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
        <h1 class="text-2xl font-bold">Informations complémentaires</h1>
        <ul class="list-disc pl-5 flex flex-col gap-3">
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
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 h-fit">
            <h1 class="text-2xl font-bold">Lien(s) utile(s)</h1>
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
<?php } elseif ($newGAPDetails){ ?>
    <section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center relative">
       <!-- affichage du titre de la page -->
       <h2 class="text-5xl text-center capitalize font-bold z-3 flex flex-col gap-3"><?= htmlspecialchars($newGAPDetails['titre']) ?> <span class="font-normal text-2xl"> <?= htmlspecialchars($newGAPDetails['sous_titre']) ?></span></h2>
       <p class="text-justify text-lg font-bold">Le <?=  createDate($newGAPDetails['date_debut']) ?></p>
       <section class="flex gap-4 w-full justify-center">
           <?php foreach ($imgTab2 as $index) : ?>
           <?php if (!empty($newGAPDetails[$index])) : ?>
           <img class="w-[600px] h-[300px] object-cover" src="<?= htmlspecialchars($newGAPDetails[$index]) ?>" alt="Image <?= $index ?>">
           <?php endif; ?>
           <?php endforeach; ?>
       </section>
       <section>
           <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
       
           <p><?= htmlspecialchars($newGAPDetails["texte"]) ?></p>
           
           </article>
       </section>
       <section class="flex gap-4 w-full">
           <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
           <h1 class="text-2xl font-bold">Informations complémentaires</h1>
           <ul class="list-disc pl-5 flex flex-col gap-3">
               <?php if (!empty($newGAPDetails['lieu'])) : ?>
               <li class="flex gap-2"> <span class="font-bold">Lieu : </span> <?= htmlspecialchars($newGAPDetails['lieu']) ?></li>
               <?php endif; ?>
               <?php if (!empty($newGAPDetails['anim_nomprenom'])) : ?>
               <li class="flex gap-2"><span class="font-bold">Contact : </span> <?= htmlspecialchars($newGAPDetails['anim_nomprenom']) ?> - <?= htmlspecialchars($newGAPDetails['anim_telmob']) ?></li>
               <?php endif; ?>
               <?php if (!empty($newGAPDetails['anim_boitemail'])) : ?>
               <li class="flex gap-2"><span class="font-bold">Mail : </span> <a class="text-blue-500 underline" href="mailto:<?= htmlspecialchars($newGAPDetails['anim_boitemail']) ?>"><?= htmlspecialchars($newGAPDetails['anim_boitemail']) ?></a></li>
               <?php endif; ?>
               <?php if (!empty($newGAPDetails['lieu_inscription']) && !empty($newGAPDetails['date_inscription'])) : ?>
               <li class="flex gap-2"> <span class="font-bold">Inscription :</span> <?= htmlspecialchars($newGAPDetails['lieu_inscription']) ?>, le <?=  createDate($newGAPDetails['date_inscription']) ?></li>
               <?php endif; ?>
               <?php if (!empty($newGAPDetails['date_debut'])) : ?>
               <li class="flex gap-2"><span class="font-bold">Date :</span> <?=  createDate($newGAPDetails['date_debut']) ?></li>
               <?php endif; ?>
               <?php if (!empty($newGAPDetails['mod_participation'])) : ?>
               <li class="flex gap-2"><span class="font-bold">Participation :</span> <?= htmlspecialchars($newGAPDetails['mod_participation']) ?></li>
               <?php endif; ?>
           </ul>
           </article>
           <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 h-fit">
               <h1 class="text-2xl font-bold">Lien(s) utile(s)</h1>
               <ul class="list-disc pl-5">
                   <?php $lien= false; foreach ($imgTab as $index) : ?>
                   <?php if (!empty($newGAPDetails['lien' . $index])&& !empty($newGAPDetails['info' . $index])) : ?>
                   <?php $lien = true; ?>
                   <li><a class="text-blue-500 hover:underline" href="<?= htmlspecialchars($newGAPDetails['lien' . $index]) ?>" target="_blank"> <?= htmlspecialchars($newGAPDetails['info' . $index]) ?></a></li>
                   <?php endif; ?>
                   <?php endforeach; ?>
                   <?php if (!$lien) : ?>
                   <li>Aucun lien disponible</li>
                   <?php endif; ?>
               </ul>
           </article>
       </section>
   </section>
<?php } ?>


<script>
console.log(<?= json_encode($sortie) ?>);
console.log(<?= json_encode($newGAPDetails) ?>);
</script>