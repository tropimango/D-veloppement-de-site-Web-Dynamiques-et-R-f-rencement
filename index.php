<?php
					
					function getBlock($file, $data = [])
					{
					    require $file;
					}


					include ('page_php/head.php');
					include ('page_php/modele.php');					
					getBlock("page_php/header.php", $infos_film["image"]) ;					

					getBlock("page_php/infos_film.php", $infos_film) ;			

					getBlock("page_php/nav.php", $infos_film["image"]) ;
					include ('page_php/footer.php');
	 
?>



