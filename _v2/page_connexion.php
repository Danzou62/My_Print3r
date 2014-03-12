<?php 
	$nav_en_cours = 'login';
	include('include_header.php');
?>

<script language="javascript" type="text/javascript">
function autoheight () { 
var divHeight;
var obj = document.getElementById("bloc1").innerHTML;
if(obj.offsetHeight)          {divHeight=obj.offsetHeight;}
else if(obj.style.pixelHeight){divHeight=obj.style.pixelHeight;}
return divHeight;
}
</script>
      
	<div class="row">
	<div class="span12">
	<center>
	  <div class="well" id="bloc1" style="max-width: 400px; margin: 50 auto 10px;">
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Se connecter</h2>
        <input type="text" class="form-control" placeholder="adresse e-mail" required="" autofocus="">
		<input type="password" class="form-control" placeholder="Mot de passe" required="">
       <div class="checkbox" style="margin: 300;width: 235px;height: 32px;">
	   <label class="checkbox">
          <input type="checkbox" value="remember-me" margin="auto"> se souvenir de moi
        </label>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="max-width: 220px" > Connexion</button>
      </form>
	  </div>
    </div>
	</div>

	<div class="row">
	<div class="span12">
	<center>
	<div class="well" style="max-width: 400px ; height: @divHeight" ; margin: 100 auto;">
	<h2 class="form-signin-heading">Créer un compte</h2>
	<p> Vous n'avez pas encore de compte ! <br> Cliquer sur le lien ci-dessus pour en créer un <br>
	et ainsi vous permettre de profiter <br> tout les contenus disponibles sur le site </p>
	<button class="btn btn-lg btn-primary btn-block" type="submit" style="max-width: 220px; margin : 50 auto 10 px;">S'incrire</button>
	</div>
	
   </div>
   </div>


<hr class="bs-docs-separator">

<?php include('include_footer.php'); ?>