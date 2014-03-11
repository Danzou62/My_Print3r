<?php include("_header.php"); ?>	  
	  
	  <div class="container">
<div class="row">

<div class="span6 offset3">
<form class="form-horizontal">  
        <fieldset>  
          <legend>Formulaire de contact</legend>  
          <div class="control-group">  
            <label class="control-label" for="input01">Titre</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01">  
              <p class="help-block">Ecrivez-ici le résumé de votre question </p>  
            </div>  
          </div>   
          <div class="control-group">  
            <label class="control-label" for="select01">Select list</label>  
            <div class="controls">  
              <select id="select01">  
                <option>Questions</option>  
                <option>Réclamation</option>  
                <option>Proposition</option>  
                <option>Autres</option>               
              </select>  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="fileInput">Joindre un fichier</label>  
            <div class="controls">  
              <input class="input-file" id="fileInput" type="file" style=" line-height: 10px; margin-top: 5px;">  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="textarea">Description</label>  
            <div class="controls">  
              <textarea class="input-xlarge" id="textarea" rows="9"></textarea>  
            </div>  
          </div>  
          <div class="form-actions">  
            <button type="submit" class="btn btn-primary">Envoyer</button>  
            <button class="btn">Annuler<a href="mon_projet.html"></button>  
          </div>  
		  </div>
        </fieldset>  
		</div>
		</div>
		</div>
</form>  
</div>

<?php include("_footer.php"); ?>