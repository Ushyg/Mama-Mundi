<?php
include_once('header.controller.php')
?>

<div id="navbar">
  <div id="bandeau">
    <a href="index.php"> <img src="images/Logo1.png" alt="image bandeau"/></a>
    <h1>Mama Mundi</h1>
    <div id="icones">
      <img src="images/france.svg" alt="image bandeau"/>
      <img src="images/spain.svg" alt="image bandeau"/>
      <a href="https://www.facebook.com/asociacion.jaimerever/?ref=page_internal"><img src="images/facebook.svg" alt="image bandeau"/></a>
      <img src="images/twitter.svg" alt="image bandeau"/>
      <a href="https://www.youtube.com/channel/UC1LRzm-VfgE9KHXJpKcjiLQ"><img src="images/youtube.svg" alt="image bandeau"/></a>
    </div>
  </div>
  <div id="menu">
    <ul id="menu_der">

      <?php
      foreach ( $headerCtrl->getMenuItems() as $item){

        ?>
        <li>
          <a id="liens" href="<?php echo $item->$url; ?>" title="<?php echo $item->$label; ?>"><?php $item->$label; ?></a>
        </li>
        <?php
      }
      ?>
      <li>
        <a id="liens" href="index.php" title="Page d'acceuil"><?php echo 'blablabla' ?></a>
      </li>
      <!--

      <li>
      <a id="liens" href="asso.php" title="Page d'acceuil">L’association</a>
      <ul>
      <li><a href="#">Notre organisation</a></li>
      <li><a href="#">Notre mission</a></li>
      <li><a href="#map">Nos projets</a></li>
      <li><a href="#">Notre équipe au Sénégal</a></li>
    </ul>
  </li>
  <li>
  <a id="liens" href="activite.php" title="Page actualités">Nos activités</a>
  <ul>
  <li><a href="#">Éducation</a></li>
  <li><a href="#">Formation professionnelle</a></li>
  <li><a href="#">Soutien aux familles</a></li>
  <li><a href="#">Nos résultats</a></li>
  <li><a href="#">Matériel éducatif</a></li>
</ul>
</li>
<li>
<a id="liens" title="Page formulaire">Nous soutenir</a>
<ul>
<li><a href="parrainer.php">Parrainer</a></li>
<li><a href="don.php">Faire un don</a></li>
<li><a href="benevole.php">Devenir bénévole</a></li>
</ul>
</li>
-->
</ul>
</div>
</div>
