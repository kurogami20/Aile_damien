<?php 



require 'dataBase.php';



function connect($login, $password ){
    global $connexion;

    // chiffre le mdp
    $pass_md5 = md5($password);

    // écrit la requête
    $sql = "SELECT * FROM animateur WHERE anim_boitemail = ? AND anim_mdp = ?";

    // vérifie si la connexion est établie
    if (!isset($connexion) || !$connexion) {
        throw new Exception("Database connection not established.");
    }

    // prépare la requête
    $stmt = mysqli_prepare($connexion, $sql);
    if ($stmt === false) {
        throw new Exception("Failed to prepare SQL statement.");
    }

    // lie les paramètres
    // "ss" signifie que les deux paramètres sont des chaînes de caractères
    mysqli_stmt_bind_param($stmt, "ss", $login, $pass_md5);

    // Execute la requête
    mysqli_stmt_execute($stmt);

    //récupère les résultats
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    // verifie si un résultat a été trouvé
    if (empty($row)) {
        mysqli_stmt_close($stmt);
        return false;
    } else {
        $_SESSION['nom&prenom'] = $row['anim_nomprenom'];
        $_SESSION['mail'] = $row['anim_boitemail'];
        $_SESSION['login'] = $row['anim_login'];
        mysqli_stmt_close($stmt);
        return $row;
    }


}

?>
