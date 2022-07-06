
<!DOCTYPE html>
<html lang="en">
<? require "includes/config.php" ?>
<?php require_once "php/globals.php" ?>
<?php require_once "php/getting_names_with_db.php" ?>
<? require 'includes/connecting_db.php' ?>
<? include ($_SERVER['DOCUMENT_ROOT'].'/pages/description.php'); ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? echo $config['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="./_sourse/demo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
	<script src="./node_modules/gquery/gquery.js" ></script>
	<script src="https://cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
	
	<script src="./jquery.easing.js"></script>
</head>

<body>

	<div class="wrapper">
		<section id="first_screen" class="first_screen">

			<div class="heading">
				<p> Здравствуйте, меня зовут <? print_r($named) ?> и я <br> </p>
				<p><span>FRONTEND WEB DEVELOPER<br></span></p>
				<p> полон энтузиазма, и настроен выполнить любой Ваш заказ</p>

			</div>
		</section>

		<section id="second_screen" class="second_screen">
			<?
			require_once "includes/header.php";
			?>
			<div class="services">
				<h1 class="section_title">ЧЕМ Я ЗАНИМАЮСЬ</h1>
				<main id="services_blocks" class="services_blocks">
					<div class="inner-info-div" number="0">
						<img src="img/computer-screen.png" alt="screen">
						<h2>Frontend</h2>
						<p>
							Вёрстка стильных и современных веб-страниц.
							Настройка адаптива под различные устройства и полноценной интерактивностью из PSD макета
							так и без него
						</p>
					</div>
					<div class="inner-info-div" number="1">
						<img src="img/backend.png" alt="screen">
						<h2>Backend</h2>
						<p>
							Разработка сложной backend логики для уже созданного frontend’a.
							Либо по готовому техническому заданию с обеспечением максимальной производительности
						</p>
					</div>
					<div class="inner-info-div" number="2">
						<img src="img/pc.png" alt="screen">
						<img src="img/cogwheels.png" alt="">
						<h2>Full stack</h2>
						<p>
							Создание полноценных сайтов, от лендинга до масштабного интеренет ресурса,
							включающих в себя пользовательский интерфейс,
							сложную логику и высокопроизводительные серверные скрипты
						</p>
					</div>
					<div class="inner-info-div" number="3">
						<img src="img/customize.png" alt="screen">
						<h2>customization</h2>
						<p>
							Доработка и настройка готовых проектов , настройка дополнительных функций и технологий.
							Изменение готовых проектов для ваших нужд
						</p>
					</div>
				</main>
			</div>
		</section>

		<section id="third_section" class="third_section">
			<hr>
			<h1 class="section_title">ОСНОВНЫЕ СВОЙСТВА МОИХ САЙТОВ</h1>
			<main id="items_main_block_2">
				<div id="item_2_1" class="item_2">
					<img src="img/speedometer_two.svg" alt="speed">
					<h2><? print_r($db_properties['first_property']) ?></h2>
					<p>Максимальная производительность и взаимодействие без задержек - мой главный приоритет</p>
				</div>
				<div id="item_2_2" class="item_2">
					<img src="img/resolutions.png" alt="">
					<h2><? print_r($db_properties['second_property']) ?></h2>
					<p>Мои макеты будут работать на любом устройстве, большом или маленьком</p>
				</div>
				<div id="item_2_3" class="item_2">
					<img src="img/brain.png" alt="">
					<h2><? print_r($db_properties['third_property']) ?></h2>
					<p>Стильный и простой в использовании, интуитивно понятный UX/UI.</p>
				</div>
				<div id="item_2_4" class="item_2">
					<img src="img/rocket.png" alt="">
					<h2><? print_r($db_properties['the_fourth_property']) ?></h2>
					<p>Веб-сайт не должен быть статичным, мне нравится оживлять страницы и вдыхать в сайт жизнь</p>
				</div>
			</main>
		</section>
		<section class="fourth_section">
		<div id="description" class="description open">
    	</div>
			<hr>
			<h1 class="section_title" >Мои работы</h1>
			<div class="blog">
				<div class="blog_content_grid">
					<? $projects_data = mysqli_query($connection, "SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 10 "); 
					?>
					<?
					while ($proj = mysqli_fetch_array($projects_data)) {
					?>
						<figure class="block_desc" id="block_desc" item_id="<? echo (int) $proj['id']; ?>">
							<a href="#project_figure" class="project-figure">
								<img src="img/<?php echo $proj['image']; ?>" alt="">
								<figcaption>
									<h3><? print_r($proj['name-project']) ?></h3>
									<p><? print_r($proj['site-type']) ?></p>
								</figcaption>
							</a>
						</figure>

					<?
					}
					?>

				</div>
			</div>
		</section>
		<section style="background: #2ecc71; color: rgba(0, 0, 0, 0.5);">
			<h2>Underline Fill</h2>
			<nav class="fill">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Downloads</a></li>
					<li><a href="#">More</a></li>
					<li><a href="#">Nice staff</a></li>
				</ul>
			</nav>
		</section>

		<? require_once "includes/popup.php" ?>
	</div>
	<div class="test"></div>
	<?
	require_once "includes/footer.php"
	?>
</body>
<script src="_sourse/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
<script src="js/scroll.js"></script>
<script src="js/height&widthElements.js"></script>
<script src="./js/item_animations.js"></script>
<script src="js/popup.js"></script>
<script src="js/project_description.js"></script>

</html>