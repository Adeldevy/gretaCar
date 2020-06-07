 <?php


    
 ?>

 <!--  Modal Inscription    ajout de pattern-->


 <form method="POST" action="inscr.php" class="formulaire">
   <div class="modal" id="inscriptionModal">
     <div class="modal-dialog">
       <div class="modal-content">

         <div class="modal-header">
           <h4 class="modal-title">Inscription</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <div class="modal-body">
           <div class="row">
             <div class="col">
              <input class="form-control" placeholder="Nom" type="text" name="nom" autocomplete="off" required>
             </div>
             <div class="col">
             <input class="form-control" placeholder="Prenom" type="text" name="prenom" autocomplete="off" required>
             </div>
           </div>

           <div class="row">

             <div class="col">
           <input class="form-control" placeholder="Adresse" type="text" name="adresse" title="adresse"
                 autocomplete="off" required>
             </div>

             <div class="col">
             <input class="form-control" placeholder="Ville" type="text" name="ville" title="ville" autocomplete="off"
                 required>
             </div>
           </div>


           <div class="row">
             <div class="col">
             <input class="form-control" placeholder="Code postal" type="text" name="cp" title="adresse"
                 autocomplete="off" required>
             </div>

             <div class="col">
             <input class="form-control" placeholder="E-mail" type="text" name="email" title="email"
                 autocomplete="off">
             </div>
           </div>


           <div class="row">
             <div class="col">
            <input class="form-control" placeholder="Téléphone" type="text" name="tel" title="téléphone"
                 autocomplete="off" required>
             </div>


             <div class="col">

         <select class="custom-select" name="nom_etab" id="selectCentreFormation" required>
               <option value='' selected disabled>Votre etablissement </option>
                 <?php include("template/requete-centre-de-formation.php"); ?>


               </select>
             </div>
           </div>


           <div class="row">
             <div class="col">
            <input class="form-control" placeholder="Mot de passe" type="password" name="mdp1"
                 title="doit contenir au moins 8 caractères d'au moins un chiffre et une lettre majuscule et minuscule"
                 autocomplete="off" required>
             </div>

             <div class="col">
             <input class="form-control" placeholder="Confirmer mot de passe" type="password" name="mdp2"
                 title="email" autocomplete="off">
             </div>
           </div>

         </div>


         <!-- Modal footer -->
         <div class="modal-footer">
           <button type="submit" class="btn btn-dark">valider</button>

        

         </div>
       </div>
     </div>
   </div>


 </form>