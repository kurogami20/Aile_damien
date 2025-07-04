

<!DOCTYPE html>
<html lang="en" class=" bg-[#fff6ed] ">
<head>
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
<header class=" border-b-3 border-[#ffbe46]  item-center px-8 py-4 flex! flex-row justify-between sticky top-0 z-99 w-[100%] items-center bg-[#fff6ed] " >
  
<a href="index.php?page=accueil" class="flex items-center gap-5"><img src="../assets/img/logo.webp" alt="" class="w-30 h-30 object-cover rounded-full">  <h1 class="text-4xl capitalize w-max">A.I.L.E.</h1></a>
<nav class=" flex! items-center! relative">
    <ul class="flex gap-10">
        <li class="group capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">l'association
            <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex   "                
                <li><a href="index.php?page=qui_sommes_nous" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Qui sommes nous</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Pôle d'activités</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Tableau d'activités</a></li>
            </ul>
        </li> 
        <li class="group"><a href="index.php?page=art" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">Art</a>
            <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex   "> 
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Art manuel</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Art performatifs</a></li>
            </ul>
        </li>
        <li class="group"><a href="index.php?page=sport" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">sport</a>
            <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex   "> 
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >rando et marche</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >vélo</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >ski de fond</a></li>
            </ul>
        </li>
        <li class="group"><a href="index.php?page=ensemble" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">ensemble</a>
            <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex   "> 
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Tourisme</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Festivités</a></li>
            </ul>
        </li> 
        <li class="group"><a href="index.php?page=apprendre" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">Apprendre</a>
            <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex   "> 
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Numérique</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Langues</a></li>
            </ul>
        </li>
        <li class="group"><a href="index.php?page=detente" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">détente</a>
            <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex   "> 
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >Bien-être</a></li>
                <li><a href="#" class="  capitalize text-black text-lg hover:underline! hover:text-[#9E6600]!" >jeux de société</a></li>
            </ul>
        </li>  
        
        
        <?php
        
            if (isset($_SESSION['login'])) {
                echo '<li id="logout" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]! cursor-pointer">déconnexion</li>';
               
            }
            else{
        echo '<li class="group"><a href="index.php?page=adherer" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">Adhérer</a></li>';        
        echo'<li ><a href="index.php?page=connexion" class="capitalize text-black  text-2xl d hover:underline! hover:text-[#9E6600]!">connexion</a></li> '; 
    }
    
        ?>
      
    </ul>
</nav>
</header> 

