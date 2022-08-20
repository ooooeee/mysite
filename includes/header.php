<? include_once "connecting_db.php"; ?>

<header id="header" class="header lock-padding">
	<?php
	$nav_links_q = mysqli_query($connection, "SELECT * FROM `header-menu` ");
	$nav_links = array();
	while ($link = mysqli_fetch_assoc($nav_links_q)) {
		$nav_links[] = $link;
	}
	?>
	<nav>
		<ul>
			<?php

			foreach ($nav_links as $link) {

			?>
				<li><a class="<? echo $link['class_link'] ?>" href="<? echo  $link['URL_page'] ?>"> <?php echo $link['title']; ?></a></li>
			<?php

			}

			?>


			<!-- <li><a class="link" href="/">Главная</a></li>
			<li><a class="link" href="">Услуги</a></li>
			<li><a class="link" href="">Портфолио</a></li>
			<li><a class="link" href="">Навыки</a></li>
			<li><a class="link " href="">Обо мне</a></li>
			<li><a class="link popup-link" href="#popup">Контакты</a></li> -->
		</ul>
	</nav>
</header>