<?php
Class HeaderController{
	private $_menuItems;
	private $_icons;

	function __contruct ($menu_items, $icons){
		$this->_menuItems = $menu_items;
		$this->_icons = $icons;
	}

	function get MenuItems(){
		return $this->_menuItems;
	}

	function get icons(){
		return $this->_icons
	}

}

$menu_items = array(
	array ("label" => "Acceuil", "url" => "./index.php"),
	array (
		"label" => "L'association", 
		"url" => "./asso.php", 
		"childs" => array(
			array("label" => "Notre organisation", "url" => "#"),
			array("label" => "Notre mission", "url" => "#"),
			array("label" => "Nos projets", "url" => "#")
			array("label" => "Notre équipe au sénégal", "url" => "#")
		)
	)
	array (
		"label" => "Nos activités", 
		"url" => "./activite.php", 
		"childs" => array(
			array("label" => "Education", "url" => "#"),
			array("label" => "Formation professionnelle", "url" => "#"),
			array("label" => "Soutien aux familles", "url" => "#")
			array("label" => "Nos résultats", "url" => "#")
			array("label" => "Matériel éducatif", "url" => "#")
		)
	)
	array (
		"label" => "Nous soutenir", 
		"url" => "#", 
		"childs" => array(
			array("label" => "Parrainer", "url" => "./parrainer.php"),
			array("label" => "Faire un don", "url" => "./don.php"),
			array("label" => "Devenir bénévole", "url" => "./benevole.php")
		)
	)
);

$icons = array(
	array("src-img" => "images/france.svg", "alt-img" => "image bandeau", "href" => "#"),
	array("src-img" => "images/spain.svg", "alt-img" => "image bandeau", "href" => "#"),
	array("src-img" => "images/facebook.svg", "alt-img" => "image bandeau", "href" => "https://www.facebook.com/asociacion.jaimerever/?ref=page_internal"),
	array("src-img" => "images/twitter.svg", "alt-img" => "image bandeau", "href" => "#"),
	array("src-img" => "images/youtube.svg", "alt_img" => "image bandeau", "href" => "https://www.youtube.com/channel/UC1LRzm-VfgE9KHXJpKcjiLQ")
?>