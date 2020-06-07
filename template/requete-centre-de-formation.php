<?php
include("DbConfig.php");

            try { 

$bdd = new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);

  

  foreach($bdd->query('SELECT nom_etab
   FROM centredeformation WHERE nom_etab = nom_etab') as $row)

   {
    $nom_etab=$row[0];
    echo '<option placeholder= "Centre de formation"   >'.$nom_etab.'</option>';
    $bdd = null; // destruction de l'objet

   }  

   }
   catch (PDOException $erreur) {
      echo $erreur.' -- '.$erreur->getMessage();
   }



  ?>        