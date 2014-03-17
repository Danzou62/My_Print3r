<!DOCTYPE html>

<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <head>  
    
    <title>Print3R</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- On ouvre la fenetre a la largeur de l'ecran -->
<!--
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"> 
-->
    <link href="bootstrap/css/bootstrap_1.css" rel="stylesheet" media="screen"> 

    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet"> <!-- Integration du CSS responsive Bootstrap -->
	<script src="bootstrap/js/jquery-1.10.2.min.js"></script>
	
	
	<script type="text/javascript"> <!-- script pour mettre le active sur le lien cliqué -->
		$('.nav li a').on('click', function() {
			alert('clicked');
			$(this).parent().parent().find('.active').removeClass('active');
			$(this).parent().addClass('active');
		});
	</script>
  </head>
  
  <body style="padding-top: 0px">
    
    <div class="container">    	<!-- Conteneur principal -->
      
      <div class="navbar navbar-inverse">	<!-- Barre de navigation -->
        <div class="navbar-inner">
        		
            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">	<!-- Bouton apparaissant sur les resolutions mobiles afin de faire apparaitre le menu de navigation -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
          <a class="mavbar-brand" href="#">Print3R</a>
          
          <!-- Structure du menu -->
          <div class="nav-collapse collapse" style="height: 0px;">
            <ul class="nav">
              <li class="active"><a href="index.php">Accueil</a></li>
			  <li><a href="page_connexion.php">Mon compte</a></li>
              <li><a href="#">A propos</a></li>
              <li><a href="page_contactez-nous.php">Contactez-nous</a></li>
              <!-- Menu deroulant -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contenu <b class="caret"></b></a>
                <ul class="dropdown-menu">
				  <li class="nav-header">Telechargement</li>
                  <li><a href="page_contenu.php">Modelisme</a></li>
                  <li><a href="page_contenu.php">Maison</a></li>
				  <li><a href="page_contenu.php">Decoration</a></li>
				  <li><a href="page_contenu.php">Divers</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Logiciels</li>
                  <li><a href="#">Lien 1</a></li>
                  <li><a href="#">Lien 2</a></li>
                </ul>
              </li>
            </ul>
            
            <!-- Champ de recherche -->
            <form class="navbar-search pull-right" action="#">
              <input type="text" class="search-query span2" placeholder="Rechercher">
            </form>
          </div>
        </div>
      </div>
      