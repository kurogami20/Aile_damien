<?php

$serveur = "dam31270.sql.free.fr";
$user = $_ENV['LOGIN_DB'];
$password = $_ENV['PASSWORD_DB'];
$base = "dam31270";
$connexion = mysqli_connect($serveur, $user, $password, $base) or die("impossible de se connecter: " . mysqli_connect_error());

?>
