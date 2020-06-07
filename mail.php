<?php
// récupération des

$usr_id = $_GET['id'];
$subject = $_GET['objet'];
$message = $_GET['message'];
$usr_id = $_GET['usr_id'];
session_start();
echo $usr_id;

if (isset($_SESSION['usr_id']))//On vérifie que le variable existe.
{
    $destinatair=$_SESSION['usr_id'];//On récupère la valeur de la variable de session.
}


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
    foreach($bdd->query('SELECT usr_email FROM user WHERE usr_id="'.$usr_id.'"')as $row)
{

  $dest = $row[0];
  echo $dest;
}



$subject = "bonjour - ";


    //########## VARIABLES DU MAIL ENVOYE ############
    $site = "greta-car.tech";
    $siteweb = "http://karima.greta42.tech/greta-car"; // entrez ici l'url complète de votre site web avec http://
    $maildest1 = $mail_env; $_SESSION [MAIL];// a ajouter
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers= "From: manalcombet@gmail.com". "\r\n" .
                "Reply-to: covoit2020@gmail.com". "\r\n".
                "MIME-Version: 1.0" . "\r\n".
                "Content-type: text/html; charset=UTF-8" . "\r\n";
    //---------------------------------------------------
    Mail($maildest, $subject,$message,$headers);
    echo $maildest1.'--'.$subject.'--'.$message;  // pour voir les données envoyées
}
    catch (PDOException $erreur) {
        echo $erreur.' -- '.$erreur->getMessage();
     }
    
