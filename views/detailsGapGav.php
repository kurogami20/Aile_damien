<?php 
    require_once './backend/models/dataMapper.php';
    $id=0;
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }     
    $sortie = getGapInfoById($id);
    $textInfoTab=[1,2,3,4,5];
    $imgTab = ["1a", "1b", "1c", "2a", "2b", "2c", "3a", "3b", "3c", "4a", "4b", "4c", "5a", "5b", "5c"];
?>


<section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center relative">
    <!-- affichage du titre de la page -->
    <h2 class="text-5xl text-center capitalize font-bold z-3 flex flex-col gap-3"><?= htmlspecialchars($sortie['titreinformation']) ?> <span class="font-normal text-2xl"> <?= htmlspecialchars($sortie['soustitreinformation']) ?></span></h2>
    <p class="text-justify text-lg font-bold"><?= htmlspecialchars_decode($sortie['dateinformation']) ?></p>
    <section class="flex gap-4 w-full">
        <?php foreach ($imgTab as $index) : ?>
        <?php if (!empty($sortie['image' . $index])) : ?>
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



<script>
console.log(<?= json_encode($sortie) ?>);
</script>