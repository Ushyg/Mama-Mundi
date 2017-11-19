<?php
	class Benevole{
		private $_benevole_id;

	function __construct ($benevole_id){
		$this->_benevole_id=$benevole_id;
	}
	
	function getBenevoleId(){
		return $this->_benevole_id;
	}

	function setBenevoleId($benevole_id){
		return $this->_benevole_id;
	}
}
?>
