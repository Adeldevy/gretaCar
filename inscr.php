<?php

require_once ('testmail.php') ;

//recuperation des données saisies en html
$Nom = $_POST["nom"];
$Prenom = $_POST["prenom"];
$Adresse = $_POST["adresse"];
$Ville = $_POST["ville"];
$Codepostal = $_POST["cp"];
$Mail = $_POST["email"];
$Tel = $_POST["tel"];
$Nom_etab = $_POST["nom_etab"];
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

//parametre du srv bdd
$servername = 'localhost';
$dbname = 'covoit1'; // nom de base de bdd
$user = 'root'; // utilisateur de la bdd
$mdp = ''; // mot de passe vide

try {

    //echo 'connexion bdd <br/>';
    $bdd = new PDO ("mysql:host=$servername;dbname=$dbname",$user,$mdp) ;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

    //echo "Requete insertion\n";
        $bddprepare = $bdd->prepare(
            "INSERT INTO user (usr_nom,usr_prenom,usr_adresse,usr_ville,usr_codepostal,usr_email,usr_tel,nom_etab,usr_mdp1)
            VALUES (:Nom, :Prenom, :Adresse, :Ville, :CP, :Mail, :Tel, :Nom_etab, :Mdp1)");
        $bddprepare->bindParam(':Nom',$Nom);
        $bddprepare->bindParam(':Prenom',$Prenom);
        $bddprepare->bindParam(':Adresse',$Adresse);
        $bddprepare->bindParam(':Ville',$Ville);
        $bddprepare->bindParam(':CP',$Codepostal);
        $bddprepare->bindParam(':Mail',$Mail);
        $bddprepare->bindParam(':Tel',$Tel);
        $bddprepare->bindParam(':Nom_etab',$Nom_etab);
        $bddprepare->bindParam(':Mdp1',$mdpcrypte);
        $bddprepare->execute();

    //echo 'insertion bdd reussie <br/>';
    $bdd = null; // destruction de l'objet

}
catch (PDOException $erreur) {
    echo $erreur.' -- '.$erreur->getMessage();
}

//echo 'Mot de passe crypte : '.$mdpcrypte;
}

header('location:index.php');
