<?php

$name = $_POST['name'] ? $_POST['name'] : '';
$phone = $_POST['phone'] ? $_POST['phone'] : '';
	
$myoffer = "Перерахунок пенсії";
$mail = "juristveronika@gmail.com";
$tema = "Нова заявка";
$msg = "name: ".$name."<br/>phone: ".$phone;

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['phone']))){
    mail($mail, $tema, $msg, "Content-type: text/html; charset=\"utf-8\"");
}	else {echo('Помилка обробки даних!');}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<title>Ваші відповіді отримані!</title>
<style>.col-md-10 {background:rgba(255,255,255,.7); margin-top:20px; padding-bottom:15px; }</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3 class="text-center">
				🔥 Ваші відповіді отримані!
			</h3>
			<div class="col-md-12 text-center">
				<h4>  📲 Наш юрист зателефонує вам найближчим часом,</br> 
				      щоб уточнити по телефону декілька питань...
				</h4>		
			</div>
		</div>
	</div>
</div>
</body></html>

