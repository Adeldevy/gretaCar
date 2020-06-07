
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


      


    </div>
    </ul>
  </nav>

  <div id="corps">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container" style="padding-top:50px;">
    <h2 class="text-center">Se connecter</h2></br>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <form action="admin.php" method="post">
                        <div class="card border-dark rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-dark text-white text-center py-2">

                                    <p class="m-0">Saisissez votre mail et votre code unique</p>
                                </div>
                            </div>
                            <div class="card-body p-3">



                                <div class="form-group">
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control" name="mail" placeholder="Adresse email" value="<?php ?>" required maxlength="40"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control" name="code" placeholder="Votre code" value="<?php ?>" required maxlength="20"/>
                                    </div>
                                </div>
                                <div class="text-center">
                                        <input type="submit" value="Valider" class="btn btn-dark btn-block rounded-0 py-2" />
                                    </div>
