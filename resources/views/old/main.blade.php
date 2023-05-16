<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<title>Document</title>
</head>

<style>
	body {
		background: #E5E5E5;
	}

	header {
		display: flex;
		align-items: center;
	}

	p {
		font-family: 'Roboto mono';
		color: black;
		margin: 5px;
	}

	a{
		text-decoration: none;
	}

	.current {
		text-decoration: underline;
	}

	.container {
		width: 100%;
		max-width: 1200px;
		margin: 0 auto;
	}

	.header__links {
		display: flex;
		list-style: none;
	}

	.header__links a {
		text-decoration: none;
	}

	.header__links p {
		color: black;
	}

	.main-news {
		display: flex;
		justify-content: space-between;
	}

	.main-news__item {
		display: flex;
		flex-direction: column;
		width: 380px;
		height: fit-content;
		border-radius: 10px;
		background: rgba(103, 115, 135, 0.1);

		font-size: 14px;
	}

	.news__header {
		font-weight: 700;
	}

	.news__date {
		color: rgba(103, 115, 135, 0.7);
	}

	.feedback {
		display: flex;
		flex-direction: column;
		align-items: center;

		width: 780px;
		height: 275px;
		margin: 70px auto 0;
		background: rgba(103, 115, 135, 0.1);
	}

	.feedback form {
		display: flex;
		flex-direction: column;
		align-items: center;

		margin-top: 45px;
	}

	.form__header {
		font-weight: 700;
		margin-top: 21px;
	}

	.text__input input {
		width: 354px;
		height: 44px;
		border: 1px solid rgba(25, 28, 33, 0.4);
	}

	input[type="button"] {
		width: 240px;
		height: 50px;
		margin: 50px auto 0;

		font-family: 'Roboto mono';
		font-size: 15px;

		color: white;
		background: #191C21;
		cursor: pointer;
	}
</style>

<body>
	<header class="container">
		<img src="/resources/img/logo.png" alt="">
		<ul class="header__links">
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/">
					<p class="current">Главная</p>
				</a>
			</li>
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/contacts">
					<p>Контакты</p>
				</a>
			</li>
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/news">
					<p>Новости</p>
				</a>
			</li>
		</ul>
	</header>

	<div class="main-news container">
		@for ($i = 0; $i < 3; $i++) 
		<div class="main-news__item">
			<a href="http://stasbutov.cr55389.tw1.ru/news/detail/{{$news[$i] -> id}}">
				<p class="news__header">{{$news[$i] -> name}}</p>
			</a>
			<p>{{$news[$i] -> preview_text}}</p>
			<p class="news__date">{{$news[$i] -> data}}</p>
		</div>
		@endfor


	</div>

	<div class="container">
		<div class="feedback">
			<p class="form__header">Форма обратной связи</p>
			<form action="http://stasbutov.cr55389.tw1.ru/create">
				<div class="text__input">
					<input type="text" placeholder="Введите имя">
					<input type="text" placeholder="Введите номер">
				</div>
				<input type="button" value="Отправить">
			</form>
		</div>
	</div>

</body>

</html>