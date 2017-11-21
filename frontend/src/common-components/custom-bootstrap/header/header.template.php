<?php
include_once('header.controller.php')
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mama Mundi</a><img width="20%" height="20%" src="images/Logo1.png" alt="image bandeau"/>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php foreach ( $headerCtrl->getMenuItems() as $menuItem){ ?>

          <?php if (!array_key_exists("childs", $menuItem)): ?>

            <li>
              <a href="<?php echo $menuItem['url']; ?>" title="<?php echo $menuItem['label']; ?>">
                <?php echo $menuItem['label']; ?>
              </a>
            </li>

          <?php else: ?>

            <li class="dropdown">

              <a href="<?php echo $menuItem['url']; ?>" title="<?php echo $menuItem['label']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $menuItem['label']; ?> <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                <?php foreach ( $menuItem['childs'] as $childItem){ ?>
                  <li><a href="<?php echo $childItem['url']; ?>"><?php echo $childItem['label']; ?></a></li>
                <?php } /* enf foreach */ ?>
              </ul>
            </li>
          <?php endif ?>
        <?php } /* enf foreach */ ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php foreach ( $headerCtrl->getIcons() as $icon){ ?>
            <li><a href="<?php echo $icon["href"];?>"><img width="20px" height="20px" src="<?php echo $icon["src-img"];?>" alt="<?php echo $icon["alt-img"];?>"/></a></li>
        <?php } /* enf foreach */ ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
