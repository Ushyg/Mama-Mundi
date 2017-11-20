<?php
//review(youyou): remplir $menu_items & $icons avec un appel HTTP vers le serveur (GET) "/api/menu-items" & "/api/header-icons"
$menu_items = array(
  array ("label" => "Accueil", "url" => "./index.php"),
  array (
    "label" => "L’association",
    "url" => "./asso.php",
    "childs" => array(
      array("label" =>"Notre organisation","url" => "#"),
      array("label" => "Notre mission","url" => "#"),
      array("label" => "Nos projets","url" => "#"),
      array("label" => "Notre équipe au Sénégal","url" => "#")
    )
  ),
  array (
    "label" => "Nos activités",
    "url" => "./activite.php",
    "childs" => array(
      array("label" =>"Éducation","url" => "#"),
      array("label" => "Formation professionnelle","url" => "#"),
      array("label" => "Soutien aux familles","url" => "#"),
      array("label" => "Nos résultats","url" => "#"),
      array("label" => "Matériel éducatif","url" => "#")
    )
  ),
  array (
    "label" => "Nous soutenir",
    "url" => "#",
    "childs" => array(
      array("label" =>"Parrainer","url" => "parrainer.php"),
      array("label" => "Faire un don","url" => "don.php"),
      array("label" => "Devenir bénévole","url" => "benevole.php")
    )
  )
);

$icons = array(
  array("src-img" => "images/france.svg", "alt-img" => "image bandeau", "href" => "#"),
  array("src-img" => "images/spain.svg", "alt-img" => "image bandeau", "href" => "#"),
  array("src-img" => "images/facebook.svg", "alt-img" => "image bandeau", "href" => "https://www.facebook.com/asociacion.jaimerever/?ref=page_internal"),
  array("src-img" => "images/twitter.svg", "alt-img" => "image bandeau", "href" => "#123456"),
  array("src-img" => "images/youtube.svg", "alt-img" => "image bandeau", "href" => "https://www.youtube.com/channel/UC1LRzm-VfgE9KHXJpKcjiLQ")
);

$headerCtrl = new HeaderController($menu_items, $icons);


  class HeaderController{

    /* $menu_items correspond aux éléments du menu */
    private $_menuItems;

    /* $icon correspond aux différents icones et leurs liens à droite du header */
    private $_icons;

    function __construct ($menu_items, $icons){
      $this->_menuItems = $menu_items;
      $this->_icons = $icons;
    }

    function getMenuItems() {
      return $this->_menuItems;
    }

    function getIcons(){
      return $this->_icons;
    }
  }
  ?>
