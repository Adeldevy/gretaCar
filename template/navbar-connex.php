  <!-- NAVBAR-->

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="connexionUser.html"><img src="logo/logo2.png" height="50" width="100"></a>
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
            aria-haspopup="true" aria-expanded="false">Mon compte</a>

          <div class="dropdown-menu" aria-labelledby="dropdown04">

            <a class="dropdown-item" href="./editerUser.php">Mon profil</a>
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
