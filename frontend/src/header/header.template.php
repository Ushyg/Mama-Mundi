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

      <?php foreach ( $headerCtrl->getMenuItems() as $menuItem){ ?>

        <?php if (!array_key_exists("childs", $menuItem)): ?>

          <li>
            <a id="liens" href="<?php echo $menuItem['url']; ?>" title="<?php echo $menuItem['label']; ?>"><?php echo $menuItem['label']; ?></a>
          </li>

        <?php else: ?>

          <li>
            <a id="liens" href="<?php echo $menuItem['url']; ?>" title="<?php echo $menuItem['label']; ?>"><?php echo $menuItem['label']; ?></a>

            <ul>
              <?php foreach ( $menuItem['childs'] as $childItem){ ?>
                <li><a href="<?php echo $childItem['url']; ?>"><?php echo $childItem['label']; ?></a></li>
                <?php } /* enf foreach */ ?>
              </ul>

            </li>

          <?php endif ?>
          <?php } /* enf foreach */ ?>
        </ul>
      </div>
    </div>
