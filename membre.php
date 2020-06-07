<?php


session_start();

?>

<body>

  <?php include("template/head.php"); ?>
  <?php include("template/navbar-connex.php"); ?>
  <?php include("template/modal-contact.php"); ?>
 <center>
  <div class="container marketing  " id="couleurtext"><br>
<?php

    $prenom = $_SESSION['prenom'];

    if(date("H")<18){

    echo 'Bonjour et bienvenue '.$prenom.' dans votre espace personnel';

    }else{

      echo 'Bonsoir et bienvenue '.$prenom.' dans votre espace personnel';

    }

?>
  </div>
  </center>
<div class="row">
    <div class="col">
    <!--  -->
      <?php require_once ('requette-membre.php');?>

      <div class="container-fluid">
        <div class="row">
          <div class="col ">


            <!-- <div class="col-sm-6"> -->
     <!-- <h4 style="color:#00b1b1;"> <?php // echo $nom. ' '.$prenom; ?> </h4></span><br>  -->
            <h4 style="color:#00b1b1;">Mes informations</h4><br>
              <div class="row">
                <div class="col">
                  Nom :</div>
                <div class="col">
                  <?php echo $nom; ?>
                </div>
              </div>
              <div class="row">
                <div class="col ">
                  Prenom :</div>
                <div class="col">
                  <?php echo $prenom; ?>
                </div>

              </div>

              <div class="row">
                <div class="col">
                  Ville :</div>
                <div class="col">
                  <?php echo $ville; ?>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  Formation :</div>
                <div class="col">
                  <?php echo $nom_etab; ?>
                </div>
              </div>
              <div class="col">
                <hr style="margin:5px 0 5px 0;">
                <h4 style="color:#00b1b1;">Liste des personnes de votre centre de formation</h4><br>

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


          ?>
          <div class="row">
            <div class="col">
            Nom: <?php echo $nom.' Prenom: '. $prenom.' de '. $ville.'<br/>';?>
          </div>
          <div class='col'>

                <form method="POST" action="mail.php" onsubmit="return confirm('Envoyer l\'email ?');">
                <input type="text" name="email" />
                <input type="hidden" name="usrid" value="<?php echo $usr_id?>">
                <input type="submit" name="contacter" value="contacter"/>
                </form>

          <!--  <form class="" action="mail.php" method="GET">

              <input type="text"  name="usr_id" value="usr_id" />

            <input type="submit"  value="me contacter"/></br>
            </form>-->
          </div>
        </div>
          <?php

      }

        }
      catch (PDOException $erreur) {
          //echo $erreur.' -- '.$erreur->getMessage();
          echo 'erreur de connexion';
      }

      ?>
            </div>
          </div>


          <div class="col-md-6 " id="modifier">
            <!-- taille de la boite --><br><br>


            <iframe width="100%" height="400px" frameborder="0" allowfullscreen
              src="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876?scaleControl=false&miniMap=true&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=true&searchControl=true&tilelayersControl=true&embedControl=false&datalayersControl=null&onLoadPanel=undefined&captionBar=false&fullscreenControl=true&locateControl=true&editinosmControl=false">
            </iframe>
            <p>
              <a href="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876">Voir en plein écran</a>
            </p>

          </div>


        </div>
      </div>
    </div>
  </div>

  <!-- <div class ="col" class="carte">
      <iframe width="100%" height="400px" frameborder="0" allowfullscreen
        src="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876?scaleControl=false&miniMap=true&scrollWheelZoom=true&zoomControl=true&allowEdit=false&moreControl=true&searchControl=true&tilelayersControl=true&embedControl=false&datalayersControl=null&onLoadPanel=undefined&captionBar=false&fullscreenControl=true&locateControl=true&editinosmControl=false">
      </iframe>
      <p>
        <a href="https://umap.openstreetmap.fr/fr/map/carte-sans-nom_420876">Voir en plein écran</a> -->
  </p>
  </div>
  </div>

  </div>


  <!-- Le corps -->

  <div class="container gris">


  </div>

  <!-- Le pied de page -->

  <!-- le footer merde mais je ne sais pas pourquoi il ne se met pas tout en bas-->

<?php include("template/footer.php"); ?>
