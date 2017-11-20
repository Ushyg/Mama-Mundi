<?php
include_once('head-assets.controller.php')
?>

<meta charset="<?php echo $headAssetsCtrl->getCharset(); ?>">
<title><?php echo $headAssetsCtrl->getTitle(); ?></title>

<?php foreach ( $headAssetsCtrl->getCssAssets() as $cssDatas){ ?>

  <link rel="stylesheet" href="<?php echo $cssDatas["href"]; ?>"/>

<?php } /* enf foreach */ ?>

<?php foreach ( $headAssetsCtrl->getJsAssets() as $jsDatas){ ?>

  <script type="text/javascript" src="<?php echo $jsDatas["src"]; ?>"></script>

<?php } /* enf foreach */ ?>
