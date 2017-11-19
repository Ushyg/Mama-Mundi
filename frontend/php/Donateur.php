<?php
	class Donateur{
		private $_donateur_id;

	function __construct ($donateur_id){
		$this->_donateur_id=$donateur_id;
	}
	
	function getDonateurId(){
		return $this->_donateur_id;
	}

	function setDonateurId($donateur_id){
		return $this->_donateur_id;
	}
}
?>
