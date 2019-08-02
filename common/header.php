<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Главная</title>

		<link href="stylesheet/image/favicon.png" rel="icon" />
		<link href="stylesheet/css/stylesheet.css?v=<?php echo rand(0, 1000);?>" rel="stylesheet" />
		<link href="stylesheet/css/bootstrap.min.css" rel="stylesheet" />
		<link href="stylesheet/css/font-awesome.min.css" rel="stylesheet" />
		<link href="stylesheet/js/slick/slick.css" rel="stylesheet" />
		<link href="stylesheet/js/slick/slick-theme.css" rel="stylesheet" />
	</head>
	<body>
		<header class="main">
			<header class="top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-7 col-md-5">
							<ul class="list-unstyled list-inline">
								<li class="list-inline-item">
									Ваш регион доставки: <a href="#">Москва</a>
								</li>
								<li class="list-inline-item">
									<span class="">Помощь при покупке:</span>  (499) 653-78-53
								</li>
								<li class="list-inline-item">
									<a href="#">
										<span class="mark-shop"><i class="fa fa-map-marker" aria-hidden="true"></i></span> Магазины
									</a>
								</li>
							</ul>
						</div>
						<div class="col-sm-5 col-md-7">
							<ul class="float-right list-unstyled list-inline">
								<li class="list-inline-item">
									<a href="#">Оплата</a>
								</li>
								<li class="list-inline-item">
									<a href="#">Доставка</a>
								</li>
								<li class="list-inline-item">
									<a href="#">Гарантия и возврат</a>
								</li>
								<li class="list-inline-item">
									<a href="#">Часто задаваемые вопросы</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<header class="logo">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<img src="stylesheet/image/logo.png" alt="logo">
							</div>
						</div>
						<div class="col-md-6">
							<div class="search-wrapper">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-search"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Поиск по маркам, модели" aria-label="Поиск по маркам, модели">
									<div class="input-group-append">
										<button type="button" class="btn btn-default btn-outline-secondary">Поиск</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="cart">
								<div class="float-right">
									<a href="#">
										<i class="fa fa-shopping-bag"></i>
										Моя корзина
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="container-fluid">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg navbar-light bg-light rounded mega-navbar">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown megamenu-li">
								<a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Весь каталог</a>
								<div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
									<div class="row">
										<div class="col-sm-6 col-lg-2">
											<a class="dropdown-item" href="#">Новинки</a>
											<a class="dropdown-item" href="#">Распродажа</a>
											<hr>
											<a class="dropdown-item" href="#">Туфли</a>
											<a class="dropdown-item" href="#">Балетки</a>
											<a class="dropdown-item" href="#">Мокасины</a>
											<a class="dropdown-item" href="#">Кроссовки</a>
											<a class="dropdown-item" href="#">Сабо</a>
											<a class="dropdown-item" href="#">Босоножки</a>
											<a class="dropdown-item" href="#">Сандалии</a>
											<a class="dropdown-item" href="#">Ботинки</a>
											<a class="dropdown-item" href="#">Ботильоны</a>
											<a class="dropdown-item" href="#">Сапоги</a>
											<a class="dropdown-item" href="#">Ботфорты</a>
											<a class="dropdown-item" href="#">Балетки</a>
										</div>
										<div class="col-sm-6 col-lg-2">
											<h5>По сезонам</h5>
											<a class="dropdown-item" href="#">Весенняя обувь</a>
											<a class="dropdown-item" href="#">Летняя обувь</a>
											<a class="dropdown-item" href="#">Осенняя обувь</a>
											<a class="dropdown-item" href="#">Зимняя обувь</a>
											<a class="dropdown-item" href="#">Мультисезон</a>
											<br>
											<h5>Сопутствующие товары</h5>
											<a class="dropdown-item" href="#">Стельки</a>
											<a class="dropdown-item" href="#">Средства ухода</a>
										</div>
										<div class="col-sm-6 col-lg-2">
											<h5>Ортопедическая обувь</h5>
											<a class="dropdown-item" href="#">Полуботинки</a>
											<a class="dropdown-item" href="#">Ботинки</a>
											<a class="dropdown-item" href="#">Босоножки</a>
											<a class="dropdown-item" href="#">Туфли</a>
											<a class="dropdown-item" href="#">Слипоны</a>
											<a class="dropdown-item" href="#">Балетки</a>
											<a class="dropdown-item" href="#">Кроссовки</a>
											<a class="dropdown-item" href="#">Сабо</a>
											<a class="dropdown-item" href="#">Сапоги</a>
										</div>
										<div class="col-sm-6 col-lg-6">
											<div class="row">
												<div class="col-sm-6">
													<img src="https://source.unsplash.com/250x150/?sig=4" alt="..." style="width: 100%;">
													<h5 class="text-center">Обувь больших размеров</h5>
												</div>
												<div class="col-sm-6">
													<img src="https://source.unsplash.com/250x150/?sig=4" alt="..." style="width: 100%;">
													<h5 class="text-center">Летняя коллекци</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Обувь на полную ногу</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Обувь больших размеров</a>
							</li>
							<li class="nav-item dropdown megamenu-li">
								<a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Производители</a>
								<div class="dropdown-menu megamenu" aria-labelledby="dropdown02">
									<div class="row">
										<div class="col-sm-6 col-lg-2">
											<h5>Топ бренды</h5>
											<a class="dropdown-item" href="#">Aaltonen</a>
											<a class="dropdown-item" href="#">Bludo</a>
											<a class="dropdown-item" href="#">Caprice</a>
											<a class="dropdown-item" href="#">Caprice</a>
											<a class="dropdown-item" href="#">Dakkem</a>
											<a class="dropdown-item" href="#">Francesco Donni</a>
											<a class="dropdown-item" href="#">iMARA</a>
											<a class="dropdown-item" href="#">Jana</a>
										</div>
										<div class="col-sm-6 col-lg-2">
											<h5>Все бренды</h5>
											<a class="dropdown-item" href="#">Aaltonen</a>
											<a class="dropdown-item" href="#">Ara</a>
											<a class="dropdown-item" href="#">Ascalini</a>
											<a class="dropdown-item" href="#">Baden</a>
											<a class="dropdown-item" href="#">Balex</a>
											<a class="dropdown-item" href="#">Bludo</a>
											<a class="dropdown-item" href="#">Caprice</a>
											<a class="dropdown-item" href="#">Cavaletto</a>
											<a class="dropdown-item" href="#">Covani</a>
											<a class="dropdown-item" href="#">Dakkem</a>
											<a class="dropdown-item" href="#">FORme</a>
											<a class="dropdown-item" href="#">Francesco Donni</a>
											<a class="dropdown-item" href="#">iMARA</a>
											<a class="dropdown-item" href="#">Jana</a>
										</div>
										<div class="col-sm-6 col-lg-2">
											<a class="dropdown-item" href="#">Janita</a>
											<a class="dropdown-item" href="#">Josef Seibel</a>
											<a class="dropdown-item" href="#">LM Orthopedic</a>
											<a class="dropdown-item" href="#">Marco Rocco</a>
											<a class="dropdown-item" href="#">Marco Tozzi</a>
											<a class="dropdown-item" href="#">Moda Donna</a>
											<a class="dropdown-item" href="#">OrtoMed</a>
											<a class="dropdown-item" href="#">Portania</a>
											<a class="dropdown-item" href="#">Rieker</a>
											<a class="dropdown-item" href="#">Roccol</a>
											<a class="dropdown-item" href="#">Romer</a>
											<a class="dropdown-item" href="#">Romika</a>
											<a class="dropdown-item" href="#">Sursil Ortho</a>
											<a class="dropdown-item" href="#">Tamaris</a>
											<a class="dropdown-item" href="#">TOFA</a>
										</div>
										<div class="col-sm-6 col-lg-6">
											<div class="row">
												<div class="col-sm-6">
													<img src="https://source.unsplash.com/250x150/?sig=4" alt="..." style="width: 100%;">
													<h5 class="text-center">Обувь Ascalini</h5>
												</div>
												<div class="col-sm-6">
													<img src="https://source.unsplash.com/250x150/?sig=4" alt="..." style="width: 100%;">
													<h5 class="text-center">Комфортная обувь Jana</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Распродажа</a>
							</li>
						</ul>
					</div>
				</nav>
				<!-- Navbar -->
			</div>
		</header>