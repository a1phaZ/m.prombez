<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$town = $_POST['town'];
$book = $_POST['book'];

$formcontent=" $name \n $tel \n $town \n $email \n $book \n";
$recipient = "pbiot@mail.ru, pbiotperm@mail.ru";
$subject = "Mail from prombez-perm.ru (training)";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

$ok_text = <<<EOF

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="theme-color" content="#f4f5f6">
	<meta name="apple-mobile-web-app-status-bar-style" content="#f4f5f6">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
	<title>Заявка отправлена</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<!-- CSS Reset -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
	<main class="wrapper">
		<nav class="navigation">
			<section class="container">
				<a href="./index.html" class="navigation-title">
					<img src="img/logo.png" class="img">
					<h1 class="title">Верхнекамский Техн. Институт</h1>

				</a>
				<ul class="navigation-list float-right">
					<li class="navigation-item">
						<a class="navigation-link" href="#menu-grid" data-popover id="menu-grid-link">
							Меню
						</a>
						<div class="popover" id="menu-grid">
							<ul class="popover-list">
								<li class="popover-item">
									<a class="popover-link" href="./company.html" title="Компания">Компания</a>
									<a class="popover-link" href="./training.html" title="Обучение">Обучение</a>
									<a class="popover-link" href="./rating.html" title="Спец. оценка условий труда">Спец. оценка условий труда</a>
									<a class="popover-link" href="./photo.html" title="Фотоальбом">Фотоальбом</a>
									<a class="popover-link" href="./contacts.html" title="Контакты">Контакты</a>
									<a class="popover-link" href="./form.html" title="Заявка">Заявка</a>
									<a class="popover-link" href="./buy.html" title="Учебные материалы">Учебные материалы</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</section>
		</nav>
		<header class="header">
			<section class="container">
				<img src="img/logo.png" alt="logo" class="">
				<h1 class="title">Верхнекамский технический институт</h1>
				<p class="description">Ваша заявка принята, в ближайшее время с вами свяжется наш представитель</p>
				<a class="button" href="./index.html" title="Вернуться на главную">Вернуться на главную</a>
			</section>
		</header>
		<footer class="footer">
			<section class="container">
				<img src="img/logo.png" class="float-left">
				<strong>ЧУ ДПО "Верхнекамский технический институт" </strong>
				<div class="clearfix"></div>
				<p> Адрес: Россия, Пермский край, г.Соликамск, ул.Черняховского, 4А </p>
				<p> Контактные телефоны: 
					<br>
					<a href="tel:83425365001">+7 (34253) 6-50-01</a>; 
					<br>
					<a href="tel:83425365001">+7 (34253) 6-50-06</a> 
				</p>
				<p> Адрес: Россия, Пермский край, г.Пермь, ул.Подлесная, 43А </p>
				<p> Контактные телефоны: 
					<br>
					<a href="tel:83422580070">+7 (342) 258-00-70</a>; 
					<br>
					<a href="tel:89223353703">+7 (922) 335-37-03</a> 
				</p>

				<p> Email: <a href="mailto: pbiot@mail.ru">pbiot@mail.ru</a></p>
			</section>
		</footer>
	</main>

	<script type="text/javascript">
		var el = document.getElementById('menu-grid-link');
		el.addEventListener('click', function(e){
			e.preventDefault();
			var href = e.target.attributes.href.value[0] === '#' ? e.target.attributes.href.value.substring(1) : e.target.attributes.href.value;
			var mg = document.getElementById(href);
			mg.classList.toggle('popover-open');
		});
	</script>
</body>
</html>
EOF;

echo $ok_text;

?>
