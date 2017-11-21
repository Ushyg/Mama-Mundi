<?php

/*
$assetsConfig contient les différentes configurations communes à toutes les pages (à inclure dans la balise <head>)
Cette variable stocke la valeur charset, le titre de référencement, les fichiers css et javascript à inclure
*/
$assetsConfig = array(
  "charset" => "utf-8",
  "title" => "Mama Mundi",
  "css" => array(
    array("href" => "css/styles.css"),
    array("href" => "css/menuder.css"),
    array("href" => "src/assets/css/style.css")
  ),
  "javascript" => array(
    array("src" => "src/common-components/header/menu.js"),
  )
);

$headAssetsCtrl = new HeadAssetsController($assetsConfig);


  class HeadAssetsController{

    private $_assets;

    function __construct ($assets){
      $this->_assets = $assets;
    }

    function getHeadAssets() {
      return $this->_assets;
    }

    function getCharset() {
      return $this->_assets['charset'];
    }

    function getTitle() {
      return $this->_assets['title'];
    }

    function getCssAssets() {
      return $this->_assets["css"];
    }

    function getJsAssets() {
      return $this->_assets["javascript"];
    }
  }
  ?>
