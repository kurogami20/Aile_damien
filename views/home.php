<?php

if($_SESSION['login']!=="LOGIN6" && $_SESSION['nom&prenom']) {
    echo "<h1 class='text-5xl text-center capitalize font-bold'>Bienvenue " . $_SESSION['nom&prenom'] . "</h1>";
} else {
    echo "<h1 class='text-5xl text-center capitalize font-bold'>Bienvenue sur le site de l'association</h1>";
}

?>

<script>
    let login = "<?php echo $_SESSION['login'];?>";
    console.log(login);
</script>