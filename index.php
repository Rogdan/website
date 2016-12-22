<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
	<link rel="stylesheet" href="styles/index_php.css?t=<?php echo(microtime(true)); ?>" media="all">
</head>
<body>
	<?php include_once 'include/header.php'; ?>

	<div class="slider-block">
		<div class="site-content-wrap">
			<div class="mid">
		        <div class="slider-box">
		            <div class="slider">  
		                <img src="img/slider_img/1.png" alt="">
		                <img src="img/slider_img/2.png" alt="">
		                <img src="img/slider_img/3.png" alt="">
		                <img src="img/slider_img/4.png" alt="">
		                <img src="img/slider_img/5.png" alt="">
		             </div>
		            <div class="prev"></div>
		            <div class="next"></div>
		        </div>
			</div>
		</div>
	</div>

	<?php include_once 'menu.php'; ?>

	<div class="content">
		<div class="mid">
			<div class="fon">
				<div class="block">
					<a href="https://vk.com/market-89871878?section=album_1">
						<div class="anons">
							<section>
								<img src="img/anons/наборы.png" alt="Наборы наклеек">
								<h3>Наборы стикеров</h3>
								<p>Выбирай наклейки по дуще! Каталог наклеек, объединенных в наборы по <b>тематике</b> и <b>интересам</b>.</p>
							</section>
						</div>
					</a>
				</div>
				<div class="block">
					<a href="#">
						<div class="anons">
							<section>
								<img src="img/anons/поштучно.png" alt="Стикеры поштучно">
								<h3>Наклейки поштучно</h3>
								<p>Заказывай наклейки <b>поштучно</b> и <b>економь</b>! Цена стартует от 1.5 грн!</p>
							</section>
						</div>
					</a>
				</div>
				<div class="clear"></div>
				<hr class="line">
				<div class="advert">
					<a href="#">
						<img src="img/anons/дизайн.png" alt="Разработка дизайна">
					</a>
				</div>
				<hr class="line">
				<div class="block">
					<a href="#">
						<div class="anons">
							<section>
								<img src="img/anons/на ноут.png" alt="Наклейки на ноутбук">
								<h3>Наклейки на ноутбук</h3>
								<p>Наклейки на ноутбук помогают <b>защитить корпус</b> от царапин и <b>стильно выделится</b> среди толпы:)</p>
							</section>
						</div>
					</a>
				</div>
				<div class="block">
					<a href="#">
						<div class="anons">
							<section>
								<img src="img/anons/фото.png" alt="Стикеры с вашими фото">
								<h3>Стикеры с вашими фото</h3>
								<p><b>Удиви друзей</b> стикерами со своими фотографиями! Поклейка на <b>любую поверхность</b> :)</p>
							</section>
						</div>
					</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<?php include_once 'include/footer.php';?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="slider_script.js"></script>
</body>
</html>