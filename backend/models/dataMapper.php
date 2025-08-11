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
            $_SESSION['timeout'] = time();
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
                $req = "SELECT a.activite_jour, a.activite_horaire, a.date_reprise, s.salle_nom FROM activite a JOIN salle s ON a.id_salle = s.id WHERE a.id = ?";
                
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
            $req = "SELECT a.activite_jour, a.activite_horaire, a.date_reprise, s.salle_nom FROM activite a JOIN salle s ON a.id_salle = s.id WHERE a.id = ?";
            
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

    // function getHomePageNewEvent(){
        //     global $connexion;
        //     $connexion->set_charset("utf8");
        //     $req = "SELECT n.id, n.id_EVEN, e.* 
        //             FROM New_accueil_choix n 
        //             JOIN new_EVEN e ON n.id_EVEN > 0 AND e.id = n.id_EVEN 
        //             WHERE e.date_debut >= CURDATE()
        //             ";
                
        //     $req2 = "SELECT n.id,  g.* 
        //              FROM New_accueil_choix n 
        //              JOIN new_GAP_GAV g ON n.id_GAP > 0 AND g.id = n.id_GAP
        //              WHERE g.date_debut >= CURDATE()"; 
                    
        //     $res = mysqli_query($connexion, $req);
        //     if (!$res) {
        //         throw new Exception("Database query failed: " . mysqli_error($connexion));
        //     }
        //     $res2 = mysqli_query($connexion, $req2);
        //     if (!$res2) {
        //         throw new Exception("Database query failed: " . mysqli_error($connexion));
        //     }
        //     if (!$res && !$res2) {
        //         throw new Exception("Database query failed: " . mysqli_error($connexion));
        //     } else {
        //         $events = [];
        //         while ($row = mysqli_fetch_assoc($res)) {
        //             $events[] = $row;
        //         }
        //         while ($row2 = mysqli_fetch_assoc($res2)) {
        //             $events[] = $row2;
        //         }
        //         // Tri des événements par date de début
        //         usort($events, function($a, $b) {
        //             return strtotime($a["date_debut"]) - strtotime($b["date_debut"]);
        //         });
        //         return $events;
        //     }
    // }
function getHomePageEvent(){
    global $connexion;
    $req = "SELECT * FROM accueil_choix";
    $res = mysqli_query($connexion, $req);
    if (!$res) {
        throw new Exception("Database query failed: " . mysqli_error($connexion));
    } else {
        $row = mysqli_fetch_assoc($res);
        
        $refTable = [1, 2, 3, 4, 5, 6, 7, 8,9,10];

        $laUne = [];

        foreach ($refTable as $index) {
            if (isset($row['reference' . $index]) && $row['reference' . $index] !== '' && isset($row['titreinformation' . $index]) && $row['titreinformation' . $index] !== '') {
                $id = $row['reference' . $index];
                $title = $row['titreinformation' . $index];
                // Use prepared statement for EVEN_actucalend
                $req2 = "SELECT * FROM EVEN_actucalend WHERE reference = ? AND titreinformation = ?";
                $stmt2 = mysqli_prepare($connexion, $req2);
                if ($stmt2 === false) {
                    throw new Exception("Failed to prepare SQL statement for EVEN_actucalend.");
                }
                mysqli_stmt_bind_param($stmt2, "is", $id, $title);
                mysqli_stmt_execute($stmt2);
                $res2 = mysqli_stmt_get_result($stmt2);
        
                if ($res2 && mysqli_num_rows($res2) > 0) {
                    $laUne[] = mysqli_fetch_assoc($res2);
                    mysqli_stmt_close($stmt2);
                } else {
                    mysqli_stmt_close($stmt2);
                    // Use prepared statement for GAP_actucalend
                    $req3 = "SELECT * FROM GAP_actucalend WHERE reference = ? AND titreinformation = ?";
                    $stmt3 = mysqli_prepare($connexion, $req3);
                    if ($stmt3 === false) {
                        throw new Exception("Failed to prepare SQL statement for GAP_actucalend.");
                    }
                    mysqli_stmt_bind_param($stmt3, "is", $id, $title);
                    mysqli_stmt_execute($stmt3);
                    $res3 = mysqli_stmt_get_result($stmt3);
                    if ($res3 && mysqli_num_rows($res3) > 0) {
                        $laUne[] = mysqli_fetch_assoc($res3);
                        mysqli_stmt_close($stmt3);
                    } else {
                        mysqli_stmt_close($stmt3);
                        throw new Exception("Database query failed: " . mysqli_error($connexion));
                    }
                }
            }
        }
        return $laUne;
    }
}

