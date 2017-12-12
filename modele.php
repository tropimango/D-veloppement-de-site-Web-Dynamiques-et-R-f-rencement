<?php

try {
    $dsn = 'mysql:host=localhost;dbname=spiderman;charset=utf8';
    $pdo = new PDO($dsn, 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "not working";
}


					$film = $pdo->prepare("SELECT * FROM film ");
					$film->execute();
					$getfilm = $film->fetchAll(PDO::FETCH_ASSOC);
					$infos_film = $getfilm[0];


					$acteur = $pdo->prepare("SELECT nom, prenom FROM personne ");
					$acteur->execute();
					$getacteur = $acteur->fetchAll(PDO::FETCH_ASSOC);
					$infos_film["acteurs"]= $getacteur;


					$image = $pdo->prepare("SELECT chemin FROM photo ");
					$image->execute();
					$getimage = $image->fetchAll(PDO::FETCH_ASSOC);
					$infos_film["image"]= $getimage;

					$photos = $pdo->prepare("SELECT id_photo FROM personne_has_photo ");
					$photos->execute();
					$getphotos = $photos->fetchAll(PDO::FETCH_ASSOC);
					$infos_film["photos"]= $getphotos;



?>