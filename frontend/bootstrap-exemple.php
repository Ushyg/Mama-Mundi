<!DOCTYPE html>
	<html>
		<head>

			<?php include('./src/common-components/head-assets/head-assets.template.php'); ?>

      <!-- review(youyou) -->
      <!-- Utiliser un gestionnaire de librairies pour récupérer Bootstrap et gérer ses versions (NPM par exemple),
          plutôt que d'utiliser le lien CDN classique -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
			<link rel="stylesheet" href="./src/contents/bootstrap-exemple/bootstrap-exemple.css"/>
      <link rel="stylesheet" href="./src/common-components/custom-bootstrap/user-panel/user-panel.css"/>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
		<body>
      <div class="container">

          <div class="row">
            <?php include('./src/common-components/custom-bootstrap/header/header.template.php'); ?>
          </div>

          <div class="row">
            <?php include('./src/contents/bootstrap-exemple/bootstrap-exemple.template.php'); ?>
          </div>

      </div>
		</body>
	</html>
