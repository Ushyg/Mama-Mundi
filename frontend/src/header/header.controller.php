<?php
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

  $headerCtrl = new HeaderController($menu_items);


  class HeaderController{

    /* $menu_items correspond aux éléments du menu */
    private $_menuItems;

    function __construct ($data){
      $this->_menuItems = $data;
    }

    function getMenuItems() {
      return $this->_menuItems;
    }
  }
  ?>
