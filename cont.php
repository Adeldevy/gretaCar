<?php
include("DbConfig.php");


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$centredeformation = $_POST['nom_etab'];
$messages = $_POST['messages'];


try {
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bddprepare = $bdd->prepare(
        "INSERT INTO message (mes_nom,mes_prenom,mes_email,mes_cf,mes_messages)
        VALUES (:Nom, :Prenom, :Mail, :Cf, :Messages)");
    $bddprepare->bindParam(':Nom',$nom);
    $bddprepare->bindParam(':Prenom',$prenom);
    $bddprepare->bindParam(':Mail',$mail);
    $bddprepare->bindParam(':Cf',$centredeformation);
    $bddprepare->bindParam(':Messages',$messages);
    $bddprepare->execute();
    echo "Insertion BDD réussie";
    $bdd = null; //Destruction de l'objet
    header('location:index.php');
} catch (PDOException $erreur) {
    echo $erreur."--".$erreur->getMessage()."\n";
    die();
}
