<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	.news__header {
		font-weight: 700;
	}

	.news__date {
		color: rgba(103, 115, 135, 0.7);
	}

	.news-item {
		display: flex;
		flex-direction: column;
		width: 100%;
		height: fit-content;
		margin-top: 15px;

		border-radius: 10px;
		background: rgba(103, 115, 135, 0.1);

		font-size: 14px;
	}
</style>

<body>
	<header class="container">
		<img src="/resources/img/logo.png" alt="">
		<ul class="header__links">
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/">
					<p>Главная</p>
				</a>
			</li>
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/contacts">
					<p>Контакты</p>
				</a>
			</li>
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/news">
					<p class="current">Новости</p>
				</a>
			</li>
		</ul>
	</header>

	<div class="news container">
		@foreach ($news as $item)
		<div class="news-item">
			<a href="http://stasbutov.cr55389.tw1.ru/news/detail/{{$item -> id}}">
				<p class="news__header">{{$item -> name}}</p>
			</a>
			<p>{{$item -> preview_text}}</p>
			<p class="news__date">{{$item -> data}}</p>
		</div>
		@endforeach
	</div>
</body>

</html>