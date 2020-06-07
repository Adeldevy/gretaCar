<?php
include("DbConfig.php");
try { 

$bdd = new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);

  foreach($bdd->query('SELECT usr_nom, usr_prenom, usr_adresse, usr_ville, usr_codepostal, usr_email, usr_tel, nom_etab, usr_mdp1
   FROM user WHERE usr_nom =  "'.$_SESSION['nom'].'" AND usr_prenom  = "'
  .$_SESSION['prenom'].'"AND usr_email ="'.$_SESSION['email'].'"') as $row)
   {
      $nom = $row[0];
      $prenom = $row[1];
      $adresse= $row[2];
      $ville = $row[3];
      $codepostal= $row[4];
      $mail = $row[5];
      $tel= $row[6];
      $nom_etab= $row[7];
      $mdp= $row[8];  
      
   }  
    
   }
   catch (PDOException $erreur) {
      echo $erreur.' -- '.$erreur->getMessage();
   }
  
?>
