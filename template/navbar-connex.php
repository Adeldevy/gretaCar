  <!-- NAVBAR-->

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="membre.php"><img src="logo/logo2.png" height="50" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">


        <li class="nav-item">

          <a class="nav-link" data-toggle="modal" href="#contactModal" title="contactez le modérateur">contact</a>

        </li>

    </div>



    <ul class="nav navbar-nav navbar-right"><span class="collapse navbar-collapse">


        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown"
            aria-haspopup="true">Mon compte</a>

          <div class="dropdown-menu" aria-labelledby="dropdown04">

            <a class="dropdown-item" href="./editerUser.php">Mon profil</a>
            <form method="POST" action="template/deconnexion.php">
            <button>
              <a class="dropdown-item" type="submit">Déconnexion</a>

          </button>

          </form>

    </ul>
  </nav>

  