//*    

//* evenement
    // fonction pour récupérer les événements à venir
    // function getUpcomingEvents(){
    //     global $connexion;
    //     $connexion->set_charset("utf8");
    //     $req = "SELECT * FROM new_EVEN WHERE date_inscription >= CURDATE() AND categorie = 'evenement' ORDER BY date_debut ASC";
    //     $res = mysqli_query($connexion, $req);
    //     if (!$res) {
    //         throw new Exception("Database query failed: " . mysqli_error($connexion));
    //     } else {
    //         $events = [];
    //         while ($row = mysqli_fetch_assoc($res)) {
    //             $events[] = $row;
    //         }
    //         return $events;
    //     }
    // }
    function getUpcomingEvents(){
        global $connexion;

        $req = "SELECT * FROM EVEN_actucalend WHERE datedebinfo_us >= DATE_FORMAT(CURDATE(), '%y%m%d') ORDER BY datedebinfo_us DESC";
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

    // function getEventDetails($eventId) {
    //     global $connexion;
    //     $connexion->set_charset("utf8");
    //     $req = "SELECT n.*, a.* FROM new_EVEN n JOIN animateur a ON n.id_animateur = a.anim_id WHERE n.id = ?";
    //     $stmt = mysqli_prepare($connexion, $req);
    //     if ($stmt === false) {
    //         throw new Exception("Failed to prepare SQL statement.");
    //     }
    //     mysqli_stmt_bind_param($stmt, "i", $eventId);
    //     mysqli_stmt_execute($stmt);
    //     $res = mysqli_stmt_get_result($stmt);
    //     if (!$res) {
    //         throw new Exception("Database query failed: " . mysqli_error($connexion));
    //     } else {
    //         return mysqli_fetch_assoc($res);
    //     }
    // }
    
    function getEventDetails($eventId) {
        global $connexion;
        // $connexion->set_charset("utf8");
        $req = "SELECT * FROM EVEN_actucalend WHERE id = ?";
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

//* info GAP
    // fonction pour récupérer les GAP/GAV à venir
    function getGapInfo(){
        global $connexion;
        $req = "SELECT * FROM GAP_actucalend WHERE datedebinfo_us >= DATE_FORMAT(CURDATE(), '%y%m%d') ORDER BY datedebinfo_us ASC";
        $res = mysqli_query($connexion, $req);
        if (!$res) {
            throw new Exception("Database query failed: " . mysqli_error($connexion));
        } else {
            $gapInfo = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $gapInfo[] = $row;
            }
            return $gapInfo;
        }
    }
    // fonction pour récupérer un GAP/GAV spcécifique avec son id
    function getGapInfoById($gapId){
        global $connexion;
        $req = "SELECT * FROM GAP_actucalend WHERE id = ?";
        $stmt = mysqli_prepare($connexion, $req);
        if ($stmt === false) {
            throw new Exception("Failed to prepare SQL statement.");
        }
        mysqli_stmt_bind_param($stmt, "i", $gapId);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        if (!$res) {
            throw new Exception("Database query failed: " . mysqli_error($connexion));
        } else {
            return mysqli_fetch_assoc($res);
        }
    }

    // fonction pour récupérer un new_GAP/GAV spécifique avec son id
    function getNewGapInfoById($gapId){
        global $connexion;
        $connexion->set_charset("utf8");
        $req = "SELECT n.*, a.* FROM new_GAP_GAV n JOIN animateur a ON n.id_animateur = a.anim_id WHERE n.id = ?";
        $stmt = mysqli_prepare($connexion, $req);
        if ($stmt === false) {
            throw new Exception("Failed to prepare SQL statement.");
        }
        mysqli_stmt_bind_param($stmt, "i", $gapId);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        if (!$res) {
            throw new Exception("Database query failed: " . mysqli_error($connexion));
        } else {
            return mysqli_fetch_assoc($res);
        }
    }

//*