<?php 
	$nav_en_cours = 'home';
	include('include_header.php');
?>
    
    <div class="container">      
<div class="container">


    <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="/page_contenu.php" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="page_contenu.php" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
	<div class="jumbotron" style="background-color : rgba(238, 238, 238, 0.49)";>
            <h1>Bienvenue sur la page contenu!</h1>
            <p>Sur cette page vous pouver telecharger tout les contenus disponibles sur le site d'un simple clic.</p>
          </div>
    <div id="products" class="row list-group">
        <div class="item  col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="thumbnail">
			
                <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="" href="#aboutModal">
				
                           <div class="panel-footer text-center" style="width: 100%; height: 39px;">
                    <a href="page_contenu.php"><span class="glyphicon glyphicon-download" style="height: 22px; font-size: 22px;"></span></a>
                    <a href="page_contenu.php"><span class="glyphicon glyphicon-thumbs-up" style=" height: 22px; font-size: 22px; "></span></a>
                    <a href="page_contenu.php"><span class="glyphicon glyphicon-globe" style=" height: 22px; font-size: 22px; "></span></a>
                    <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-share-alt" style=" height: 22px; font-size: 22px; "></span></a>
                </div><p></p>
                        
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<center>
        <h4 class="modal-title" id="myModalLabel">Mon Contenu</h4>
      </div>
      <div class="modal-body">
      
		
		
		<center>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="max-width: 400px; max-height : 500px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
	  </div>
	  <div class="item">
      <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
	  </div>
	  <div class="item">
	  <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Culpa qui officia deserunt mollit anim id est laborum.
          </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>





                <div class="caption" style="padding-bottom: 0px;">
                    <h4 class="group inner list-group-item-heading">
                        Titre du modèle</h4>
                    <p class="group inner list-group-item-text" style="margin-bottom: 20px;
">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com/">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com/">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com/">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com/">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-12 col-sm-8 col-md-6 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="bootstrap/img/fff.jpg" alt="">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Product title</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com/">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<div class="text-center">
<ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
   </div>  


</body></html>

<?php include('include_footer.php'); ?>