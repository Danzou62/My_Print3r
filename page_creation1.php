<?php 
	$nav_en_cours = 'creation';
	include('include_header.php');
?>
<link href="./bootstrap/css/parallax.css" rel="stylesheet">
<div class="container">  
	<div id="slide1" style="background-position: 50% -110px; padding-top:-50px;">
	
		<div class="slide_inside">					
			
			<figure>
				<img src="bootstrap/img/p3R.png" alt="logo Print3R">
			</figure>
			
		</div> <!--.slide_inside-->	 
						
	</div> <!--#slide1-->
	
	
	<div id="slide2" style="background-position: 50% -70px;">
		
		<div class="slide_inside">
		
			<h2>Un titre de niveau 2</h2>

			<p>Lorem Salu bissame ! Wie geht's les samis ? Hans apporte moi une Wurschtsalad avec un picon bitte, s'il te plaît.Voss ? Une Carola et du Melfor ? Yo dû, espèce de Knäckes, ch'ai dit un picon !</p>
  
			<p>Hopla vous savez que la mamsell Huguette, la miss Miss Dahlias du messti de Bischheim était au Christkindelsmärik en compagnie de Richard Schirmeck (celui qui a un blottkopf), le mari de Chulia Roberstau, qui lui trempait sa Nüdle dans sa Schneck ! Yo dû, Pfourtz ! Ch'espère qu'ils avaient du Kabinetpapier, Gal !</p>
			
			<p>Yoo ch'ai lu dans les DNA que le Racing a encore perdu contre Oberschaeffolsheim. Verdammi et moi ch'avais donc parié deux knacks et une flammekueche. Ah so ? T'inquiète, ch'ai ramené du schpeck, du chambon, un kuglopf et du schnaps dans mon rucksack. Allez, s'guelt ! Wotch a kofee avec ton bibalaekaess et ta wurscht ? Yeuh non che suis au réchime, je ne mange plus que des Grumbeere light et che fais de la chym avec Chulien. Tiens, un rottznoz sur le comptoir.</p>

			<p>Tu restes pour le lotto-owe ce soir, y'a baeckeoffe ? Yeuh non, merci vielmols mais che dois partir à la Coopé de Truchtersheim acheter des mänele et des rossbolla pour les gamins. Hopla tchao bissame ! Consectetur adipiscing elit</p>
			
		</div> <!--.slide_inside-->	     	
	    
	</div> <!--#slide2-->
	
	
	<div id="slide3" style="background-position: 50% 20px;">
	
		<div class="slide_inside" >

			<h2>Crédits</h2>		
			
				<ul>
					<li>Page de démonstration de l'article <a href="/astuce/lire/1417-effet-parallaxe.html">Zoom sur l'effet parallaxe</a> sur <a href="http://www.alsacreations.com">Alsacréations.com</a></li>
					<li>Photos : <a href="http://www.flickr.com/photos/legofenris/">leg0fenris</a></li>
					<li>Utilisation du script : <a href="https://github.com/IanLunn/jQuery-Parallax">jQuery-Parallax</a></li>
				</ul>
			
		</div> <!--.slide_inside-->	    
		
	</div> <!--#slide3-->
	
	

	<script type="text/javascript">
	
		$(document).ready(function(){
		
		//.parallax(xPosition, adjuster, inertia, outerHeight) 
		//xPosition - Position horizontale de l'élément (css)
		//adjuster - La position Y de départ
		//inertia - Vitesse en fonction du Scroll. Exemple: 0.1 est 1/10 ème de la vitesse du scroll. 2 = deux fois la vitesse du scroll.
		//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
			$('#slide1').parallax("center", 0, 0.1, true);
			$('#slide2').parallax("center", 900, 0.1, true);
			$('#slide3').parallax("center", 2900, 0.1, true);
		})
	</script>


</div>
</html>
<?php include('include_footer.php'); ?>