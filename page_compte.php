<?php 
	$nav_en_cours = 'compte';
	include('include_header.php');
?>
		
<form class="form-horizontal" id="registration" method='post' action='register.php'>
<fieldset>

<div class="row">

<div class="span9">
<center>
<legend>Inscription</legend>
<div class="control-group">
<label class="control-label">Pseudo:</label>
<div class="controls">
<input type="text" id="username" name="user_name">
</div>
</div>

<div class="control-group">
  <label class="control-label" for="filebutton" >Choisir votre Avatar</label>
  <div class="controls">
    <input id="filebutton" name="filebutton" class="input-file" type="file" style=" line-height: 10px; margin-top: 5px; ">
  </div>
</div>

<div class="control-group">
<label class="control-label">Mot de Passe:</label>
<div class="controls">
<input type="text" id="password" name="password1">
</div>
</div>
<div class="control-group">
<label class="control-label">Confirmation:</label>
<div class="controls">
<input type="text" id="password" name="password2" style= "margin-top: 11px; ">
</div>
</div>
<div class="control-group">
<label class="control-label">Email</label>
<div class="controls">
<input type="text" id="email" name="email">
</div>
</div>
</div>
</div>

<div class="row">
<center>
  <div class="col-xs-2">
  <label class="control-label">Ville:</label>
    <input type="text" class="form-control" placeholder=".col-xs-2">
  </div>
  <div class="col-xs-3">
  <label class="control-label">Code postal:</label>
    <input type="text" class="form-control" placeholder=".col-xs-3">
  </div>
</div>






<div class="row">
<center>
<div class="span4">
<div class="control-group">
<label class="control-label">Ville:</label>
<div class="controls">
<input type="text" id="password" name="password1">
</div>
</div>
</div>

<div class="span3">
<center>
<div class="control-group">
<label class="control-label">Code postal:</label>
<div class="controls">
<input type="text" id="password" name="password1">
</div>
</div>
</div>
</div>

<div class="row">
<center>
<div class="span2">
<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<button type="submit" class="btn btn-success" >valider</button>
</div>
</div>
</div>
<div class="span2">
<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<button type="submit" class="btn btn-cancel" >Annuler</button>
</div>
</div>
</div>


</div>
</div>
</fieldset>

</div>
</div>

</form>

<?php include('include_footer.php'); ?>