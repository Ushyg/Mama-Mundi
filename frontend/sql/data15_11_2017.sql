use mamamundi;

/*Données table Region*/
insert into region (region_id,region_libelle)
values (1,'Europe'),(2,'Afrique'),(3,'Amerique du Nord'),(4,'Amerique du Sud'),(5,'Asie'),(6,'Oceanie'),(7,'Antarctique');

/*Données table Pays*/
insert into pays (pays_id,pays_libelle,pays_region_id)
values (1,'France',1),(2,'Wakanda',2),(3,'Mont ELLsworth',7),(4,'Australie',6),(5,'Etats-Unis d Am�rique',3),(6,'Japon',5),(7,'Mexique',4);

/*Données table Individu*/
insert into individu(individu_id,individu_nom,individu_prenom, individu_adresse_mail,individu_adresse1,individu_adresse2,individu_tel)
values 	(1,"Kent","Clark","superman@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(2,"Wayne","Bruce","batman@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(3,"Jordan","Hal","greenlantern@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(4,"Prince","Diane","wonderwoman@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(5,"Curry","Arthur","aquaman@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(6,"Allen","Barry","theflash@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(7,"Stone","Victor","cyborg@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(8,"J'onzz","J'onn","martian.manhunter@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(9,"Hall","Hector","doctor.fate@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(10,"Tyler","Rex","hourman@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(11,"Blood","Jason","etrigan@gmail.com","114 rue Lucien Faure","Classe 2","0584159584"),
	(12,"Kyle","Selina","catwoman@gmail.com","114 rue Lucien Faure","Classe 2","0584159584");

/*Données table Projet*/
insert into projet(projet_id,projet_libelle,projet_datedebut,projet_responsable_id,projet_pays_id)
values 	(1,"Palmarin",'2017-02-18',1,1),
	(2,"Watergate",'2016-02-18',2,2),
	(3,"Apollo",'2015-02-18',3,3),
	(4,"Horizon Zero",'2014-02-18',4,4),
	(5,"Abyss",'2013-02-18',5,5),
	(6,"Lune",'2012-02-18',6,6),
	(7,"Tete dans les etoiles",'2011-02-18',7,7);

/*Données table Participant_Projet*/
insert into participant_projet(participant_projet_ind_id,participant_projet_pro_id)
values 	(1,1),
	(2,2),
	(3,3),
	(4,4),
	(5,5),
	(6,6),
	(7,7);

/* Données table Activite */
insert into activite(activite_id,activite_libelle,activite_article_id,activite_projet_id)
values 	(1,"Palmarin visite",1,1),
	(2,"Palmarin eleve",2,1),
	(3,"Palmarin fin",3,1);

/*Données table Fonction*/
insert into fonction(fonction_id,fonction_libelle)
values 	(1,"President"),
	(2,"Secretaire"),
	(3,"Tresorier");

/*Données table Membre*/
insert into membre(membre_id,membre_fonction_id)
values 	(1,1),
	(2,2),
	(12,3);

/*Données table Donateur*/
insert into donateur(donateur_id)
values 	(5),
	(7),
	(9);

/*Données table Benevole*/
insert into benevole(benevole_id)
values 	(3),
	(6),
	(11);

/*Données table Parent*/
insert into parent(parent_id)
values 	(4),
	(8),
	(10);

/* Données table Enfant */
insert into enfant(enfant_id,enfant_nom,enfant_prenom,enfant_photo,enfant_parent_id,enfant_parrain_id,enfant_projet_id)
values 	(1,"Grayson","Dick","C:\Utilisateurs\Asus\Documents\nightwing.png",4,null,1),
	(2,"Danvers","Linda","C:\Utilisateurs\Asus\Documents\supergirl.png",8,null,1),
	(3,"Rayner","Kyle","C:\Utilisateurs\Asus\Documents\Ion.png",10,5,1),
	(4,"Troy","Donna","C:\Utilisateurs\Asus\Documents\wondergirl.png",NULL,7,2);

/*Données table Suivi*/
insert into suivi(suivi_id,compte_rendu,suivi_projet_id)
values  (1,"Debut travaux palmarin",1),
	(2,"Mi-travaux",1),
	(3,"Fin des travaux",1),
	(4,"Suivi enseignant",1),
	(5,"Mise en place du Watergate",2),
	(6,"Compte-rendu projet Apollo",3),
	(7,"Campagne donation projet Horizon Zero",4);

/*Données table Reunion*/
insert into reunion(reunion_id,reunion_libelle,reunion_date,reunion_suivi_id)
values 	(1,"Mise au point de mi-travaux",'2016-12-18',2),
	(2,"Emploi des enseignants",'2017-02-15',4),
	(3,"Mise en Place Watergate",'2017-11-28',5),
	(5,"Point Financement Horizon Zero",'2018-01-15',7);