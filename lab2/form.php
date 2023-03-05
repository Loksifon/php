<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
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
		<div class="container gy-5">
			<form method="post" action="https://httpbin.org/post">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="inputEmail3" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputName" class="col-sm-2 col-form-label">Имя пользователя</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="inputName" id="inputPassword3" placeholder="Имя пользователя">
					</div>
				</div>
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0">Тип обращения</legend>
						<div class="col-sm-10">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
									checked>
								<label class="form-check-label" for="gridRadios1">
									Жалоба
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
								<label class="form-check-label" for="gridRadios2">
									Предложение
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
								<label class="form-check-label" for="gridRadios2">
									Благодарность
								</label>
							</div>
							<div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Текст Обращения</label>
								<textarea class="form-control" name="exampleFormControlTextarea1" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="form-group row">
					<div class="col-sm-2">Вариант ответа:</div>
					<div class="col-sm-10">
						<div class="form-check">
							<input class="form-check-input" name="gridCheck1" type="checkbox" id="gridCheck1">
							<label class="form-check-label" for="gridCheck1">
								e-mail
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck1" name="gridCeck2">
							<label class="form-check-label" for="gridCheck2">
								смс
							</label>
						</div>
					</div>
				</div>
				<div class="form-group row g-1">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Отправить</button>
						<a href="./answer.php" class="btn btn-primary">Следующая страница</a>
				</div>
			</form>
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