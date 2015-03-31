<!DOCTYPE html>
<html lang="bg">
	<head>
	<meta charset="utf-8">
	<title>Здравейте</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
	<script type='text/javascript' src="js/handlebars-v3.0.0.js"></script>
	<script type='text/javascript' src="js/main.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body> 
	<div id="get">
	<h1>Здравейте <?php echo $_GET["given-name"]; ?>!</h1>
		<section class="get-reg">
			<div id="resultDiv"></div>
			<h2>Вашата въведена информация!</h2>
			<p>Име: <?php echo $_GET["given-name"]; ?></p>
			<p>Фамилно име: <?php echo $_GET["family-name"]; ?></p>
			<p>Вашият имейл адрес: <?php echo $_GET["email"]; ?></p>
			<hr>
			<p>Паролата ви: <?php echo $_GET["password"]; ?></p>
			<p>Мобилния ви телефон: <?php echo $_GET["phone"]; ?></p>
			<hr>
			<p>Вашето съобщение: <?php echo $_GET["comment"]; ?></p>
			<hr>
			<p>Местоположение: <?php echo $_GET["continent"]; ?></p>
			<p>Пол: <?php echo $_GET["radio-type"]; ?></p>
			<p>Дата: <?php echo $_GET["date"]; ?></p>
		</section> 
	</div> 
	</body>
</html> 