<!DOCTYPE html>
<html lang="fr">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print3R</title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/custom.css" rel="stylesheet">
	
 <!-- custom styles -->
    
	<style id="holderjs-style" type="text/css"></style>

</head>

<!-- NAVBAR
================================================== -->
  <body screen_capture_injected="true" style="">
    <div class="navbar-wrapper">
      <div class="container">
      
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Print3R</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left">
                <li<?php if ($nav_en_cours == 'home') {echo ' class="active"';} ?>><a href="./">Accueil</a></li>
                <li<?php if ($nav_en_cours == 'faq') {echo ' class="active"';} ?>><a href="page_faq.php">FAQ</a></li>
                <li<?php if ($nav_en_cours == 'about') {echo ' class="active"';} ?>><a href="page_a-propos.php">A propos</a></li>
				<li<?php if ($nav_en_cours == 'contact') {echo ' class="active"';} ?>><a href="page_contactez-nous.php">Contactez-nous</a></li>
                <li<?php if ($nav_en_cours == 'login') {echo ' class="active"';} ?>><a href="page_connexion.php">Connectez-vous</a></li>      
                
                <li class="dropdown<?php if ($nav_en_cours == 'other') {echo ' active';} ?>">
                  <a href="page_conteu.php" class="dropdown-toggle" data-toggle="dropdown">Mod&egrave;les <b class="caret"></b></a>
                 
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Type de modele 1</li>
                    <li><a href="page_contenu.php">Page contenu</a href="page_contenu.php"></li>
                    <li><a href="page_creation1.php">page creation</a href="page_contenu.php"></li>
                    <li><a href="page_imagine.php">Page imagine</a href="page_contenu.php"></li>

                    <li class="divider"></li>                    
                    <li class="dropdown-header">Type de modele 2</li>
                    <li><a href="#">Separated link</a href="page_contenu.php"></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>

                    <li class="divider"></li>                    
                    <li class="dropdown-header">Type de modele 2</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>
                    <li><a href="#">One more separated link</a href="page_contenu.php"></li>

                  </ul>
				  
                </li>
              </ul>
			  <ul class="nav navbar-nav navbar-right ;">
        <form class="navbar-form navbar-right" role="search" style=" margin-bottom: 0px; margin-top: 6px;">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Rechercher" style=" margin-bottom: 0px; margin-top: 3px; ">
        </div>
        <button type="submit" class="btn btn-default" style="padding-right: 12px;width: 74px;margin-top: 3px;">OK</button>
      </form>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon Compte <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li<?php if ($nav_en_cours == 'compte') {echo ' class="active"';} ?>><a href="page_registration.php">Mon Compte</a></li>
            <li<?php if ($nav_en_cours == 'upload') {echo ' class="active"';} ?>><a href="page_upload.php">Mes Contenus</a></li>
          </ul>
        </li>
      </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="container">