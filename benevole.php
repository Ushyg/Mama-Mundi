<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title> Mama mundi </title>
			<link rel="stylesheet" href="css/styles.css"/>
			<link rel="stylesheet" href="css/page_don.css"/>
			<link rel="stylesheet" href="css/menuder.css"/>
			<script type="text/javascript" src="menu.js"></script>
		</head>
		<body background="images/back1.jpg">

<!--______________________Menu______________________ -->

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

<!-- ______________________Menu______________________ -->

			<div id=espace2>
			</div>
			<section id="formule">
				<h2>Mes coordonnées</h2>
				<form method="get" action="" id="personne">
					<label>Civilité</label><input class="longueur" type="text" name="civ"><br/>
					<br/><label id="nom">Nom</label><input class="longueur" type="text" name="ttnom"/><br/>
					<br/><label id="prenom">Prénom</label><input class="longueur" type="text" name="ttprenom"/><br/>
					<br/><label id="date">Dates de Naissance</label>
				<select name="cbjour">
					<?php
						for ($j=1;$j<32;$j++) 
							{							
								print	('<option value="'.$j.'">'.($j).'</option>');
							}
					?>
					<option value=""></option>
				</select>
				<select name="cbmois" onchange="getNBjour();">
					<?php
						$tab=Array(1=>'janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
							for ($m=1;$m<=count($tab);$m++) 
							{
								print	('<option value="'.$tab[$m].'">'.($tab[$m]).'</option>');
							}
					?>
				</select>
				<select name="cbannees" onchange="getNBjour();">
					<?php
						for ($a=1965;$a<2021;$a++) 
							{
								print	('<option value="'.$a.'">'.($a).'</option>');
							}
					?>
				</select><br/>
				<br/><label>E-mail</label><input class="longueur" type="text" name=""><br/>
				<br/><label>E-mail confirmation</label><input class="longueur" type="text" name=""><br/>
				<br/><label>Téléphone</label><input class="longueur" type="text" name=""><br/>
			</form>
			<form id="adresse">
				<label>Adresse</label><input class="longueur2" type="text" name=""><br/>
				<br/><label>Complément d'adresse</label><input class="longueur2" type="text" name=""><br/>
				<br/><label>Nationalité</label><input class="longueur2" type="text" name=""><br/>
				<br/><label>Département</label>
					<select name="departement">
						<option>01 - Ain</option>
						<option>02 - Aisne</option>
						<option>03 - Allier</option>
						<option>04 - Alpes-de-Haute-Provence</option>
						<option>05 - Hautes-alpes</option>
						<option>06 - Alpes-maritimes</option>
						<option>07 - Ardèche - Privas</option>
						<option>08 - Ardennes</option>
						<option>09 - Ariège</option>
						<option>10 - Aube</option>
						<option>11 - Aude</option>
						<option>12 - Aveyron - Rodez</option>
						<option>13 - Bouches-du-Rhône</option>
						<option>14 - Calvados</option>
						<option>15 - Cantal</option>
						<option>16 - Charente</option>
						<option>17 - Charente-maritime</option>
						<option>18 - Cher</option>
						<option>19 - Corrèze</option>
						<option>2a - Corse-du-sud</option>
						<option>2b - Haute-Corse</option>
						<option>21 - Côte-d'Or</option>
						<option>22 - Côtes-d'Armor</option>
						<option>23 - Creuse</option>
						<option>24 - Dordogne</option>
						<option>25 - Doubs</option>
						<option>26 - Drôme</option>
						<option>27 - Eure</option>
						<option>28 - Eure-et-loir</option>
						<option>29 - Finistère</option>
						<option>30 - Gard</option>
						<option>31 - Haute-garonne</option>
						<option>32 - Gers</option>
						<option>33 - Gironde</option>
						<option>34 - Hérault</option>
						<option>35 - Ille-et-vilaine</option>
						<option>36 - Indre</option>
						<option>37 - Indre-et-loire</option>
						<option>38 - Isère</option>
						<option>39 - Jura</option>
						<option>40 - Landes</option>
						<option>41 - Loir-et-cher</option>
						<option>42 - Loire</option>
						<option>43 - Haute-loire</option>
						<option>44 - Loire-atlantique</option>
						<option>45 - Loiret</option>
						<option>46 - Lot</option>
						<option>47 - Lot-et-garonne</option>
						<option>48 - Lozère</option>
						<option>49 - Maine-et-loire</option>
						<option>50 - Manche</option>
						<option>51 - Marne</option>
						<option>52 - Haute-marne</option>
						<option>53 - Mayenne</option>
						<option>54 - Meurthe-et-moselle</option>
						<option>55 - Meuse</option>
						<option>56 - Morbihan</option>
						<option>57 - Moselle</option>
						<option>58 - Nièvre</option>
						<option>59 - Nord</option>
						<option>60 - Oise</option>
						<option>61 - Orne</option>
						<option>62 - Pas-de-calais</option>
						<option>63 - Puy-de-dôme</option>
						<option>64 - Pyrénées-atlantiques</option>
						<option>65 - Hautes-Pyrénées</option>
						<option>66 - Pyrénées-orientales</option>
						<option>67 - Bas-rhin</option>
						<option>68 - Haut-rhin</option>
						<option>69 - Rhône</option>
						<option>70 - Haute-saône</option>
						<option>71 - Saône-et-loire</option>
						<option>72 - Sarthe</option>
						<option>73 - Savoie</option>
						<option>74 - Haute-savoie</option>
						<option>75 - Paris</option>
						<option>76 - Seine-maritime</option>
						<option>77 - Seine-et-marne</option>
						<option>78 - Yvelines</option>
						<option>79 - Deux-sèvres</option>
						<option>80 - Somme</option>
						<option>81 - Tarn</option>
						<option>82 - Tarn-et-garonne</option>
						<option>83 - Var</option>
						<option>84 - Vaucluse</option>
						<option>85 - Vendée</option>
						<option>86 - Vienne</option>
						<option>87 - Haute-vienne</option>
						<option>88 - Vosges</option>
						<option>89 - Yonne</option>
						<option>90 - Territoire de belfort</option>
						<option>91 - Essonne</option>
						<option>92 - Hauts-de-seine</option>
						<option>93 - Seine-Saint-Denis</option>
						<option>94 - Val-de-marne</option>
						<option>95 - Val-d'oise</option>
						<option>971 - Guadeloupe</option>
						<option>972 - Martinique</option>
						<option>973 - Guyane</option>
						<option>974 - La réunion</option>
						<option>976 - Mayotte</option>
					</select><br/>
				<br/><label>Ville</label><input class="longueur2" type="text" name=""><br/>
		</form>
				<br/><button onclick="nom();">Envoyer</button><br>
	</section>
</body>
</html>
	<script type="text/javascript">
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

  	function getNBjour(){
  		var vraijour = document.getElementsByName('cbjour')[0];
		var vraimois = document.getElementsByName('cbmois')[0];
		var vraiannees = document.getElementsByName('cbannees')[0];
	vraijour.innerphp='';

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