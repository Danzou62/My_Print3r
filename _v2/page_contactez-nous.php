<?php 
	$nav_en_cours = 'contact';
	include('include_header.php');
?>
	  
	<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contactez-nous <small><br>Faites nous part de vos remarques</br></small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form style="margin-left :10px;">
                <div class="row" style="width: 740px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrer votre nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Entrer votre e-mail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choisir une catégorie dans la liste :</option>
                                <option value="service">Service client</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Votre Message</label>
                            <textarea name="message" id="message"  style="width:350px;" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Notre bureau</legend>
            <address>
                <strong>Print3r, cpt.</strong><br>
                43 avenue de la deperdition<br>
                Massy, CP 91300<br>
                <abbr title="Phone">
                    Telephone:</abbr>
                06 38 65 65 65
            </address>
            <address>
                <strong>Notre adresse e-mail</strong><br>
                <a href="mailto:#">print3r.service@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>


<?php include("include_footer.php"); ?>