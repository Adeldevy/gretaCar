<?php
function dbConnect(){
	try {
		$error = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $bdd = new PDO('mysql:host=localhost;dbname=covoit1;charset=utf8','root','', $error);
        return $bdd;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}


function isAdmin($mail){
	$bdd = dbConnect();

	$req = $bdd->prepare('SELECT * FROM identif_moderateur WHERE moderateur_mail = :email');

	$req->execute(array(
	    'email' => $mail
	));

	$resultat = $req->fetch();

	return $resultat;
}

function ListInscrit($nom, $prenom, $ville, $email, $tel, $etab){
	$bdd =dbconnect();
	foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_ville, usr_email, usr_tel, nom_etab
  FROM user') as $row)
  {
      $nom = $row[0];
      $prenom = $row[1];
      $ville = $row[2];
      $email = $row[3];
      $tel = $row[4];
      $etab = $row[5];
  }
}


 ?>
