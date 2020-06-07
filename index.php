

	<?php include("template/head.php"); ?>

	<?php include("template/navbar.php"); ?>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="conex.php" method="post">
					
				<div class="row">
					<span class="login100-form-title p-b-34">
						Connexion
					</span>

				
					<div class="adel">
						<img src="logo/logo2.png" height="100px" alt="logo"></img>
					</div>
					</div>

					<div class="row">
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="mdp1" placeholder="Mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							se connecter
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">

						</span>

						<a href="#" class="txt2">
							Mot de passe oublié?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#inscriptionModal" data-toggle="modal" class="txt3">
							S'inscrire
						</a>
					</div>
				</form>
</div>
				<div class="login100-more" style="background-image:url('images/bg-01.jpg')"></div>
			</div>
		</div>
	</div>


	<?php include("template/modal-inscription.php"); ?>

	<?php include("template/modal-contact.php"); ?>

	<?php include("template/footer.php"); ?>



</body>



</html>