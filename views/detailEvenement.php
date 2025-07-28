<?php 

require_once 'backend/models/dataMapper.php';
$entId = 0;

if (isset($_GET['id'])) {
    // Récupération de l'ID de l'événement depuis les paramètres GET
$entId = $_GET['id'];
}


$eventDetails = getEventDetails($entId);


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

    $imgTab = ['image1', 'image2']
?>

<section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center relative">
    <!-- affichage du titre de la page -->
    <h2 class="text-5xl text-center capitalize font-bold z-3 flex flex-col gap-3"><?= htmlspecialchars($eventDetails['titre']) ?> <span class="font-normal text-2xl"> <?= htmlspecialchars($eventDetails['sous_titre']) ?></span></h2>
    <p class="text-justify text-lg font-bold">Le <?=  createDate($eventDetails['date_debut']) ?></p>
    <section class="flex gap-4 w-full justify-center">
        <?php foreach ($imgTab as $index) : ?>
        <?php if (!empty($eventDetails[$index])) : ?>
        <img class="w-[600px] h-[300px] object-cover" src="<?= htmlspecialchars($eventDetails[$index]) ?>" alt="Image <?= $index ?>">
        <?php endif; ?>
        <?php endforeach; ?>
    </section>
    <section>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
    
        <p><?= htmlspecialchars($eventDetails["texte"]) ?></p>
        
        </article>
    </section>
    <section class="flex gap-4 w-full">
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
        <h1 class="text-2xl font-bold">Informations complémentaires</h1>
        <ul class="list-disc pl-5 flex flex-col gap-3">
            <?php if (!empty($eventDetails['lieu'])) : ?>
            <li class="flex gap-2"> <span class="font-bold">Lieu : </span> <?= htmlspecialchars($eventDetails['lieu']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['anim_nomprenom'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Contact : </span> <?= htmlspecialchars($eventDetails['anim_nomprenom']) ?> - <?= htmlspecialchars($eventDetails['anim_telmob']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['anim_boitemail'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Mail : </span> <a class="text-blue-500 underline" href="mailto:<?= htmlspecialchars($eventDetails['anim_boitemail']) ?>"><?= htmlspecialchars($eventDetails['anim_boitemail']) ?></a></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['lieu_inscription']) && !empty($eventDetails['date_inscription'])) : ?>
            <li class="flex gap-2"> <span class="font-bold">Inscription :</span> <?= htmlspecialchars($eventDetails['lieu_inscription']) ?>, le <?=  createDate($eventDetails['date_inscription']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['date_debut'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Date :</span> <?=  createDate($eventDetails['date_debut']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['mod_participation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Participation :</span> <?= htmlspecialchars($eventDetails['mod_participation']) ?></li>
            <?php endif; ?>
        </ul>
        </article>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 h-fit">
            <h1 class="text-2xl font-bold">Lien(s) utile(s)</h1>
            <ul class="list-disc pl-5">
                <?php $lien= false; foreach ($imgTab as $index) : ?>
                <?php if (!empty($eventDetails['lien' . $index])&& !empty($eventDetails['info' . $index])) : ?>
                <?php $lien = true; ?>
                <li><a class="text-blue-500 hover:underline" href="<?= htmlspecialchars($eventDetails['lien' . $index]) ?>" target="_blank"> <?= htmlspecialchars($eventDetails['info' . $index]) ?></a></li>
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
console.log(<?= json_encode($eventDetails) ?>);
</script>