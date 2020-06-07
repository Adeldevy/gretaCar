<?php
session_start();



try {

    //connexion bdd
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //requete sql
    foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_email FROM user WHERE usr_email="'.$Mail.'" AND usr_mdp1="'.$mdpcrypte.'" ')as $row)
{
    $nom = $row[0];
    $prenom = $row[1];
    $email = $row[2];

//header("location:inscr.html");
}

	if(isset($_POST['mail']) && isset($_POST['code'])){

	$admin = isAdmin($_POST['mail']);
 echo $admin;


		    $_SESSION['mail'] = $admin['mail'];
		     $_SESSION['code'] = $admin;

header('Location: moderateur_profile.php');
die();
}

catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}
