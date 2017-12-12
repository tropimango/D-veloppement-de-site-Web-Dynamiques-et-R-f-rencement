<body>	
	<main>
		<div class = "main">				
				<article>

					<h1><?= $data["titre"] ?></h1>

								
						<div class = "presentation">
							<div class = "Spiderman">
								<div id = "Spiderman">
									<?php	
									echo '<img src="'.$data["image"][1]["chemin"].'" style = "float: left ;"/>';
									?>
								</div>
							</div>

							<?php	
							echo "Date de sortie   :",$data["date_sortie"]. '<br />';
							echo "Durée    :",$data["duree"]. '<br />';
							echo "Note      :",$data["note"].'<meter min="0" max="100" value="84">Note</meter>'.'<br />';
							echo "Genres : Fantastique, Action ". '<br />';
							echo "<h4>Acteurs     :</h4>".'    ';
							

							foreach($data["acteurs"] as $element2)
							{
							   echo  $element2["nom"].'    ';
							   echo  $element2["prenom"]. '<br />';
							}
						echo "</div>";

							echo "<h2>Synopsis et details :</h2>",'<br />', $data["synopsis"]. '<br />';
							
							
								echo "<h3> Acteurs : </h3>";
																
									echo "<aside id  = 'acteur'>";
										echo "<div class = 'acteur'>"; ?>
											<!--<figure>
													<img src="<?= $data["photos"][0]["id_photo"]; ?>" />
													<figcaption>Tobey Maguire</figcaption>
												 </figure>-->

			<?php
												echo "<figure>
														<img src='".$data["photos"][0]["id_photo"]."'class ='image'/>";
													echo "<div class =''>;
																<figcaption>Tobey Maguire</figcaption>
															 </figure>";
													echo "</div>";
												

											echo "<div class ='tobey'>";
												echo "<figure>
														<img src='".$data["photos"][1]["id_photo"]."'class ='image'/>";
													echo "<div class ='tobey'>;
																<figcaption>Kristen Dunst</figcaption>
															 </figure>";
											echo "</div>";



											echo "<div class ='tobey'>";
												echo "<figure>
														<img src='".$data["photos"][2]["id_photo"]."'class ='image'/>";
													echo "<div class =''>;
																<figcaption>Willem Dafoe</figcaption>
															 </figure>";
													echo "</div>";
										




										echo "</div>";
									echo "</aside>";						


									echo "<aside id = rea >";
										echo "<div class= 'reali'>";
											echo "<h3> Réalisateur : </h3>";
										echo "</div>";	
												echo "<div class = 'Sam'>";
																				

													echo "<figure>
															<img src='".$data["photos"][3]["id_photo"]."'class ='image'/>
															<figcaption>Sam Raimi</figcaption>
														 </figure>";							
												echo "</div>";
										echo "</aside>";

							?>
				</article>
		</div>
	</main>

</body>