<?php
include_once('header.controller.php')
?>

<div id="navbar">
	<div id="bandeau">
		<a href="index.php"> <img src="images/Logo1.png" alt="image bandeau"/></a>
		<h1>Mama Mundi</h1>
		<div id="icones">

			<?php foreach ($headerCtrl->getIcons() as $icon){ ?>

			<a href="<?php echo $icon['href'];?>"><img src="<?php echo $icon['src-img'];?>" alt="<?php echo $icon['alt-img'];?>"/></a>

			<?php }  ?>

		</div>
	</div>
	<div id="menu">
		<ul id="menu_der">

			<?php foreach ($headerCtrl->getMenuItems() as $menuItem){ ?>

			<?php if (!array_key_exists("childs", $menuItem)): ?>

				<li>
					<a id="liens" href="<?php echo $menuItem['url']; ?>" title="<?php echo $menuItem['label']; ?>"><?php echo $menuItem['label']; ?></a>
				</li>

			<?php else: ?>

				<li>
					<a id="liens" href="<?php echo $menuItem['url']; ?>" title="<?php echo $menuItem['label']; ?>"><?php echo $menuItem['label']; ?></a>
					<ul>
						<?php foreach ($menuItem['childs'] as $childItem){ ?>

						<li><a href="<?php echo $childItem['childs']; ?>"><?php echo $childItem['childs']; ?></a></li> 

						<?php } ?>
					</ul>
				</li>

			<?php endif ?>
			<?php } ?>
		</ul>
	</div>
</div>