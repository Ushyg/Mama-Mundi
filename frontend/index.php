<!DOCTYPE html>
	<html>

		<?php
		/* review(youyou) */
		/* Cet appel vers data.php correspond à la logique du backend (initialisation de la bdd + appel aux modèles de données) */
		/* Le controlleur de l'index doit récupérer uniquement les informations relatives à l'affichage de l'index via des appels HTTP */
		/* todo: déporter cette logique côté backend */
		include_once('./php/data.php');
		?>

		<head>
			<?php include('./src/common-components/head-assets/head-assets.template.php'); ?>
		</head>
		<body background="images/back1.jpg">

			<?php include('./src/common-components/header/header.template.php'); ?>

			<!-- review(youyou) -->
			<!-- Utiliser un margin-top:35% sur l'element sous espace1 plutôt de rajouter une div comme ceci avec un margin-bottom: 35% -->
			<div id=espace1></div>

			<?php include('./src/contents/index/index.template.php'); ?>

		</body>
	</html>
