
<?php


session_start();

?>


<?php include("template/head.php"); ?>

  <!-- NAVBAR-->

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="connexionUser.html"><img src="logo/logo2.png" height="50" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">


        <li class="nav-item">
        <a class="nav-link" href="moderateur-liste.php">Liste des inscrits</a>
          

        </li>
        

    </div>
            
            <form method="POST" action="template/deconnexion.php">
            <button>
              <a class="dropdown-item" type="submit">Déconnexion</a>

          </button>
          </form>

          

    </ul>
  </nav>
  <div id="corps">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container" style="padding-top:50px;">
    <h2 class="text-center">Modifier vos informations</h2></br>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <form action="modify-moderateur.php" method="post">
                        <div class="card border-dark rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-dark text-white text-center py-2">
                                    
                                    <p class="m-0">Veuillez changer les champs</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                               
                            
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                       
                                        <input type="text" class="form-control" name="newmail" placeholder="Nouveau email" value="<?php ?>" required maxlength="40"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        
                                        <input type="text" class="form-control" name="newpass" placeholder="Nouveau mot de passe" value="<?php ?>" required maxlength="3"/>
                                    </div>
                                </div>
                                <div class="text-center">
                                        <input type="submit" value="Modifier" class="btn btn-dark btn-block rounded-0 py-2" />
                                    </div>



                                    
               