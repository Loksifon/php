<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Korneliuk</title>
</head>
<style>
	
	*{
		box-sizng:border-box;
		padding: 0px;
		margin: 0px;
		font-size: 20px;
	}

	.header > .container{
		display: flex;
		align-items: center;
		
	}

	a {
		text-decoration: none;
	}
	
	.section-space {
		padding: 160px 0px;
	}

	.header__text {
		font-size: 24px;
	}

	.header {
		padding: 15px 10px;
	}

	.main__text {
		display: flex;
		justify-content: center;
	}


	.header__text {
		margin-left: 15%;
	}

	.container {
		max-width: 1130px;
		margin: 0 auto;
	}

	ul,li {
		list-style: none;
	}

	.footer__list {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
</style>
<body>
	<header class="header">
		<div class="container">
			<img src="politech.png" alt="png" class="header__logo" width="300px">
			<p class="header__text">Лабораторная работа №1</p>
		</div>
	</header>
	<section class="main section-space">
		<div class="container">
			<p class="main__text">
				<?php echo "Hello World!";?>	
			</p>
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