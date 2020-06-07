<?php

//recuperation des données saisies en html
$Mail = $_POST["mail"];
$Code = $_POST["code"];

//cryptage mdp
$grain='8h!6./?£*oµ5%z+°ù²#|57';
$mdpcrypte = sha1(sha1($Code).$grain);

//parametre du srv bdd
$servername = 'localhost';
$dbname = 'covoit1'; // nom de base de bdd
$user = 'root'; // utilisateur de la bdd
$pass = ''; // mot de passe vide


try {

    //connexion bdd
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //requete sql
    foreach($bdd->query('SELECT moderateur_mail, moderateur_code FROM identif_moderateur WHERE moderateur_mail="'.$Mail.'" AND moderateur_code="'.$mdpcrypte.'" ')as $row)
{
    $Mail= $row[0];
    $mdpcrypte = $row[1];
 

}

if ($Mail !=null)
{

    session_start();
    $_SESSION['connect']=0;
    $_SESSION['mail']=$nom;
  
    $bdd = null;
    header('location:moderateur_profile.php');
} else header('location:moderateur.php');


$bdd = null;
}

catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}
