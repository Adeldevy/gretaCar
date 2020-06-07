<?php

session_start();

?>
  <!-- NAVBAR-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="connexionUser.html"><img src="logo/logo2.png" height="50" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
        
          <a class="nav-link" href="moderateur-liste.php">Mon profile</a>
        </li>
    </div>
          <form method="POST" action="template/deconnexion.php">
            <button>
            
              <a class="dropdown-item" type="submit">Déconnexion</a>

          </button>
          </form>
    </ul>
  </nav>
  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>

      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>

<body>

  <?php include("template/head.php"); ?>
<center>

<div class="container marketing  " id="couleurtext"><br>

<center><h2 class="inscrit">liste des personnes inscrites </h2></center>

<div class="container">
              <hr style="margin:5px 0 5px 0;">
              <div class='row' id="listinscr">
                                        <div class='col' id='tableau'><f3>NOM PRENOM</f3></div>
                                        <div class='col' id='tableau'><f3>VILLE</f3></div>
                                        <div class='col' id='tableau'><f3>ADRESSE MAIL</f3></div>
                                        <div class='col' id='tableau'><f3>TELEPHONE</f3></div>
                                        <div class='col' id='tableau'><f3>ETABLISSEMENTS</f3></div>

                                        </div>
              <?php
      
                                  try {

                                  $bdd = new PDO('mysql:host=localhost;dbname=covoit1', 'root', '');

                                    foreach($bdd->query('SELECT usr_nom, usr_prenom,usr_ville, usr_email, usr_tel, nom_etab
                                    FROM user') as $row)
                                    {
                                        $nom = $row[0];
                                        $prenom = $row[1];
                                        $ville = $row[2];
                                        $email = $row[3];
                                        $tel = $row[4];
                                        $etab = $row[5];

                                        ?>

                                        <div class="row">
                                        
                                        <div class="col"></br>
                                         <?php echo $nom.'-'.$prenom?><form  method="POST" action="delet.php" onsubmit="return confirm('vous êtes sûr de vouloir supprimer ce compte?');">
                                          <input class="croix" type="submit" name="contacter" value="❌ Supprimer"/>
                </form>
                                          </div> 
                                          

                                          <div class="col"></br>
                                          <?php echo $ville?>
                                          </div>

                                          <div class="col"></br>
                                          <?php echo  $email?>
                                          </div>

                                          <div class="col"></br>
                                          <?php echo $tel?>
                                          </div>

                                          <div class="col"></br>
                                          <?php echo $etab?>
                                          
                                          </div>
                                        </div>
                                        <!-- echo $nom.' - '.$prenom.' de '.$ville.'-'.$email.'-'.$tel.'<br/>'; -->

                                        <?php
                                    }

                                  }
                                    catch (PDOException $erreur) {
                                    echo $erreur.' -- '.$erreur->getMessage();
                                     }

                                    ?>
            </div>
            <div class="container gris">


</div>
</div>

<!-- Le pied de page -->


<?php include("template/footer.php"); ?>


<script src="js/main.js"></script>
