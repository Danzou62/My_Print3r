<?php include("_header.php"); ?>

	<!-- Form Name -->
<legend>Envoyer mes Contenus</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="Mes_crea">Titre de votre création</label>
  <div class="controls">
    <input id="Mes_crea" name="Mes_crea" placeholder="Ex : Vase, figurine..." class="input-xlarge" required="" type="text">
    <p class="help-block">Avec le moins de mots possible décrivez votre création</p>
  </div>
</div>

<!-- Button Drop Down -->
<div class="control-group">
  <label class="control-label" for="buttondropdown">catégorie</label>
  <div class="controls">
    <div class="input-append">
      <input id="buttondropdown" name="buttondropdown" class="input-xlarge" placeholder="Choississez votre catégorie" required="" type="text">
      <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">
          Trouver
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Maison</a></li>
          <li><a href="#">Décoration</a></li>
          <li><a href="#">Modélisme</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="description">Description</label>
  <div class="controls">                     
    <textarea id="description" name="description"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="control-group">
  <label class="control-label" for="filebutton">Choisir votre Fichier</label>
  <div class="controls">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- File Button --> 
<div class="control-group">
  <label class="control-label" for="pictures">Images</label>
  <div class="controls">
    <input id="pictures" name="pictures" class="input-file" type="file">
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id"></label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success">Valider</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
  </div>
</div>

</fieldset>
</form>
<div class="row">

<div class="span9">
<form class="form-horizontal">  
        <fieldset>  
          <legend>Formulaire de contact</legend>  
          <div class="control-group">  
            <label class="control-label" for="input01">Titre</label>  
            <div class="controls">  
              <input type="text" class="input-xlarge" id="input01">  
              <p class="help-block">Ecrivez-ici le nom de votre création </p>  
            </div>  
          </div>   
          <div class="control-group">  
            <label class="control-label" for="select01">Select list</label>  
            <div class="controls">  
              <select id="select01">  
                <option>Maison</option>  
                <option>Décoration</option>  
                <option>Modélisme</option>  
                <option>Autres</option>               
              </select>  
            </div>  
          </div>  
          <div class="control-group">  
            <label class="control-label" for="fileInput">Joindre un fichier</label>  
            <div class="controls">  
              <input class="input-file" id="fileInput" type="file">  
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
            <button class="btn">Annuler<a href="mon_projet.html"></a></button><a href="mon_projet.html">  
          </a></div><a href="mon_projet.html">  
		  </a></fieldset></form></div><a href="mon_projet.html">
          
		</a></div>
	
<?php include("_footer.php"); ?>   