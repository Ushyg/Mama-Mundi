<?php

	class Individu{
        private $_individu_id;
        private $_individu_nom;
        private $_individu_prenom;
        private $_individu_adresse_mail;
        private $_individu_adresse1;
        private $_individu_adresse2;
        private $_individu_tel;

	function __construct ($individu_id,$individu_nom,$individu_prenom,$individu_adresse_mail,$individu_adresse1,$individu_adresse2,$individu_tel){
		$this->_individu_id=$individu_id;
		$this->_individu_nom=$individu_nom;
		$this->_individu_prenom=$individu_prenom;
		$this->_individu_adresse_mail=$individu_adresse_mail;
        $this->_individu_adresse1=$individu_adresse1;
     	$this->_individu_adresse2=$individu_adresse2;
        $this->_individu_tel=$individu_tel;
	}
	
	function getIndividuId(){
		return $this->_individu_id;
	}

	function getIndividuNom(){
		return $this->_individu_nom;
	}

	function getIndividuPrenom(){
		return $this->_individu_prenom;
	}

	function getIndividuAdresseMail(){
        return $this->_individu_adresse_mail;
    }

	function getIndividuAdresse1(){
		return $this->_individu_adresse1;    
    }

 	function getIndividuAdresse2(){
	return $this->_individu_adresse2;
    }

  	function getIndividuTel(){
	return $this->_individu_tel;
    }
	
	function setIndividuId($individu_id){
		return $this->_individu_id;
	}

	function setIndividuNom($individu_nom){
		return $this->_individu_nom;
	}

	function setIndividuPrenom($individu_prenom){
		return $this->_individu_prenom;
	}

	function setIndividuAdresseMail($individu_adresse_mail){
        return $this->_individu_adresse_mail;
    }

	function setIndividuAdresse1($individu_adresse1){
		return $this->_individu_adresse1;    
    }

 	function setIndividuAdresse2($individu_adresse2){
	return $this->_individu_adresse2;
    }

  	function setIndividuTel($individu_tel){
	return $this->_individu_tel;
    }
}
?>
