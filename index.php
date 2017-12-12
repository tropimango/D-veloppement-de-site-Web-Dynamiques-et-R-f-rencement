<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Referencement Film</title>
    <meta charset="utf-8"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="film.js"></script>
</head>




		<?php
					
					function getBlock($file, $data = [])
					{
					    require $file;
					}

					include ('page_php/modele.php');					
					getBlock("page_php/header.php", $infos_film["image"]) ;					

					getBlock("page_php/infos_film.php", $infos_film) ;			

					getBlock("page_php/nav.php", $infos_film["image"]) ;
	 
		?>



		<footer>

				<div class = "nom">
				<p>LHUILLIER Valentin</p>
				</div>
		

</body>
		
		<button id  = 'FAQ'>FAQ</button>
			<div id = 'questions'>

				<dl>
				    <dt >Y'a-t-il de l'eau sur Mars ?</dt>
		    
		    		
					    <dd>
					        <dl>
					            <dt>Oui c'est évident</dt>
					            <dd>il y a meme du coca</dd>
					            <dt>Pas vraiment</dt>
					            <dd>Il n'y a que du IceTea</dd>
					        </dl>
					    </dd>
					
				</dl>



				<dl>
				    <dt >Les Pingouins d'asie vont mourir ?</dt>	

				  	    
					    <dd>
					        <dl>
					            <dt>Oui c'est évident</dt>
					            <dd>Ils n'ont plus de plumes</dd>
					            <dt>Pas vraiment</dt>
					            <dd>Ils mutent</dd>
					        </dl>
					    </dd>
					
				</dl>

			</div>



</footer>
</html>