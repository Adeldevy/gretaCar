<?php
include("DbConfig.php");
try {

$bdd = new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);

foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_ville,nom_etab,usr_id
 FROM user WHERE usr_nom =  "'.$_SESSION['nom'].'" AND usr_prenom  = "'
.$_SESSION['prenom'].'"AND usr_email ="'.$_SESSION['email'].'"') as $row)
 {
    $nom = $row[0];
    $prenom = $row[1];
    $ville = $row[2];
    $nom_etab= $row[3];



   }

     }
   catch (PDOException $erreur) {
      echo $erreur.' -- '.$erreur->getMessage();
   }
