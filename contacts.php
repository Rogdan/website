<!DOCTYPE html>
<html>
<head>
	<title>Контакты</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
	<link rel="stylesheet" href="styles/index_php.css?t=<?php echo(microtime(true)); ?>" media="all">
	<link rel="stylesheet" href="styles/contacts_php.css?t=<?php echo(microtime(true)); ?>" media="all">
</head>
<body>
	<?php include_once 'include/header.php'; ?>
	<?php include_once 'menu.php'; ?>
	
	<div class="content">
		<div class="mid">
			<div class="fon">
				<div class="contacts">
					<div class="block">
						<img src="img/map.png">
						Наш адрес:
						<br>
						г. Харьков, ул. Малогончаровская 28/30, 2-й этаж, 17 офис
						<br><br>
						<img src="img/clock.png">
						График работы:<br>
						Понедельник - Пятница с 9:00 до 18:00
					</div>
					<div class="block">
						<img src="img/vk.png">
						Мы ВКонтакте:
						<a href="http://vk.com/stickersumka" target="_blank">vk.com/stickersumka</a>
						<br>
						<img src="img/insta.png">
						Мы в Инстаграмме:
						<a href="https://www.instagram.com/sticker_sumka/" target="_blank">@sticker_sumka</a>
						<br><br>
						<img src="img/phone.png">
						Телефоны:
						<br>
						<img src="img/mts.png">
						МТС (050)-088-26-41
						<br>
						<img src="img/kyiv.png">
						Киевстар (097)-364-33-72
					</div>
				<div class="clear"></div>
				<hr class="line">
				</div>
			<div class="block">
				<div class="t">Есть вопросы? Напишите нам!</div>
				<form method="POST" id="feedback-form">
					Как к Вам обращаться:
					<input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name">
					Email для связи:
					<input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email">
					Ваше сообщение:
					<textarea name="messageFF" required rows="5"></textarea>
					<input type="submit" value="отправить">
				</form>

				<script>
					document.getElementById('feedback-form').addEventListener('submit', function(evt){
					  var http = new XMLHttpRequest(), f = this;
					  evt.preventDefault();
					  http.open("POST", "include/mail_sender.php", true);
					  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					  http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
					  http.onreadystatechange = function() {
					    if (http.readyState == 4 && http.status == 200) {
					      alert('Ваше сообщение отправлено.\nНаши специалисты ответят Вам в течении 2-х дней.\nБлагодарим за интерес к нашей фирме!');    
					      f.messageFF.removeAttribute('value'); // очистить поле сообщения (две строки)
					      f.messageFF.value='';
					    }
					  }
					  http.onerror = function() {
					    alert('Извините, данные не были переданы');
					  }
					}, false);
				</script>
			</div>
			<div class="block">
				<div class="t">Мы на карте:</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.3885460263277!2d36.20632841541983!3d49.98532447941387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a056af33436f%3A0xf7343998074ff2c4!2z0LLRg9C70LjRhtGPINCc0LDQu9CwINCT0L7QvdGH0LDRgNGW0LLRgdGM0LrQsCwgMjgsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1suk!2sua!4v1482339127329" width="440" height="317" frameborder="0" style="border:0; border-radius: 3px;" allowfullscreen padding=0;>
				</iframe>
			</div>
			<div class="clear"></div>
			</div>
		</div>
	</div>

	<?php include_once 'include/footer.php'; ?>
</body>
</html>