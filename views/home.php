 <?php
if(isset($_SESSION['login'])) {
    echo "<h1 class='text-5xl text-center capitalize font-bold'>Bienvenue " . $_SESSION['nom&prenom'] . "</h1>";
} else {
    echo "<h1 class='text-5xl text-center capitalize font-bold'>Bienvenue sur le site de l'association</h1>";
}

?>