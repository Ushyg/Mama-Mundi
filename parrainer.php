<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title> Mama mundi </title>
			<link rel="stylesheet" href="css/styles.css"/>
			<link rel="stylesheet" href="css/form_par.css"/>
			<link rel="stylesheet" href="css/menuder.css"/>
			<script type="text/javascript" src="menu.js"></script>	
		</head>
		<body background="images/back1.jpg">
			<div id="navbar">
				<div id="bandeau">
					<a href="index.php"> <img src="images/Logo1.png" alt="image bandeau"/></a>
					<h1>Mama Mundi</h1>
					<div id="icones">
						<img src="images/france.svg" alt="image bandeau"/>
						<img src="images/spain.svg" alt="image bandeau"/>
						<a href="https://www.facebook.com/asociacion.jaimerever/?ref=page_internal"><img src="images/facebook.svg" alt="image bandeau"/></a>
						<img src="images/twitter.svg" alt="image bandeau"/>
						<a href="https://www.youtube.com/channel/UC1LRzm-VfgE9KHXJpKcjiLQ"><img src="images/youtube.svg" alt="image bandeau"/></a>
					</div>
				</div>
				<div id="menu">
					<ul id="menu_der">
						<li>
							<a id="liens" href="index.php" title="Page d'acceuil">Accueil</a>
						</li>
						<li>
							<a id="liens" href="asso.php" title="Page d'acceuil">L’association</a>
								<ul>
	                        		<li><a href="#">Notre organisation</a></li>
	                        		<li><a href="#">Notre mission</a></li>
	                        		<li><a href="#map">Nos projets</a></li>
	                        		<li><a href="#">Notre équipe au Sénégal</a></li>
	                			</ul>
						</li>
						<li>
							<a id="liens" href="activite.php" title="Page actualités">Nos activités</a>
								<ul>
	                        		<li><a href="#">Éducation</a></li>
	                        		<li><a href="#">Formation professionnelle</a></li>
	                        		<li><a href="#">Soutien aux familles</a></li>
	                        		<li><a href="#">Nos résultats</a></li>
	                        		<li><a href="#">Matériel éducatif</a></li>
	                			</ul>
						</li>
						<li>
							<a id="liens" title="Page formulaire">Nous soutenir</a>
								<ul>
	                        		<li><a href="parrainer.php">Parrainer</a></li>
	                        		<li><a href="don.php">Faire un don</a></li>
	                        		<li><a href="benevole.php">Devenir bénévole</a></li>
	                			</ul>
						</li>
					</ul>
				</div>
			</div>
			</div>
			<div id=espace2>
			</div>
		<section id="formule">
			<div id="ssform">	
			<div id="coordo">
	        	<h2>Mes coordonnées</h2>
					<form method="get" action="">
							<br><label id="nom">Nom</label><input type="text" name="ttnom"/><br/> 		<!-- la balise BR permet le retour a la ligne-->
							<br><label id="prenom">Prénom</label><input type="text" name="ttprenom"/><br/><br />
							<label id="date">Date de Naissance</label>
						<select name="cbjour">
							<?php
								for ($j=1;$j<32;$j++) {							
									print	('<option value="'.$j.'">'.($j).'</option>');
								}
							?>
						</select>
						<select name="cbmois" onchange="getNBjour();">
							<?php
								$tab=Array(1=>'janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
									for ($m=1;$m<=count($tab);$m++) {
										print ('<option value="'.$tab[$m].'">'.($tab[$m]).'</option>');
								}
							?>
						</select>
						<select name="cbannees" onchange="getNBjour();">
							<?php
								for ($a=1965;$a<2021;$a++) {
									print('<option value="'.$a.'">'.($a).'</option>');
								}
							?>
						</select><br/>
							<br/><label>Adresse</label><input type="text" name="" /><br/>
							<br/><label>Code postal</label><input><br/>
							<br/><label>Ville</label><input><br/>
							<br/><label>E-mail</label><input><br/>
							<br/><label>E-mail confirmation</label><input><br/>
							<br/><label>Téléphone</label><input><br/>
							<br/><label>Situation actuelle</label><input><br/>
			</div>
			<div id="parrainage">
            			<h2>Mon parrainage</h2>
							<br/><label>Je parraine</label><input><br/>
							<br/><label>Je parle</label><input><br/>
							<br/><label>Mon parrainage au Sénégal</label><input><br/>
							<br/><label>Je parle</label><input><br/>
							<button onclick="nom();">Envoyer</button><br>
			</div>
			<div id="reglement">	
            		<h2>Mon règlement</h2>
						<br/><label>Votre numéro IBAN</label><input><br/>
						<br/><label>Votre code BIC</label><input><br/>
            	<h2>Ou</h2>
				<br/><label>Sélectionnez votre</br> carte de paiement</label><input><br/>
				<br/><label>Saisissez votre numéro</br> de carte bancaire</label><input><br/>
					<form method="get" action="">
					<br><label id="date">Date d'expiration</label>
						<select name="cbmois" onchange="getNBjour();">
							<?php
								$tab=Array(1=>'janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
									for ($m=1;$m<=count($tab);$m++) {
										print ('<option value="'.$tab[$m].'">'.($tab[$m]).'</option>');
								}
							?>
						</select>
						<select name="cbannees" onchange="getNBjour();">
							<?php
								for ($a=2017;$a<2027;$a++) {
										print ('<option value="'.$a.'">'.($a).'</option>');
								}
							?>
						</select><br/>
						<br/><label>Saisissez votre numéro</br> de carte bancaire</label><input><br/>

			</div>
		</form>
	</div>
	</section>
</body>
</html>

<script type="text/javascript">
function getNBjour(){
  		var vraijour = document.getElementsByName('cbjour')[0];
		var vraimois = document.getElementsByName('cbmois')[0];
		var vraiannees = document.getElementsByName('cbannees')[0];
	vraijour.innerHTML='';

		if (vraimois.value=='janvier' || vraimois.value=='mars' ||vraimois.value=='mai' || vraimois.value=='juillet' || vraimois.value=='aout' || vraimois.value=='octobre' || vraimois.value=='décembre'){		
			for(var j=1; j<=31; j++){
				var joption= new Option();
				joption.value= j;
				joption.text= j;
				vraijour.add(joption);
				}
			
  		}else if (vraimois.value=='fevrier'){
			if (estbissextile(vraiannees.value)){
				for(var j=1; j<=29; j++){
					var joption= new Option();
					joption.text= j;
					joption.value= j;
					vraijour.add(joption);				
					}
			}else{ 
				for(var j=1; j<=28; j++){
					var joption= new Option();
					joption.value= j;
					joption.text= j;
					vraijour.add(joption);
					}
			}		
		
		}else{
			for(var j=1; j<=30; j++){
			var joption= new Option();
			joption.value= j;
			joption.text= j;
			vraijour.add(joption);
			}
		}
		function estbissextile(annee) {
    return((annee%400==0||(annee%4==0 && annee%100!=0)));
	}
}
</script>

<!--
function initcbs(){
		var cbjour = document.getElementsByName('cbjour')[0];
		var cbmois = document.getElementsByName('cbmois')[0];
		var cbannees = document.getElementsByName('cbannees')[0];

		for(var j=0; j<31; j++){
			var joption= new Option();
			joption.value= j;
			joption.text= j+1;
			cbjour.add(joption);
		}

		var tab=Array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
		for(var m=0; m<12; m++){
		var moption= new Option();
		moption.value= tab[m];
		moption.text= tab[m];
		cbmois.add(moption);
		}

		for(var a=1985; a<2021; a++){
			var aoption= new Option();
			aoption.value= a;
			aoption.text= a;
			cbannees.add(aoption);
		}
}

