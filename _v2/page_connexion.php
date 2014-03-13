<?php 
	$nav_en_cours = 'login';
	include('include_header.php');
?>

    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>Saisissez votre e-mail :</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">Connexion</p>
                
                <form class="login">
                <input type="text" placeholder="Identifiant" />
                <input type="password" placeholder="Mot de passe" />
                <input type="submit" value="Connexion" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label class="remember-me">
                                	<input type="checkbox"/>
                                    Se rappeler de moi
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">Mot de passe oubli&eacute;</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


<?php include('include_footer.php'); ?>