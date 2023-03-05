<?php
	const css_url = 'style.css'
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= css_url?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Korneliuk</title>
</head>
<body>
	<header class="header">
		<div class="container">
			<img src="../politech.png" alt="png" class="header__logo" width="300px">
			<p class="header__text">Лабораторная работа №2</p>
		</div>
	</header>
	<section class="main">
		<div class="container">
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Результат функции get_headers</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
					<?php 
					$url = 'https://httpbin.org/post';
					print_r(get_headers($url));
					?>
				</textarea>
				<div class="col-sm-10">
						<a href="./form.php" class="btn btn-primary">Обратно на форму</a>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<ul class="footer__list">
				<li class="footer__item">
					<a href="https://github.com/Loksifon/php" target="_blank">github</a>
				</li>
				<li class="footer__item">Корнелюк Владислав Андреевич</li>
				<li class="footer__item">Группа 221-323</li>
			</ul>
		</div>
	</footer>
</body>
</html>