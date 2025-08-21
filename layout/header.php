

<!DOCTYPE html>
<html lang="fr" class=" bg-[#fff6ed] ">
<head>
<meta content="text/plain"> 

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.I.L.E.</title>
    <meta name="description" content="L'association AILE a pour objet d'aider à l'organisation de loisirs collectifs pour les adhérents.">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="/style/stylesheets.css">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<header class=" border-b-3 border-[#ffbe46]  item-center px-8 py-4  flex-row justify-between sticky top-0 z-99 w-[100%] items-center bg-[#fff6ed]  h-fit" >
  
   

<nav class="   min-[1480px]:h-full max-h-185 overflow-y-auto overflow-x-hidden"> 
 <div class="flex flex-wrap justify-between items-center  "> 
       <a href="index.php?page=accueil" class="flex items-center gap-5"><img src="../assets/img/logo.webp" alt="" class=" w-17 h-17  min-[1480px]:w-30 min-[1480px]:h-30 object-cover rounded-full">  <h1 class="text-4xl capitalize w-max">A.I.L.E.</h1></a>

    <button data-collapse-toggle="mega-menu-full" data-modal-target="default-modal" data-modal-toggle="default-modal" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black  min-[1741px]:hidden transform transition-all duration-[1000ms] ease-in-out" aria-controls="mega-menu-full" aria-expanded="false" onclick="classList.toggle('rotate-90')">
        <span class="sr-only">Open main menu</span>
        <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div id="default-modal" class="min-[1741px]:w-fit w-full  ">
    <div id="mega-menu-full" class="items-center justify-between hidden py-[2rem] w-full  min-[1741px]:flex min-[1741px]:w-auto min-[1480px]:order-1 ">
        <ul class="flex flex-col min-[1480px]:mt-4  min-[1480px]:flex-row min-[1480px]:mt-0 min-[1480px]:space-x-8 rtl:space-x-reverse gap-5 min-[1480px]:gap-10 ">
            <li class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2" onclick="if (window.innerWidth < 1480) { this.querySelector('ul').classList.toggle('flex!'); }">
              <span class="flex justify-between gap-1 items-baseline">l'association <i class="fa-solid fa-angle-down text-black min-[1480px]:hidden self-right"></i></span>  
                <ul class=" hidden min-[1480px]:flex flex-col gap-6 min-[1480px]:pl-5 min-[1480px]:shadow-lg min-[1480px]:rounded-lg p-5 min-[1480px]:p-10 bg-white min-[1480px]:absolute min-[1480px]:top-[66%] min-[1480px]:max-h-0 min-[1480px]:opacity-0 min-[1480px]:scale-y-75 min-[1480px]:overflow-hidden transform transition-all duration-[1000ms] ease-in-out origin-top min-[1480px]:group-hover:max-h-[1000px] min-[1480px]:group-hover:opacity-100 min-[1480px]:group-hover:scale-y-100">
                    <li><a href="index.php?page=qui_sommes_nous" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Qui sommes nous</a></li>
                    <li><a href="index.php?page=poles_d_activites" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Pôle d'activités</a></li>
                    <li><a href="index.php?page=tableau_d_activite" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Tableau d'activités</a></li>
                </ul>
            </li>
            <?php   if (isset($_SESSION['login'])) {
                    echo ' <li class="cursor-pointer min-[1480px]:group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2"><a href="index.php?page=evenements" class="capitalize text-black  hover:underline! hover:text-[#9E6600]!">évènements</a></li>';
                
                }?>
             <li class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2" onclick="if (window.innerWidth < 1480) { this.querySelector('ul').classList.toggle('flex!'); }">
              <span class="flex justify-between gap-1 items-baseline">art<i class="fa-solid fa-angle-down text-black min-[1480px]:hidden self-right"></i></span>  
                <ul class=" hidden min-[1480px]:flex flex-col gap-6 min-[1480px]:pl-5 min-[1480px]:shadow-lg min-[1480px]:rounded-lg p-5 min-[1480px]:p-10 bg-white min-[1480px]:absolute min-[1480px]:top-[66%] min-[1480px]:max-h-0 min-[1480px]:opacity-0 min-[1480px]:scale-y-75 min-[1480px]:overflow-hidden transform transition-all duration-[1000ms] ease-in-out origin-top min-[1480px]:group-hover:max-h-[1000px] min-[1480px]:group-hover:opacity-100 min-[1480px]:group-hover:scale-y-100">
                    <li><a href="index.php?page=art&categorie=art_plastique" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Art plastique</a></li>
                    <li><a href="index.php?page=art&categorie=art_performatifs" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Art performatifs</a></li>
                </ul>
            </li>
            <li class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2" onclick="if (window.innerWidth < 1480) { this.querySelector('ul').classList.toggle('flex!'); }">
              <span class="flex justify-between gap-1 items-baseline">sport <i class="fa-solid fa-angle-down text-black min-[1480px]:hidden self-right"></i></span>  
                <ul class=" hidden min-[1480px]:flex flex-col gap-6 min-[1480px]:pl-5 min-[1480px]:shadow-lg min-[1480px]:rounded-lg p-5 min-[1480px]:p-10 bg-white min-[1480px]:absolute min-[1480px]:top-[66%] min-[1480px]:max-h-0 min-[1480px]:opacity-0 min-[1480px]:scale-y-75 min-[1480px]:overflow-hidden transform transition-all duration-[1000ms] ease-in-out origin-top min-[1480px]:group-hover:max-h-[1000px] min-[1480px]:group-hover:opacity-100 min-[1480px]:group-hover:scale-y-100">
                    <li><a href="index.php?page=sport&categorie=rando" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">rando et marche</a></li>
                    <li><a href="index.php?page=sport&categorie=velo" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">vélo</a></li>
                    <li><a href="index.php?page=sport&categorie=ski" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">ski de fond</a></li>
                </ul>
            </li>
            <li class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2" onclick="if (window.innerWidth < 1480) { this.querySelector('ul').classList.toggle('flex!'); }">
              <span class="flex justify-between gap-1 items-baseline">ensemble <i class="fa-solid fa-angle-down text-black min-[1480px]:hidden self-right"></i></span>  
                <ul class=" hidden min-[1480px]:flex flex-col gap-6 min-[1480px]:pl-5 min-[1480px]:shadow-lg min-[1480px]:rounded-lg p-5 min-[1480px]:p-10 bg-white min-[1480px]:absolute min-[1480px]:top-[66%] min-[1480px]:max-h-0 min-[1480px]:opacity-0 min-[1480px]:scale-y-75 min-[1480px]:overflow-hidden transform transition-all duration-[1000ms] ease-in-out origin-top min-[1480px]:group-hover:max-h-[1000px] min-[1480px]:group-hover:opacity-100 min-[1480px]:group-hover:scale-y-100">
                    <li><a href="index.php?page=ensemble&categorie=tourisme" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Tourisme</a></li>
                    <li><a href="index.php?page=ensemble&categorie=festivites" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Festivités</a></li>
                </ul>
            </li>
            <li class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2" onclick="if (window.innerWidth < 1480) { this.querySelector('ul').classList.toggle('flex!'); }">
              <span class="flex justify-between gap-1 items-baseline">apprendre <i class="fa-solid fa-angle-down text-black min-[1480px]:hidden self-right "></i></span>  
                <ul class=" hidden min-[1480px]:flex flex-col gap-6 min-[1480px]:pl-5 min-[1480px]:shadow-lg min-[1480px]:rounded-lg p-5 min-[1480px]:p-10 bg-white min-[1480px]:absolute min-[1480px]:top-[66%] min-[1480px]:max-h-0 min-[1480px]:opacity-0 min-[1480px]:scale-y-75 min-[1480px]:overflow-hidden transform transition-all duration-[1000ms] ease-in-out origin-top min-[1480px]:group-hover:max-h-[1000px] min-[1480px]:group-hover:opacity-100 min-[1480px]:group-hover:scale-y-100">
                    <li><a href="index.php?page=apprendre&categorie=numerique" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Numérique</a></li>
                    <li><a href="index.php?page=apprendre&categorie=langues" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Langues</a></li>
                </ul>
            </li>
            <li class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2" onclick="if (window.innerWidth < 1480) { this.querySelector('ul').classList.toggle('flex!'); }">
              <span class="flex justify-between gap-1 items-baseline">détente <i class="fa-solid fa-angle-down text-black min-[1480px]:hidden self-right"></i></span>  
                <ul class=" hidden min-[1480px]:flex flex-col gap-6 min-[1480px]:pl-5 min-[1480px]:shadow-lg min-[1480px]:rounded-lg p-5 min-[1480px]:p-10 bg-white min-[1480px]:absolute min-[1480px]:top-[66%] min-[1480px]:max-h-0 min-[1480px]:opacity-0 min-[1480px]:scale-y-75 min-[1480px]:overflow-hidden transform transition-all duration-[1000ms] ease-in-out origin-top min-[1480px]:group-hover:max-h-[1000px] min-[1480px]:group-hover:opacity-100 min-[1480px]:group-hover:scale-y-100">
                    <li><a href="index.php?page=detente&categorie=bien_etre" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">Bien-être</a></li>
                    <li><a href="index.php?page=detente&categorie=jeux" class="capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!">jeux de société</a></li>
                </ul>
            </li>    
            
            <?php
            
                if (isset($_SESSION['login'])) {
                    echo '<li id="logout" class="group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2 cursor-pointer ">déconnexion</li>';
                
                }
                else{
            echo '<li class="cursor pointer min-[1480px]:group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2"><a href="index.php?page=adherer" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">Adhérer</a></li>';        
            echo'<li class="cursor-pointer min-[1480px]:group capitalize text-black text-2xl d min-[1480px]:hover:underline! min-[1480px]:hover:text-[#9E6600]! border-b-2 border-[#ffbe45] min-[1480px]:border-none pb-5 flex justify-between flex-col gap-2"><a href="index.php?page=connexion" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">connexion</a></li> '; 
                }
        
            ?>
        
        </ul>
    </div>
    </div>
            </div>
        

<!-- Modal toggle -->
<!-- <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> -->

<!-- Main modal -->
<!-- <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      srtsrdtg
    </div>
</div> -->

</nav>
</header> 
