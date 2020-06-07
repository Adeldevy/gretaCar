<?php

include("DbConfig.php");
//recuperation des données saisies en html
$Nom = $_POST["newnom"];
$Prenom = $_POST["newprenom"];
$Adresse = $_POST["newadresse"];
$Ville = $_POST["newville"];
$Codepostal = $_POST["newcp"];
$Mail = $_POST["newmail"];
$Tel = $_POST["newtel"];
$Nom_etab = $_POST["nawetab"];
$Motdepasse1 = $_POST["mdp1"];
$Motdepasse2 = $_POST["mdp2"];


echo "Nom : ".$Nom."<br/>";
echo "Prenom : ".$Prenom."<br/>";
echo "Adresse : ".$Adresse."<br/>";
echo "Ville : ".$Ville."<br/>";
echo "Codepostal : ".$Codepostal."<br/>";
echo "Email : ".$Mail."<br/>";
echo "Tel : ".$Tel."<br/>";
echo "Nom_etab : ".$Nom_etab."<br/>";
echo "Mdp1 : ".$Motdepasse1."<br/>";
echo "Mdp2 : ".$Motdepasse2."<br/>";


//test mot de passe identique
if ($Motdepasse1==$Motdepasse2)
{
//cryptage
//grain de sel :
$grain='8h!6./?£*oµ5%z+°ù²#|G5';
$mdpcrypte = sha1(sha1($Motdepasse1).$grain);


try {

    //echo 'connexion bdd <br/>';
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$mdp) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //echo "Requete insertion\n";
        $bddprepare = $bdd->query(
            "UPDATE user SET (usr_nom ='$Nom',usr_prenom ='$Prenom',usr_adresse = '$Adresse',usr_ville='$Ville',usr_codepostal='$Codepostal',
            usr_email='$Mail',usr_tel='$Tel',nom_etab='$Nom_etab',usr_mdp1='$mdpcrypte')
             WHERE id =?");
     
            $bddprepare->execute();
   
    $bdd = null; 

}
catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}





}
header('location:membre.php');