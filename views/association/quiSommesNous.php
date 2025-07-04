<?php
require_once 'backend/models/dataMapper.php';

?>

<section class="flex flex-col p-4 px-40 h-[100%] gap-20 items-center">
<h2 class="text-5xl text-center capitalize font-bold ">Qui sommes nous ?</h2>
    <section class=" p-10 flex flex-col items-center justify-center gap-10 border border-[#ffbe46] rounded-lg shadow-sm   bg-white  ">
        <p class="text-lg text-center ">
        L’association AILE (Association Intercommunale de Loisirs et d’Échanges) a pour vocation de favoriser l’organisation et le développement d’activités de loisirs collectifs à destination de ses adhérents. Elle propose un cadre dynamique et chaleureux permettant à chacun de s’investir dans des activités variées, qu’elles soient culturelles, sportives, artistiques ou de détente, en lien avec les envies des participants.
        <br> <br>
        Portée par des valeurs fortes de bénévolat, de partage et de convivialité, l’association repose sur l’implication active de ses membres et sur l’esprit d’entraide entre les générations. Son action est exclusivement tournée vers les habitants des communes de Cugnaux, Frouzins, Seysses et Villeneuve-Tolosane, favorisant ainsi un tissu local riche en échanges et en lien social.
        <br> <br>
        Créée en 2001, AILE n’a cessé de croître et de se renouveler au fil des années. Pour la saison 2024/2025, elle compte 803 adhérents, preuve de son attractivité et de son rôle central dans la vie associative intercommunale.
        </p>
    </section>
    <section class=" flex flex-wrap justify-between gap-10 ">
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 h-fit">
                <h2 class="title text-2xl font-bold">Le bureau</h2>
                <div class="card-content">
                    <div class="relative ">
                        <table class=" text-sm text-left rtl:text-right text-gray-500 w-full">
                            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                 <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    Les membres du bureau sont élus par l'assemblée générale de l'association. Ils sont responsables de la gestion quotidienne de l'association et de la mise en œuvre des décisions prises lors des assemblées générales.
                                 </p>
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Rôle
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nom 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Prénom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Contact
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              <?php  foreach (getAnimNameBoard() as $anim) {
                                
                                if ($anim['anim_nom'] && $anim['anim_prenom'] && $anim['anim_telmob'] || $anim['anim_telfixe']) {
                                // Vérifie que les champs ne sont pas vides avant d'afficher la ligne
                                ?>
                                <tr class="bg-white border-b  border-gray-200">
                                 
                                        <td class="px-6 py-4">
                                            <?php if($anim['anim_nom']=== "Sénille"){echo "Président";} ?>
                                            <?php if($anim['anim_nom']=== "Edin"){echo "Vice-président";} ?>
                                            <?php if($anim['anim_nom']=== "Ledos"){echo "Secrétaire";} ?>
                                            <?php if($anim['anim_nom']=== "Goldstein"){echo "Trésorier";} ?>
                                            <?php if($anim['anim_nom']=== "Rubio"){echo "Trésoriere adjointe";} ?>
                                            <?php if($anim['anim_nom']=== "Dunoyer Dupraz"){echo "Membre en charge des adhérents";} ?>
                                            <?php if($anim['anim_nom']=== "Tondeur"){echo "Membre du bureau";} ?>
                                        </td>
                      
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_nom'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_prenom'] ?>
                                    </td>
                                    <?php if($anim['anim_telmob']){ ?>
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_telmob'] ?>
                                    </td>
                                    <?php } else { ?>
                                        <td class="px-6 py-4">
                                        <?= $anim['anim_telfixe'] ?>
                                    </td>
                                    <?php }  ?>
                                </tr>
                              <?php }} ?>
                            
                            </tbody>
                        </table>
                    </div>
                    
                </div>
        </article>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 ">
                <h2 class="title text-2xl font-bold">Le conseil de discipline</h2>
                <div class="card-content">
                <div class="relative ">
                        <table class=" text-sm text-left rtl:text-right text-gray-500 w-full">
                            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                 <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    Les membres du bureau sont élus par l'assemblée générale de l'association. Ils sont responsables de la gestion quotidienne de l'association et de la mise en œuvre des décisions prises lors des assemblées générales.
                                 </p>
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nom 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Prénom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Contact
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              <?php  foreach (getAnimNameCD() as $anim) {
                                
                                if ($anim['anim_nom'] && $anim['anim_prenom'] && $anim['anim_telmob'] || $anim['anim_telfixe']) {
                                // Vérifie que les champs ne sont pas vides avant d'afficher la ligne
                                ?>
                                <tr class="bg-white border-b  border-gray-200">
                      
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_nom'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_prenom'] ?>
                                    </td>
                                    <?php if($anim['anim_telmob']){ ?>
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_telmob'] ?>
                                    </td>
                                    <?php } else { ?>
                                        <td class="px-6 py-4">
                                        <?= $anim['anim_telfixe'] ?>
                                    </td>
                                    <?php }  ?>
                                </tr>
                              <?php }} ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
        </article>
        <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 grow-5">
                <h2 class="title text-2xl font-bold">Le conseil d'administration</h2>
                <div class="card-content">
                 <div class="relative ">
                        <table class=" text-sm text-left rtl:text-right text-gray-500 w-full">
                            <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
                                 <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                                    Les membres du bureau sont élus par l'assemblée générale de l'association. Ils sont responsables de la gestion quotidienne de l'association et de la mise en œuvre des décisions prises lors des assemblées générales.
                                 </p>
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nom 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Prénom
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Contact
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              <?php  foreach (getAnimNameCA() as $anim) {
                                
                                if ($anim['anim_nom'] && $anim['anim_prenom'] && $anim['anim_telmob'] || $anim['anim_telfixe']) {
                                // Vérifie que les champs ne sont pas vides avant d'afficher la ligne
                                ?>
                                <tr class="bg-white border-b  border-gray-200">
                      
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_nom'] ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_prenom'] ?>
                                    </td>
                                    <?php if($anim['anim_telmob']){ ?>
                                    <td class="px-6 py-4">
                                        <?= $anim['anim_telmob'] ?>
                                    </td>
                                    <?php } else { ?>
                                        <td class="px-6 py-4">
                                        <?= $anim['anim_telfixe'] ?>
                                    </td>
                                    <?php }  ?>
                                </tr>
                              <?php }} ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
        </article>
        <!-- <article class="card border border-[#ffbe46] rounded-lg shadow-sm bg-white p-10 flex flex-col gap-3 ">
                <h2 class="title text-2xl font-bold">Le conseil de discipline</h2>
                <div class="card-content">
                </div>
        </article> -->
    </section>
   
</section>

<script>
    
</script>