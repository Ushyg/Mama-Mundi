<?php

	class Enfant{
        private $_enfant_id;
        private $_enfant_nom;
        private $_enfant_prenom;
        private $_enfant_photo;
        private $_enfant_parent_id;
        private $_enfant_parrain_id;
        private $_enfant_projet_id;

	function __construct ($enfant_id,$enfant_nom,$enfant_prenom,$enfant_photo,$enfant_parent_id,$enfant_parrain_id,$enfant_projet_id){
		$this->_enfant_id=$enfant_id;
		$this->_enfant_nom=$enfant_nom;
		$this->_enfant_prenom=$enfant_prenom;
		$this->_enfant_photo=$enfant_photo;
        $this->_enfant_parent_id=$enfant_parent_id;
     	$this->_enfant_parrain_id=$enfant_parrain_id;
        $this->_enfant_projet_id=$enfant_projet_id;
	}
		
	function getEnfantId(){
		return $this->_enfant_id;
	}

	function getEnfantNom(){
		return $this->_enfant_nom;
	}

	function getEnfantPrenom(){
		return $this->_enfant_prenom;
	}

	function getEnfantPhoto(){
        return $this->_enfant_photo;
    }

	function getEnfantParentId(){
		return $this->_enfant_parent_id;    
    }

 	function getEnfantParrainId(){
	return $this->_enfant_parrain_id;
    }

  	function getEnfantProjetId(){
	return $this->_enfant_projet_id;
    }

	function setEnfantId($enfant_id){
		return $this->_enfant_id;
	}

	function setEnfantNom($enfant_nom){
		return $this->_enfant_nom;
	}

	function setEnfantPrenom($enfant_prenom){
		return $this->_enfant_prenom;
	}

	function setEnfantPhoto($enfant_photo){
        return $this->_enfant_photo;
    }

	function setEnfantParentId($enfant_parent_id){
		return $this->__enfant_parent_id;    
    }

 	function setEnfantParrainId($enfant_parrain_id){
	return $this->_enfant_parrain_id;
    }

  	function setEnfantProjetId($enfant_projet_id){
	return $this->_enfant_projet_id;
    }


