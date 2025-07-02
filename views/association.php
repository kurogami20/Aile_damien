
<section class="flex flex-col p-4 px-40">
<section class=" p-10 flex flex-col items-center justify-center gap-10 border border-gray-200 rounded-lg shadow-sm  dark:border-gray-700 bg-white dark:bg-[#14161a] dark:text-white">
       
    <p class="text-lg text-center ">
       

    Bienvenue sur le site de l’association AILE. Depuis 2001, AILE réunit dans un esprit de bénévolat et de convivialité les habitants de Cugnaux, Frouzins, Seysses et Villeneuve-Tolosane autour d’activités de loisirs collectifs. La diversité de nos loisirs séduit petits et grands : sport, culture, détente ou ateliers créatifs, il y en a pour tous les goûts !

    </p>
    <button type="button" class=" w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">En savoir plus</button>
</section>

<section class="flex flex-col items-center justify-between gap-20 mt-20">
    <h2 class="text-5xl text-center capitalize font-bold">Nos activités</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php
     require_once 'data/activities.php';
     foreach ($activities as $activity): ?>
        
    <article class="flex flex-col items-center  border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl  dark:border-gray-700  ">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> <?= htmlspecialchars($activity['title'])?>  </h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= htmlspecialchars($activity['description'])?></p>
        <button type="button" class="self-end w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">En savoir plus</button>
    </div>
    
    </article>    
    <?php endforeach; ?>

    </div>
</section>

<section class="mt-20 p-10 flex flex-col items-center justify-center gap-10 border border-gray-200 rounded-lg shadow-sm  dark:border-gray-700 bg-white dark:bg-[#14161a] dark:text-white">
<div class="flex flex-col items-center gap-5 ">
<h3 class="text-3xl  mb-1">Vous n'êtes pas adhérents ?</h3>
    <p class="text-lg">Vous pouvez adhérer à l'association en remplissant le formulaire d'adhésion.</p>

    <a href="/index.php?page=adherer" > <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >Adhérer</button></a>
</div>
</section>
</section>