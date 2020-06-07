<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * https://phpmyadmin.mywebecom.ovh/db_structure.php?server=1&db=eleves_mkhanpherian
 */

$email = $_POST["email"];


//parametre du srv bdd
$servername = 'localhost';
$dbname = 'covoit1'; // nom de base de bdd
$user = 'covoit1'; // utilisateur de la bdd
$pass = 'covoit1'; // mot de passe vide

try {

    //connexion bdd
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //requete sql
    foreach($bdd->query('SELECT usr_email FROM user WHERE usr_id="'.$usr_id.'"')as $row)
{






    $user->set("email", $email);
    $usr_id = $user->get("id");

}

$test = new model_essaie();
$test->set("user", $usr_id);
$test->insert();


$msg = "bonjour";

$message  = '<html><head><meta http-equiv="Content-Type" content="text/html" charset="UTF-8"></head>';
$message .= "<body>";
$message .= "<h2>Bonjour $email</h2>";

$message .= $msg . "<br>";

$message .= "</body></html>";


echo $message;

$headers = "MIME-Version : 1.0\n";
$headers .= "Content-Type: text/html; charset=UTF-8\n";
$headers .= 'From:"Montre allain " <site>' . "\n";



$sujet = 'Essyer';

mail($email,$sujet, $message,$headers);
}
catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
 }