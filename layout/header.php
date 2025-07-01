<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.I.L.E.</title>
    <meta name="description" content="L'association AILE a pour objet d'aider à l'organisation de loisirs collectifs pour les adhérents.">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/stylesheets.css">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<header class=" border-b-3 border-black item-center px-8 py-4 flex! flex-row justify-between sticky top-0 z-99 w-[100%] items-center" >
  
<a href="/index.php" class="flex items-center gap-5"><img src="../assets/logo.webp" alt="" class="w-30 h-30 object-cover rounded-full">  <h1 class="text-4xl capitalize w-max"> association A.I.L.E.</h1></a>
<nav class=" flex! items-center! relative">
    <ul class="flex gap-10">
        <li class="group"><a href="/index.php?page=association" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">L'association</a>
    <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex  ">
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Qui sommes nous</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Pôle d'activités</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Tableau d'activités</a></li>
    </ul>
    </li> 
        <li class="group"><a href="index.php?page=art" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">Art</a>
        <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex  ">
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Art manuel</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Art performatifs</a></li>
        
    </ul>
    </li>
        <li class="group"><a href="index.php?page=sport" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">sport</a>
    
        <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex  ">
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >rando et marche</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >vélo</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >ski de fond</a></li>
    </ul></li>
        <li class="group"><a href="index.php?page=ensemble" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">ensemble</a>
        <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex  ">
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Tourisme</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Festivités</a></li>
        
    </ul>
    </li> 
        <li class="group"><a href="index.php?page=apprendre" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">Apprendre</a>
        <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex  ">
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Numérique</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Langues</a></li>
        
    </ul>
    </li>
        <li class="group"><a href="index.php?page=detente" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">détente</a>
        <ul class="flex flex-col gap-6  pl-5 shadow-lg rounded-lg p-10  bg-white absolute  hidden group-hover:flex  ">
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >Bien-être</a></li>
        <li><a href="#" class="capitalize text-black! text-lg hover:underline! hover:text-[#fb8cdf]!" >jeux de société</a></li>
        
    </ul>
    </li>  
    </li>
        <li ><a href="index.php?page=connexion" class="capitalize text-black! text-2xl hover:underline! hover:text-[#fb8cdf]!">connexion</a>
    </li> 
    </ul>
</nav>
</header>
<body>
<div class="h-full m-15 ">
