<?php 
	$nav_en_cours = 'upload';
	include('include_header.php');
?>
<div class="container auth">

	<!-- Form Name -->
<legend1>
<h1 class="text-center"> Envoyer mes Contenus </h1>
</legend1>
<div id="big-form" class="well auth-box">
      <form>
	  <fieldset>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="Mes_crea">Titre de votre creation</label>
  <div class="controls">
    <input id="Mes_crea" name="Mes_crea" placeholder="Ex : Vase, figurine..." class="input-xlarge" required="" type="text">
    <p class="help-block">Avec le moins de mots possible decrivez votre creation</p>
  </div>
</div>

<!-- Button Drop Down -->
<div class="control-group">
  <label class="control-label" for="buttondropdown">categorie</label>
  <div class="controls">
    <div class="input-append">
      <input id="buttondropdown" name="buttondropdown" class="input-xlarge" placeholder="Choississez votre categorie" required="" type="text">
      <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">
          Trouver
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Maison</a></li>
          <li><a href="#">Decoration</a></li>
          <li><a href="#">Modelisme</a></li>
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
</div>
</div>
	
<?php include('include_footer.php'); ?> 