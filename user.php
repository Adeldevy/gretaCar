<?php 


session_start();

?>


  <!-- NAVBAR-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="connexionUser.+"><img src="./image/favicon.jpg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" data-toggle="modal" href="">Acueil</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" data-toggle="modal" href="">Déposer une annonce</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" data-toggle="modal" href="">chercher un trajet</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" data-toggle="" href="" title="contactez le modérateur">contact</a>
        </li>
        
        

       
          </div>
        </li>
      </ul>
      
    </div>


    <ul class="nav navbar-nav navbar-right"><span class="collapse navbar-collapse">


      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte</a>

        <div class="dropdown-menu" aria-labelledby="dropdown04">
         
          <a class="dropdown-item" href="./editerUser.php">Mon profil</a>
          <a class="dropdown-item" href="#">Mes Annonces</a>
          <a class="dropdown-item" href="#">Messagerie</a>  

          <form method="POST" action="deconnexion.php">
          <a class="dropdown-item" type="submit" >Déconnexion</a> </form>
          
        

       
    </ul></span>
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
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
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

  
 

  


  <div class="container marketing">

<h3> <?php echo'Bonjour ' .$_SESSION['prenom'] ;  ?> !</h3>
    <h1>Bonjour et bienvenue dans votre espace covoiturage de Greta</h1>

  </div>



    <footer class="container">
      <div class="row">
      <div class="bloc fleft n1">
        <h4>A propos</h4>
        <ul>
          <li><a href="qui-sommes-nous/">Qui sommes nous ?</a></li>
          <li><a href="conditions-dutilisation/">Conditions d'utilisation</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
      <div class="bloc fleft n2">
        <h4>Etudiant</h4>
        <ul>
          <li><a href="mon-compte/">Mon compte / S'inscrire</a></li>
                  <li><a href="https://mon-compte/">Proposer un trajet</a></li>
                </ul>
      </div>
      <div class="bloc rs fright">
        <h3>Restons Connecté</h3>
        <ul>
          <li class="facebook"><a href="https://www.facebook.com/gretacar.fr" target="_blank">facebook profil</a></li>
          <li class="twitter"><a href="https://twitter.com/gretacar_FR" target="_blank">twitter profil</a></li>
          <li class="google"><a href="https://plus.google.com/1" target="_blank">google+ </a></li>
        </ul>
      </div>

</div>

      <p class="float-right"><a href="#">Back to top</a></p>
      <p>© 2019 Greta, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
  
  
  
	
</body>
</html> 







