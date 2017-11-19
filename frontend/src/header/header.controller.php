<?php

class MenuItems {
  public $label;
  public $url;

  function __construct($label, $url){
      $this->$label = $label;
      $this->$url = $url;
  }
}

$menu_items = array(
  new MenuItems("Accueil","/index.php"),
  new MenuItems("L’association","/asso.php")
);

/*
**,
{
  "label": "L’association"
  "url": "asso.php"
  "childs": [
    {
      "label": "Notre organisation",
      "url": ""
    },
    {
      "label": "Notre mission",
      "url": ""
    },
    {
      "label": "Nos projets",
      "url": ""
    },
    {
      "label": "Notre équipe au Sénégal",
      "url": ""
    }
  ]
}
*/

echo '$menu_items';

$headerCtrl = new HeaderController($menu_items);


class HeaderController{

  /*
  ** $menu_items correspond aux éléments du menu
  */
  private $menu_items;

  function __construct ($data){
    var_dump($data);
  }

  function getMenuItems() {

    $array = array(
      new MenuItems("Accueil","/index.php"),
      new MenuItems("L’association","/asso.php")
    );

    var_dump($array);

    return $array;
  }

}

?>
