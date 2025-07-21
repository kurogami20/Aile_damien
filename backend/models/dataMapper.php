<?php 



require 'dataBase.php';

// * connexion
    // fonction pour se connecter à la base de données
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




//*
// * association
    // recuperation des membres du bureau
    function getAnimNameBoard(){
        // fonction de récupération des info des animateurs du bureau
        function getAnimInfoBoard($fullName){
            global $connexion;
            $req = "SELECT * FROM animateur WHERE anim_nomprenom = '$fullName'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));}else{
                $row = mysqli_fetch_assoc($res);
                return $row;
            }
        }
        // fonction de récuperation des nom et prenom des animateurs du bureau de la table activite
        function getAnimFromActivityForBoard(){
            global $connexion;
            $req = "SELECT * FROM activite WHERE activite_nom = 'Bureau'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));
            } else {
                $tableName = [];
                $row = mysqli_fetch_assoc($res);
                
                    foreach ($row as $fullname) {
                        if ($fullname !== '') {
                            $tableName[] = getAnimInfoBoard($fullname);
                        }
                    }
                
                return $tableName;
            }
        }
        return getAnimFromActivityForBoard();
    }
    // fonction de récupération des membres du CA
    function getAnimNameCA(){
        // fonction de récupération des info des animateurs du CA
        function getAnimInfoCA($fullName){
            global $connexion;
            $req = "SELECT * FROM animateur WHERE anim_nomprenom = '$fullName'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));}else{
                $row = mysqli_fetch_assoc($res);
                return $row;
            }
        }
        // fonction de récuperation des nom et prenom des animateurs du bureau de la table activite
        function getAnimFromActivityForCA(){
            global $connexion;
            $req = "SELECT * FROM activite WHERE activite_nom = 'CA'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));
            } else {
                $tableName = [];
                $row = mysqli_fetch_assoc($res);
                
                    foreach ($row as $fullname) {
                        if ($fullname !== '') {
                            $tableName[] = getAnimInfoCA($fullname);
                        }
                    }
                
                return $tableName;
            }
        }
        return getAnimFromActivityForCA();
        }
        
        
    // fonction de récupération des membres du CD
    function getAnimNameCD(){
        // fonction de récupération des info des animateurs du CD
        function getAnimInfoCD($fullName){
            global $connexion;
            $req = "SELECT * FROM animateur WHERE anim_nomprenom = '$fullName'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));}else{
                $row = mysqli_fetch_assoc($res);
                return $row;
            }
        }
        // fonction de récuperation des nom et prenom des animateurs du bureau de la table activite
        function getAnimFromActivityForCD(){
            global $connexion;
            $req = "SELECT * FROM activite WHERE activite_nom = 'Conseil de conciliation'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));
            } else {
                $tableName = [];
                $row = mysqli_fetch_assoc($res);
                
                    foreach ($row as $fullname) {
                        if ($fullname !== '') {
                            $tableName[] = getAnimInfoCD($fullname);
                        }
                    }
                
                return $tableName;
            }
        }
        return getAnimFromActivityForCD();
        }
        
