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
                     <div class="input-group-prepend">
                                <span class="input-group-text">Nom</span>
                            </div>
              <input class="form-control" placeholder="Nom" type="text" name="nom" title="Nom"
                autocomplete="off" aria-label="Nom" required>
            </div>
         </div>

            <div class="col">
              <input class="form-control" placeholder="Prenom" type="text" name="prenom" title="Prenom"
                autocomplete="off" aria-label="Prenom" required>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <input class="form-control" placeholder="E-mail" type="text" name="email" title="" autocomplete="off"
                required>
            </div>
            <div class="col">
              
              
              <select placeholder="Votre etablissement" class="custom-select" name="nom_etab" id="selectCentreFormation" required>
                <option value='' selected disabled>Votre etablissement </option>
                
                <?php include("template/requete-centre-de-formation.php"); ?>


              </select>
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

