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

		margin: 5px;
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

	.contacts {
		background: rgba(103, 115, 135, 0.1);
		border-radius: 4px;
	}

	.contacts p {
		margin-top: 15px;
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
					<p class="current">Контакты</p>
				</a>
			</li>
			<li>
				<a href="http://stasbutov.cr55389.tw1.ru/news">
					<p>Новости</p>
				</a>
			</li>
		</ul>
	</header>


	<div class="contacts container">
		<p>Контакты</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>

			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
		</p>
	</div>

</body>

</html>