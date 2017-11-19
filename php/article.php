<?php
	class Article{
		private $_id;
		private $_titre;
		private $_corps;
		private $_date;

	function __construct ($id,$titre,$corps,$date){
		$this->_id=$id;
		$this->_titre=$titre;
		$this->_corps=$corps;
		$this->_date=$date;
	}
	
	function getId(){
		return $this->_id;
	}

	function getTitre(){
		return $this->_titre;
	}

	function getCorps(){
		return $this->_corps;
	}

	function getDat(){
        return $this->_date;
    }
/*
	function setId(){
		return $this->_id;
	}

	function setTitre(){
		return $this->_titre;
	}

	function setCorps(){
		return $this->_corps;
	}

	function setDat(){
        return $this->_date;
    }
*/
}
?>
