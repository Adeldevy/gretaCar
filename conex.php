<?php

//recuperation des données saisies en html
$Mail = $_POST["email"];
$Motdepasse1 = $_POST["mdp1"];

//cryptage mdp
$grain='8h!6./?£*oµ5%z+°ù²#|G5';
$mdpcrypte = sha1(sha1($Motdepasse1).$grain);

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
    foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_email FROM user WHERE usr_email="'.$Mail.'" AND usr_mdp1="'.$mdpcrypte.'" ')as $row)
{
    $nom = $row[0];
    $prenom = $row[1];
    $email = $row[2];

//header("location:inscr.html");
}

if (($nom !=null)&&($prenom !=null))
{

    session_start();
    $_SESSION['connect']=0;
    $_SESSION['nom']=$nom;
    $_SESSION['prenom']=$prenom;
    $_SESSION['email']=$email;
    $bdd = null;
    header('location:membre.php');
} else header('location:index.php');

//echo 'bonjour '.$prenom.' '.$nom.'<br/>';
$bdd = null;
}

catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}
