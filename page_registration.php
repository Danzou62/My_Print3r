<?php 
	$nav_en_cours = 'registration';
	include('include_header.php');
?>

<div class="container auth">
<legend1>
    <h1 class="text-center">Formulaire d'inscription  </h1>
	<legend1>
    <div id="big-form" class="well auth-box">
      <form>
        <fieldset>

        
          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="textinput">Votre Pseudo</label>  
            <div class="">
              <input id="textinput" name="textinput" placeholder="Pseudo" class="form-control input-md" type="text">
            </div>
          </div>

		  <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="textinput">Votre Adresse</label>  
            <div class="">
              <input id="textinput" name="textinput" placeholder="ex: 2 rue Gambetta" class="form-control input-md" type="text">
            </div>
          </div>
		  
		  <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="textinput">Votre code Postal</label>  
            <div class="">
              <input id="textinput" name="textinput" placeholder="ex: 75001" class="form-control input-md" type="text">
            </div>
          </div>
		  
          <!-- Password input-->
          <div class="form-group">
            <label class=" control-label" for="passwordinput">Mot de Passe</label>
            <div class="">
              <input id="passwordinput" name="passwordinput" placeholder="Mot de passe" class="form-control input-md" type="password">
            </div>
          </div>
		  <!-- Mail input-->
          <div class="form-group">
            <label class=" control-label" for="emailinput">Adresse E-mail</label>
            <div class="">
              <input id="emailinput" name="emailinput" placeholder="ex: john.doe@gmail.com" class="form-control input-md" type="email">
            </div>
          </div>
          <!-- Select Basic -->
          <div class="form-group">
            <label class=" control-label" for="selectbasic">Pays</label>
            <div class="">
              <select id="selectbasic" name="selectbasic" class="form-control">
                <option value="1">France</option>
                <option value="2">Taiwan</option>
              </select>
            </div>
          </div>

          <!-- Multiple Radios -->
          <div class="form-group">
            <label class=" control-label" for="radios">Quel est votre genre</label>
            <div class="">
              <div class="radio">
                <label for="radios-0">
                  <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                  Homme
                </label>
              </div>
              <div class="radio">
                <label for="radios-1">
                  <input name="radios" id="radios-1" value="2" type="radio">
                  Femme
                </label>
              </div>
            </div>
          </div>

          <!-- Multiple Radios (inline) -->
          <div class="form-group">
            <label class=" control-label" for="radios">Possedez-vous une imprimante 3D?</label>
            <div class=""> 
              <label class="radio-inline" for="radios-0">
                <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                Oui
              </label> 
              <label class="radio-inline" for="radios-1">
                <input name="radios" id="radios-1" value="2" type="radio">
                Non
              </label> 
              <label class="radio-inline" for="radios-2">
                <input name="radios" id="radios-2" value="3" type="radio">
                De quoi s'agit t-il?
              </label> 
              <label class="radio-inline" for="radios-3">
                <input name="radios" id="radios-3" value="4" type="radio">
                Jamais
              </label>
            </div>
          </div>


		  <!-- Button (Double) -->
          <div class="form-group">
		  <center>
            <label class=" control-label" for="button1id">Je valide les informations</label>
            <div class="">
			
              <button id="button1id" name="button1id" class="btn btn-success">Valider</button>
              <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
            </div>
          </div>

        
        </fieldset>
		
		
</div>
<?php include('include_footer.php'); ?>