<?php

session_start();
require_once ('requette-editUser.php');?>
 
<html>


<?php include("template/head.php"); ?>
<style>

select,input[type=text],[type=number],[type=mail],[type=password] {
  width: 100%;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #555;
  outline: none;
}

select,input[type=text],[type=number],[type=mail][type=password]:focus {
  background-color: lightblue;
}

</style>
<body>

  <?php include("template/navbar-connex.php"); ?>
 
 <h4>votre profil</h4><br>

        
   <div class="container emp-profile">
           
                
           <div class="row">
              
               <div class="col-md-6">
                   <div class="tab-content profile-tab" id="myTabContent">
                       <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   
                                   <div class="row">

                                       <div class="col-md-6">
                                           <label>Nom :</label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $nom; ?></p>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Prenom : </label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $prenom; ?></p>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Adresse</label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $adresse; ?></p>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Code postal</label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $codepostal; ?></p>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Email :</label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $mail; ?></p>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Tel :</label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $tel; ?></p>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Centre de formation :</label>
                                       </div>
                                       <div class="col-md-6">
                                           <p><?php echo $nom_etab; ?></p>
                                       </div>
                                   </div>

                       </div>
                   </div>
                   <button type="button" id="affichUp" class="btn-warning"> <a>Modifier mon profil</a></button>
               </div>


            <div class="col-md-6"id="modifier">
          
               <div class="tab-content profile-tab" >
                       <div class="tab-pane fade show active" id="affichUp" role="tabpanel" aria-labelledby="home-tab">
                                <form method="POST" action="UpdateUser.php" enctype="">
                                   <div class="row">

                                       <div class="col-md-6">
                                           <label>Nom :</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="text" name="newnom"  value="<?php echo $nom; ?>">
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Prenom : </label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $prenom; ?>" />
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Adresse</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="text" name="newadresse" placeholder="Adresse" value="<?php echo $adresse; ?>" />
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Code postal</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="text" name="newcp" placeholder="cp" value="<?php echo $ville; ?>" />
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Email :</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="mail" name="newmail" placeholder="mail" value="<?php echo $mail; ?>" />
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Tel :</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="number" name="newtel" placeholder="Tel" value="<?php echo $tel; ?>" />
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Centre de formation :</label>
                                       </div>
                                       <div class="col-md-6">
                                       <select  name="newetab" id="selectCentreFormation" >
                                        <option value='' selected disabled><?php echo $nom_etab; ?> </option>
                                            <?php include("template/requete-centre-de-formation.php"); ?>
                                 </select>
                                       </div>

                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>Mot de passe :</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="password" name="mdp1" placeholder="votre mot de passe"value="" />
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <label>confirmation mot de passe :</label>
                                       </div>
                                       <div class="col-md-6">
                                       <input type="password" name="mdp2" placeholder="mot de passe 2"value="" />
                                       </div>
                                   </div>
                                   <button type="submit" class="btn-warning"> Valider</button>
                                </form>
                       </div>
                   </div>
               </div>
           </div>
                
   </div>







<!--Modal contact-->
<form method="POST" action="cont.php">
  <div class="modal " id="contactModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="row">
            
            <div class="col">
            <div class="input-group mb-3">  
                     
              <input class="form-control" placeholder="Nom" type="text" name="nom" title="Nom"
                autocomplete="off" aria-label="Nom" value="<?php echo $nom; ?>">
            </div>
         </div>

            <div class="col">
              <input class="form-control" placeholder="Prenom" type="text" name="prenom" title="Prenom"
                autocomplete="off" aria-label="Prenom" value="<?php echo $prenom; ?>" >
            </div>
          </div>

          <div class="row">
            <div class="col">
              <input class="form-control" placeholder="E-mail" type="text" name="email" title="" autocomplete="off"
              value="<?php echo $mail; ?>">
            </div>

            <div class="col">
              
              
               <input class="form-control" placeholder="Nom Etablissemnt" type="" name="nom établissement" title=""
                autocomplete="off"
              value="<?php echo $nom_etab; ?>">
                
         


            
            </div>

          </div>
          <div class="row">
            <div class="col">
              <label class="mes" for="Textarea1">Message :</label>
              <textarea class="form-control" id="message" name="messages" rows="3"></textarea>
            </div>
          </div>


        </div>
        <div class="modal-footer">
    
          <button type="submit" class="btn btn-dark">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
</form>














       

                  

              
     


   <script>
      $(document).ready(function () {

         $("#modifier").hide();
      });
      $("#affichUp").click(function () {
         $("#modifier").show();
      });
   </script>


</body>

</html>



   



<?php include("./template/footer.php"); ?>


</body>
</html>