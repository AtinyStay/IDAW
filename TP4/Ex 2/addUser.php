<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'TP4';
    $connexion = new mysqli($servername, $username, $password, $database);
    
    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $aime = $_POST['aime'];
        $remarque = $_POST['remarque'];

        $sql = "INSERT INTO `Utilisateur` (`ID`, `NOM`, `PRENOM`, `DATE`, `AIME`, `REMARQUE`) VALUES (NULL, '$nom', '$prenom', '$date', '$aime', '$remarque')";
        $result = $connexion->query($sql);
        if ($result){
            echo json_encode($result);
        }
            
    }
?>