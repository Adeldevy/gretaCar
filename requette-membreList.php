<?php

    try {

    $bdd = new PDO('mysql:host=localhost;dbname=covoit1', 'root', '');

        foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_ville, usr_email, usr_id
        FROM user WHERE nom_etab="'. $nom_etab.'"') as $row)
        {
            $nom = $row[0];
            $prenom = $row[1];
            $ville = $row[2];
            $email = $row[3];
            $usr_id= $row[4];
        }
        ?>
        
        <div class="row">
        <div class="col">
        Nom: <?php echo $nom.' Prenom: '. $prenom.' de '. $ville.'<br/>';?>
        
        </div>
        <?php
    }
  catch (PDOException $erreur) {
      echo $erreur.' -- '.$erreur->getMessage();
  }

  ?>


            