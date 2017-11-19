<!DOCTYPE html>
	<html>
<?php
	include_once('./php/data.php')
?>
		<head>
			<meta charset="utf-8">
			<title> Mama mundi </title>
			<link rel="stylesheet" href="css/styles.css"/>
			<link rel="stylesheet" href="css/menuder.css"/>
			<script type="text/javascript" src="menu.js"></script>
		</head>
		<body background="images/back1.jpg">

<!--______________________Menu______________________ -->


			<?php include('./src/header/header.template.php'); ?>

<!-- ______________________Menu______________________ -->

			<div id=espace1>
			</div>
			<?php
				$script='';
				$SQLQuery='SELECT * FROM article';
				$SQLResult=mysqli_query($idConn,$SQLQuery);
				while($SQLRow=mysqli_fetch_array($SQLResult)){
					$article=new article($SQLRow['article_id'], $SQLRow['article_titre'], $SQLRow['article_corps'], $SQLRow['article_date']);

						$script.='<section id="article">';
						$script.='<article>';
						$script.='<head><h1>'.$article->getTitre().'</h1></head><br/>';
						$script.='<img id=photoarticle src="./images/pharticle/article'.$article->getId().'.jpg"/>';
						$script.='<p id="corps">'.$article->getCorps().'</p>';
						$script.='<footer>Ecrit le '.$article->getDat().'</footer>';
						$script.='</section>';
					}
				print($script);
			?>
			<div>
                <section id="quieneres">
                    <article>
            			<h1><center>Qui sommes nous ?</center></h1>
							Dans ce projet il y a beaucoup de personnes, énormément de mains et de cœurs généreux, qui peu à peu permettent de le rendre possible: Abdou Senghor (ancien directeur de l'école de Palmarin Facao), François Sene (nouveau director) et bien sûr, les familles, les amis et les personnes impliqués pour que le droit à l’éducation s’applique pour tous les enfants sans exception.</br>
                    </article>
           		</section>
            	<section id="organisation">
               		<article>
							Dans l’exécution de ce projet, sur place, Jonathan Marquet et Begoña Romero tous deux ayant une longue expérience dans le bénévolat et la Coopération internationale.</br>
							</br><b><i>Jonathan Marquet</i></b></br>
							</br>Né à Bordeaux en France. Après une formation spécialisée dans la gestion des ressources en eau, il s’est formé dans la logistique et le développement humanitaire à l’école de renommée internationale  « Bioforce » de la ville de Lyon. Il a réalisé différentes missions de volontariat  social en France, au Pérou où il a collaboré avec l’association «Pérou Crew » à la création de salles pour l’accompagnement  extrascolaire pour les enfants de l’orphelinat Phes à Ayacucho. Il a également travaillé en Équateur en tant que technicien et formateur pour Fedeta dans différentes communautés indiennes en Amazonie pour l’application de programmes d’aide gouvernementale.</br>
							</br><b><i>Begoña Romero</i></b></br>
							</br>Née à Saint Jaques de Compostelle, en Espagne, est psychologue, professeur d’éducation spécialisée et possède un titre de master en coopération internationale pour le développement. Elle possède une solide expérience :</br>
							Elle a travaillé comme bénévole pour les enfants de la rue avec  l’Association Alalay, en Bolivie.
							Elle a également travaillé comme bénévole pour les enfants handicapés avec l’Association Magie delle Ande, au Pérou.
							Elle a reçu une bourse de la Coopération des Iles Canaries pour collaborer en tant que professeur spécialisée dans l’école de Palmarin Facao au Sénégal.
							Elle a réalisé un bénévolat au Népal avec l’Association Antardristi qui s’occupe d’enfants qui ont été abusés sexuellement.
							Elle a reçu une autre  bourse de la Coopération Galicienne pour développer le pôle communication des Nations Unies d’Équateur.</br>
							</br>
							Avec votre soutien, nous menons une action concrète pour les enfants handicapés pour lesquels il n’existe actuellement aucune prise en charge. Le projet consiste en la réalisation d’une école, baptisée « Jacobo Romero Riviera », créée en son hommage. Ce projet est l’occasion de revendiquer le  droit à l’éducation pour tous et d’affirmer la nécessité de promouvoir l’intégration scolaire et sociale des enfants atteints de handicaps.</br>
                			</br>
                			</br>MERCI BEAUCOUP!!</br>
                	</article>
            	</section>
            </div>
			<div>
				<section id="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15484.153064979006!2d-16.7735347!3d14.0157454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec26daa02027bb3%3A0xcaa8bc9d803dd4d8!2zUGFsbWFyaW4sIFPDqW7DqWdhbA!5e0!3m2!1sfr!2sfr!4v1508761915150" frameborder="0" style="border:0" allowfullscreen></iframe>
				</section>
			</div>
			<div style="background-color: rgba(255, 255, 255, 0.603); margin-left:20%; margin-right:20%; text-align: justify;">
				<section id="Dossier">
                	<h1 style="text-align: center;">DOSSIER</h1>
                	<p style="text-align:center;">Vous pouvez télécharger notre dossier depuis ce lien</p>
                	<p style="text-align:center;"></p>
               		<a title="Dossier" href="Dossier/Dossier_francaise.pdf" target="_blank">
					<img style="display: block; margin: 0 auto; padding-bottom:4%;" src="./images/dossier_francaise.jpg" alt="escuela jacobo riveira">
                	</a>
                </section>
			</div>
		</body>
	</html>