//*
// * page activités
    //  fonction de récuperation des animateurs
    function getAnimFromActivity($activiteId){
       
        // fonction de récupération des info des animateurs de l'activité
        function getAnimInfoActivity($fullName){
            global $connexion;
            $req = "SELECT * FROM animateur WHERE anim_nomprenom = '$fullName'";
            $res = mysqli_query($connexion, $req);
            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));}else{
                $row = mysqli_fetch_assoc($res);
                return $row;
            }
        }
       
        // fonction de récuperation des nom et prenom des animateurs du bureau de la table activite
        function getAnimFromActivityForActivity($ids){
            $result=[];
            foreach ($ids as $id) {
                global $connexion;
                
                if(is_array($id)){
                    foreach ($id as $subId) {
                        $req = "SELECT * FROM activite WHERE id = ?";
                
                        // on prépare la fonction pour éviter les injections SQL
                        $stmt = mysqli_prepare($connexion, $req);
                        if ($stmt === false) {
                            throw new Exception("Failed to prepare SQL statement.");
                        }
                        mysqli_stmt_bind_param($stmt, "i", $subId);
                        mysqli_stmt_execute($stmt);
                        $res = mysqli_stmt_get_result($stmt);
            
        
                        if (!$res) {
                            throw new Exception("Database query failed: " . mysqli_error($connexion));
                        } else {
                            $row = mysqli_fetch_assoc($res);
                            if($row){
                                foreach ($row as $fullname) {
                                    if ($fullname !== '') {
                                        if (getAnimInfoActivity($fullname)){
                                        $multiAnim[] = getAnimInfoActivity($fullname);
                                    }
                                    }
                                }
                            } else {
                                // Activity not found, but continue processing other activities
                                continue;
                            }
                            
                        }
                    }

                     $result[] = $multiAnim;
                }


                $req = "SELECT * FROM activite WHERE id = ?";
                
                // on prépare la fonction pour éviter les injections SQL
                $stmt = mysqli_prepare($connexion, $req);
                if ($stmt === false) {
                    throw new Exception("Failed to prepare SQL statement.");
                }
                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                $res = mysqli_stmt_get_result($stmt);
            
        
            
                if (!$res) {
                    throw new Exception("Database query failed: " . mysqli_error($connexion));
                } else {
                    $tableName = [];
                    $row = mysqli_fetch_assoc($res);
                    if($row){
                        foreach ($row as $fullname) {
                            if ($fullname !== '') {
                                if (getAnimInfoActivity($fullname)){
                                $tableName[] = getAnimInfoActivity($fullname);
                            }
                            }
                        }
                        if (!empty($tableName)) {
                        $result[]= $tableName;
                        }
                    } else {
                        // Activity not found, but continue processing other activities
                        continue;
                    }  

                }
                mysqli_stmt_close($stmt);            }
          return $result; 
        }
        $result = getAnimFromActivityForActivity($activiteId);
        return $result ? $result : ["vide"];

    }
    function getHourAndRoomForActivity($activiteId){
        $activityInfo = [];
        $subInfo = [];   
        // fonction de récupération des heures et salles de l'activité
        foreach ($activiteId as $id) {
            if(is_array($id)){
                    foreach ($id as $subId) {
                        global $connexion; 
                $req = "SELECT a.activite_jour, a.activite_horaire, s.salle_nom FROM activite a JOIN salle s ON a.id_salle = s.id WHERE a.id = ?";
                
                // on prépare la fonction pour éviter les injections SQL
                $stmt = mysqli_prepare($connexion, $req);
                if ($stmt === false) {
                    throw new Exception("Failed to prepare SQL statement.");
                }
                mysqli_stmt_bind_param($stmt, "i", $subId);
                mysqli_stmt_execute($stmt);
                $res = mysqli_stmt_get_result($stmt);

                if (!$res) {
                    throw new Exception("Database query failed: " . mysqli_error($connexion));
                } else {
                    $row = mysqli_fetch_assoc($res);
                    $subInfo[] = $row;
                }
                    }
                    $activityInfo[] = $subInfo;
            }
            global $connexion; 
            $req = "SELECT a.activite_jour, a.activite_horaire, s.salle_nom FROM activite a JOIN salle s ON a.id_salle = s.id WHERE a.id = ?";
            
            // on prépare la fonction pour éviter les injections SQL
            $stmt = mysqli_prepare($connexion, $req);
            if ($stmt === false) {
                throw new Exception("Failed to prepare SQL statement.");
            }
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);

            if (!$res) {
                throw new Exception("Database query failed: " . mysqli_error($connexion));
            } else {
                $row = mysqli_fetch_assoc($res);
                if($row){
                    $activityInfo[] = $row;
                } else {
                    // Activity not found, but continue processing other activities
                    continue;
                }
                
            }
        }
        return $activityInfo;
    }
//*    

//*à la une

    function getHomePageEvent(){
        global $connexion;
        $connexion->set_charset("utf8");
        $req = "SELECT n.* , e.*, g.* FROM New_accueil_choix n JOIN new_EVEN e  ON e.id = n.id_EVEN JOIN GAP_actucalend g  ON g.id = n.id_GAP WHERE e.date_EVEN >= CURDATE() ";
        $res = mysqli_query($connexion, $req);
        if (!$res) {
            throw new Exception("Database query failed: " . mysqli_error($connexion));
        } else {
            $events = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $events[] = $row;
            }
            return $events;
        }
    }


//*    

// *page pour détail évènement

    function getEventDetails($eventId) {
        global $connexion;
        $req = "SELECT * FROM new_EVEN WHERE id = ?";
        $stmt = mysqli_prepare($connexion, $req);
        if ($stmt === false) {
            throw new Exception("Failed to prepare SQL statement.");
        }
        mysqli_stmt_bind_param($stmt, "i", $eventId);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        if (!$res) {
            throw new Exception("Database query failed: " . mysqli_error($connexion));
        } else {
            return mysqli_fetch_assoc($res);
        }
    }
//*

// *Pôles d'activités

    function getPoles(){
        global $connexion;
        $req =  "SELECT * FROM activite_pole";
        $res = mysqli_query($connexion, $req);
        if (!$res) {
            throw new Exception("Database query failed: " . mysqli_error($connexion));
        } else {
            $poles = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $poles[] = $row;
            }
            return $poles;
        }
    }



//*