<?php


            try { 

$bdd = new PDO('mysql:host=localhost;dbname=covoit1', 'root', '');

  

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