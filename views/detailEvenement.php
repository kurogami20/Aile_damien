<?php 

require_once 'backend/models/dataMapper.php';
$entId = 0;

if (isset($_GET['id'])) {
    // Récupération de l'ID de l'événement depuis les paramètres GET
$entId = $_GET['id'];
}


$eventDetails = getEventDetails($entId);


$multiInfoTab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
?>

<section class="flex flex-col p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2 h-[100%] gap-10 sm:gap-20 items-center relative">
    <!-- affichage du titre de la page -->
    <h2 class="text-3xl sm:text-5xl text-center capitalize font-bold z-3 flex flex-col gap-5"><?= htmlspecialchars($eventDetails['titreinformation']) ?> <span class="font-normal text-xl sm:text-2xl"> <?= htmlspecialchars($eventDetails['soustitreinformation']) ?></span></h2>
    <p class="text-justify text-lg sm:text-xl font-bold">Le <?=  $eventDetails['dateinformation'] ?></p>
    <section class="flex gap-4 w-full justify-center">
        <?php foreach ($multiInfoTab as $index) : ?>
        <?php if (!empty($eventDetails["image" . $index])) : ?>
        <img class=" w-60 h-60 sm:w-90 sm:h-90 object-cover" src="<?= htmlspecialchars($eventDetails["image" . $index]) ?>" alt="Image <?= $index ?>">
        <?php endif; ?>
        <?php endforeach; ?>
    </section>
    <section>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 text-base sm:text-lg">
    
        <p><?= htmlspecialchars_decode($eventDetails["textetoutinformation"]) ?></p>
        <?php if (!empty($eventDetails["textecomplinformation"])): ?>
        <p><?= htmlspecialchars_decode($eventDetails["textecomplinformation"]) ?></p>
        <?php endif; ?>
        <?php if (!empty($eventDetails["textedivers"])): ?>
        <p><?= htmlspecialchars_decode($eventDetails["textedivers"]) ?></p>
        <?php endif; ?>
        
        </article>
    </section>
    <section class="flex gap-4 w-full">
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
        <h1 class="text-xl sm:text-2xl font-bold">Informations complémentaires</h1>
        <ul class="list-disc pl-5 flex flex-col gap-3">
            <?php if (!empty($eventDetails['lieuinformation'])) : ?>
            <li class="flex gap-2"> <span class="font-bold">Lieu : </span> <?= htmlspecialchars_decode($eventDetails['lieuinformation']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['contactinformation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Contact : </span> <?= htmlspecialchars_decode($eventDetails['contactinformation']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['mailinformation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Mail : </span> <a class="text-blue-500 underline" href="mailto:<?= htmlspecialchars_decode($eventDetails['mailinformation']) ?>"><?= htmlspecialchars_decode($eventDetails['mailinformation']) ?></a></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['lieuinscription']) && !empty($eventDetails['dateinscriptionclair'])) : ?>
            <li class="flex gap-2"> <span class="font-bold">Inscription :</span> <?= htmlspecialchars_decode($eventDetails['lieuinscription']) ?>, le <?=  createDate($eventDetails['dateinscriptionclair']) ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['dateinformation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Date :</span> <?=  $eventDetails['dateinformation'] ?></li>
            <?php endif; ?>
            <?php if (!empty($eventDetails['participation'])) : ?>
            <li class="flex gap-2"><span class="font-bold">Participation :</span> <?= htmlspecialchars_decode($eventDetails['participation']) ?></li>
            <?php endif; ?>
        </ul>
        </article>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5 h-fit">
            <h1 class="text-xl sm:text-2xl font-bold">Lien(s) utile(s)</h1>
            <ul class="list-disc pl-5">
                <?php $lien= false; foreach ($multiInfoTab as $index) : ?>
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