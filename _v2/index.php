<?php 
	$nav_en_cours = 'home';
	include('include_header.php');
?>
    <!-- Carousel
    ================================================== -->
  <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://localhost/My_Print3r/_v2/bootstrap/img/bobines-filament.JPG" alt="First slide">
                        <div class="carousel-caption">
                            <h3>
                                First slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://localhost/My_Print3r/_v2/bootstrap/img/chateau-chambord.JPG" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>
                                Second slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://localhost/My_Print3r/_v2/bootstrap/img/impression-3d-pearl-1_090F200A2001479472.JPG" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>
                                Third slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
 
        </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


      <!-- Three columns of text below the carousel -->
      <div class="row">
	  
        <div class="col-lg-4 text-center HP-bloc">
          <img class="center-block" src="./bootstrap/Icons/FontAwesome_f0eb(0)_256.png" style="width: 140px; height: 140px;">
          <h2>Imaginer</h2>
          <p class="HP-icon-text">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" style="margin-top :20px;" href="http://getbootstrap.com/examples/carousel/#" role="button">Voir Détails»</a></p>
        </div><!-- /.col-lg-4 -->
		
        
        <div class="col-lg-4 text-center HP-bloc">
          <img class="center-block" src="./bootstrap/Icons/linecons_e00f(0)_256.png" style="width: 140px; height: 140px;">
          <h2>Créer</h2>
          <p class="HP-icon-text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" style="margin-top :20px;" href="http://getbootstrap.com/examples/carousel/#" role="button">Voir Détails»</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 text-center HP-bloc">
          <img class="center-block" src="./bootstrap/Icons/Entypo_e791(0)_256.png" style="width: 140px; height: 140px;">
          <h2>Partager</h2>
          <p class="HP-icon-text">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" style="margin-top :20px;" href="http://getbootstrap.com/examples/carousel/#" role="button">Voir Détails»</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

<?php include('include_footer.php'); ?>