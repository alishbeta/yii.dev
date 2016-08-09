<?php
\frontend\assets\MainAsset::register($this);
?>
<!DOCTYPE html>
<?php $this->beginPage() ?>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Poezd Travel</title>
		<?php $this->head() ?>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<header id="header">
				<div class="top-panel">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-md-offset-5  phone">
								<i class="ic-phone"></i> +38 044 303 95 53
</div>
							<div class="col-md-4 login">
								<span class="login-a">
									<i class="ic-login-a"></i><a href="#">Вход для агенств</a>
								</span>
								<span class="login-t">
									<i class="ic-login-t"></i><a href="#">Вход для туристов</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="nav-panel">
					<div class="container">
						<div class="row">
							<div class="col-md-2 logo">
								<i class="ic-logo"></i>
							</div>
							<div class="col-md-8 main-nav">
								<ul class="menu">
									<li>
										<a href="#">Жд билеты по Европе</a>
										<ul>
											<li><a href="#">Общая информация</a></li>
											<li><a href="#">Типы поездов</a></li>
											<li><a href="#">ТОР-маршруты</a></li>
											<li><a href="#">Программы по странам</a></li>
											<li><a href="#">Акции и события</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Автобусы по Европе</a>
										<ul>
											<li><a href="#">Общая информация</a></li>
											<li><a href="#">Типы автобусов</a></li>
											<li><a href="#">ТОР-маршруты</a></li>
											<li><a href="#">Программы по странам</a></li>
											<li><a href="#">Акции и события</a></li>
										</ul></li>
										<li><a href="#">На авто по Европе</a>
										<ul>
											<li><a href="#">Условия бронирования</a></li>
											<li><a href="#">Погода и туры</a></li>
											<li><a href="#">Наши авто</a></li>
										</ul>
									</li>
									<li><a href="#">Наши программы</a>
									<ul>
										<li><a href="#">Экскурсии</a></li>
										<li><a href="#">Туры</a></li>
									</ul>
								</li>
								<li><a href="#">О компании</a>
								<ul>
									<li><a href="#">О нас</a></li>
									<li><a href="#">Контакты</a></li>
									<li><a href="#">Запрос договора</a></li>
									<li><a href="#">Публичная оферта</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="col-md-2 exchange">
						<div class="ex-block">
							<div>Курсы валют 07.07.15</div>
							<div>1 USD - 25, 26 UAH</div>
							<div>1 EUR - 30, 05 UAH</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-baner">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<div class="search">
							<ul class="nav nav-pills s-pills">
								<li class="active"><a data-toggle="pill" href="#home">Поезд</a></li>
								<li><a data-toggle="pill" href="#menu1">Автобус</a></li>
								<li><a data-toggle="pill" href="#menu2">Трансфер</a></li>
								<li><a data-toggle="pill" href="#menu3">Авиа</a></li>
								<li><a data-toggle="pill" href="#menu4">Чартер</a></li>
								<li><a data-toggle="pill" href="#menu5">Туры</a></li>
							</ul>
							<div class="tab-content main-tabs">
								<!-- НАЧАЛО БЛОКА ПОЕЗД -->
								<div id="home" class="tab-pane fade">
									<form action="index.php" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ГОРОД ОТПРАВЛЕНИЯ</label>
													<select name="city-out" class="form-control">
														<option>Киев, Украина</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ГОРОД ПРИБЫТИЯ</label>
													<select name="city-in" class="form-control">
														<option>Варшава, Польша</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ДАТА ОТПРАВЛЕНИЯ</label>
													<input name="date-out" type="text" class="form-control datepicker-here calendar">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ВРЕМЯ ОТПРАВЛЕНИЯ</label>
													<input name="time-out" type="text" class="form-control datepicker-here clock" placeholder="00:00">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<label>ВЗРОСЛЫЕ</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="old" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-4">
												<label>ДЕТИ</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="young" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>ВОЗРАСТ ДЕТЕЙ</label>
													<select name="age" class="age form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2 col-md-offset-9">
												<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
											</div>
										</div>
									</form>
								</div>
								<!-- НАЧАЛО БЛОКА ПОЕЗД -->
								<!-- НАЧАЛО БЛОКА АВТОБУС -->
								<div id="menu1" class="tab-pane fade in active">
									<form action="index.php" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ГОРОД ОТПРАВЛЕНИЯ</label>
													<select name="city-out" class="form-control">
														<option>Киев, Украина</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ГОРОД ПРИБЫТИЯ</label>
													<select name="city-in" class="form-control">
														<option>Варшава, Польша</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ДАТА ОТПРАВЛЕНИЯ</label>
													<input name="date-out" type="text" class="form-control datepicker-here calendar">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ВРЕМЯ ОТПРАВЛЕНИЯ</label>
													<input name="time-out" type="text" class="form-control datepicker-here clock" placeholder="00:00">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<label>ВЗРОСЛЫЕ</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="old" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-4">
												<label>ДЕТИ</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="young" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>ВОЗРАСТ ДЕТЕЙ</label>
													<select name="age" class=" age form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2 col-md-offset-9">
												<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
											</div>
										</div>
									</form>
								</div>
								<!-- НАЧАЛО БЛОКА АВТОБУС -->
								<!-- НАЧАЛО БЛОКА ТРАНСФЕР -->
								<div id="menu2" class="tab-pane fade">
									<form action="index.php" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>СТРАНА</label>
													<select name="country" class="form-control">
														<option>Украина</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ГОРОД ОТПРАВЛЕНИЯ</label>
													<select name="city-out" class="form-control">
														<option>Киев</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ГОРОД ПРИБЫТИЯ</label>
													<select name="city-in" class="form-control">
														<option>Киев</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>

											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ДАТА ОТПРАВЛЕНИЯ</label>
													<input name="date-out" type="text" class="form-control datepicker-here calendar">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<label>КОЛ-ВО ПАСАЖИРОВ</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="pas-count" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-7">
												<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
											</div>
										</div>

									</form>
								</div>
								<!-- НАЧАЛО БЛОКА ТРАНСФЕР -->
								<!-- НАЧАЛО БЛОКА АВИА -->
								<div id="menu3" class="tab-pane fade">
									<ul class="nav nav-pills nav-justified">
										<li class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="pill">В одну сторону</a></li>
										<li><a href="#tab2" aria-controls="tan2" role="tab" data-toggle="pill">В обе стороны</a></li>
										<li><a href="#tab3" aria-controls="tan3" role="tab" data-toggle="pill">Варианты</a></li>
									</ul>
									<div class="tab-content">
										<!-- ПЕРВЫЙ ТАБ -->
										<div role="tabpanel" class="tab-pane fade in active" id="tab1">
											<form action="index.php" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-11">ПУНКТ ВЫЛЕТА</label>
															<select name="city-out" class="form-control input-sm">
																<option>Киев (IEV)</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-11">ПУНКТ НАЗНАЧЕНИЯ</label>
															<select name="city-out" class="form-control input-sm">
																<option>Вильнус (VNO)</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-12">ДАТА ВЫЛЕТА</label>
															<input name="date-out" type="text" class="form-control datepicker-here input-sm calendar">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-12">ВРЕМЯ ВЫЛЕТА</label>
															<input name="date-out" type="text" class="form-control input-sm clock"placeholder="00:00">
														</div>
													</div>
												</div>
												<div class="row avia-age">
													<div class="col-md-12">
														<label>Взрослый</label>
														<label>Младенец < 2</label>
														<label>Ребенок 2-11</label>
														<label>Молодеж 12-24</label>
														<label>Пожилой 60+</label>
													</div>
												</div>
												<div class="row avia-age">
													<div class="col-md-12 form-inline">
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<label class="r-name av-12">КЛАСС</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked"> Эконом
														</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Премиум эконом
</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Бизнес
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="av-b">
															<label class="av-11">Авиакомпания</label>
															<div class="form-group">
																<select name="city-out" class="form-control input-sm">
																	<option>Предпочтений нет</option>
																	<option>2</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="line-r">
															<label class="av-11">Прямые рейсы: </label>
															<input type="checkbox" name="line-r">
														</div>
													</div>
													<div class="col-md-4">
														<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
													</div>
												</div>
											</form>
										</div>
										<!-- КОЕНЦ ПЕРВЫЙ ТАБ -->
										<div role="tabpanel" class="tab-pane fade" id="tab2">
											<!-- ВТОРОЙ ТАБ -->
											<form action="index.php" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-11">ПУНКТ ВЫЛЕТА</label>
															<input type="text" id='av_dropin_1' onclick="drop(1);" class="form-control input-sm arrow" name="">
															<div id="av_drop_1" class="not-active">
																<p>СТРАНА</p>
																<select id="avd_1_1" class="av-drop-s">
																	<option>Литва</option>
																	<option>Польша</option>
																</select>
																<p>Город</p>
																<select id="avd_1_2" class="av-drop-s">
																	<option></option>
																	<option>Вильнус (VNO)</option>
																	<option>Каунас (KUN)</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-11">ПУНКТ НАЗНАЧЕНИЯ</label>
															<input type="text" id='av_dropin_2' onclick="drop(2);" class="form-control input-sm arrow" name="">
															<div id="av_drop_2" class="not-active">
																<p>СТРАНА</p>
																<select id="avd_2_1" class="av-drop-s">
																	<option>Литва</option>
																	<option>Польша</option>
																</select>
																<p>Город</p>
																<select id="avd_2_2" class="av-drop-s">
																	<option></option>
																	<option>Вильнус (VNO)</option>
																	<option>Каунас (KUN)</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label class="av-12">ДАТА ВЫЛЕТА</label>
														<label class="av-time-l-1 av-12">ВРЕМЯ</label>
													</div>
													<div class="col-md-6">
														<label class="av-12">ДАТА ПРИЛЕТА</label>
														<label class="av-time-l-2 av-12">ВРЕМЯ</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 form-inline">
														<div class="form-group">
															<input name="date-out" type="text" class="d-out form-control datepicker-here input-sm calendar">
														</div>
														<input name="date-out" type="text" class="av-time-input form-control input-sm" placeholder="00:00">
													</div>
													<div class="col-md-6 form-inline">
														<div class="form-group">
															<input name="date-out" type="text" class="d-out form-control input-sm datepicker-here calendar">
														</div>
														<input name="date-out" type="text" class="av-time-input form-control input-sm" placeholder="00:00">
													</div>
												</div>
												<div class="row avia-age">
													<div class="col-md-12">
														<label>Взрослый</label>
														<label>Младенец < 2</label>
														<label>Ребенок 2-11</label>
														<label>Молодеж 12-24</label>
														<label>Пожилой 60+</label>
													</div>
												</div>
												<div class="row avia-age">
													<div class="col-md-12 form-inline">
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<label class="r-name av-12">КЛАСС</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked"> Эконом
														</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Премиум эконом
</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Бизнес
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="av-b">
															<label class="av-11">Авиакомпания</label>
															<div class="form-group">
																<select name="city-out" class="form-control input-sm">
																	<option>Предпочтений нет</option>
																	<option>2</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="line-r">
															<label class="av-11">Прямые рейсы: </label>
															<input type="checkbox" name="line-r">
														</div>
													</div>
													<div class="col-md-4">
														<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
													</div>
												</div>
											</form>
											<!-- КОНЕЦ ВТОРОЙ ТАБ -->
										</div>
										<!-- ТРЕТИЙ ТАБ -->
										<div role="tabpanel" class="tab-pane fade" id="tab3">
											<form action="index.php" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-11">ПУНКТ ВЫЛЕТА</label>
															<input type="text" id='av_dropin_3' onclick="drop(3);" class="form-control input-sm arrow" name="">
															<div id="av_drop_3" class="not-active">
																<p>СТРАНА</p>
																<select id="avd_3_1" class="av-drop-s">
																	<option>Литва</option>
																	<option>Польша</option>
																</select>
																<p>Город</p>
																<select id="avd_3_2" class="av-drop-s">
																	<option></option>
																	<option>Вильнус (VNO)</option>
																	<option>Каунас (KUN)</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="av-11">ПУНКТ НАЗНАЧЕНИЯ</label>
															<input type="text" id='av_dropin_4' onclick="drop(4);" class="form-control input-sm arrow" name="">
															<div id="av_drop_4" class="not-active">
																<p>СТРАНА</p>
																<select id="avd_4_1" class="av-drop-s">
																	<option>Литва</option>
																	<option>Польша</option>
																</select>
																<p>Город</p>
																<select id="avd_4_2" class="av-drop-s">
																	<option></option>
																	<option>Вильнус (VNO)</option>
																	<option>Каунас (KUN)</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label class="av-12">ДАТА ВЫЛЕТА</label>
														<label class="av-time-l-1 av-12">ВРЕМЯ</label>
													</div>
													<div class="col-md-6">
														<label class="av-12">ДАТА ВЫЛЕТА</label>
														<label class="av-time-l-2 av-12">ВРЕМЯ</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 form-inline">
														<div class="form-group">
															<input name="date-out" type="text" class="d-out form-control datepicker-here input-sm calendar">
														</div>
														<input name="date-out" type="text" class="av-time-input form-control input-sm" placeholder="00:00">
													</div>
													<div class="col-md-6 form-inline">
														<div class="form-group">
															<input name="date-out" type="text" class="d-out form-control input-sm datepicker-here calendar">
														</div>
														<input name="date-out" type="text" class="av-time-input form-control input-sm" placeholder="00:00">
													</div>
												</div>
												<div class="row avia-link">
													<div class="col-md-6"><a href="#">+Добавить перелет</a></div>
													<div class="col-md-6"><a href="#">-Удалить перелет</a></div>
												</div>
												<div class="row avia-age">
													<div class="col-md-12">
														<label>Взрослый</label>
														<label>Младенец < 2</label>
														<label>Ребенок 2-11</label>
														<label>Молодеж 12-24</label>
														<label>Пожилой 60+</label>
													</div>
												</div>
												<div class="row avia-age">
													<div class="col-md-12 form-inline">
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
														<div class="form-group">
															<select name="city-out" class="form-control input-sm">
																<option>1</option>
																<option>2</option>
															</select>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<label class="r-name av-12">КЛАСС</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked"> Эконом
														</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Премиум эконом
</label>
														<label class="radio-inline av-12">
															<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Бизнес
														</label>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="av-b">
															<label class="av-11">Авиакомпания</label>
															<div class="form-group">
																<select name="city-out" class="form-control input-sm">
																	<option>Предпочтений нет</option>
																	<option>2</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="line-r">
															<label class="av-11">Прямые рейсы: </label>
															<input type="checkbox" name="line-r">
														</div>
													</div>
													<div class="col-md-4">
														<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
													</div>
												</div>
											</form>
										</div>
										<!-- КОНЕЦ ТРЕТИЙ ТАБ -->
									</div>
								</div>
								<!-- КОНЕЦ БЛОКА АВИА -->
								<!-- НАЧАЛО БЛОКА ЧАРТЕР -->
								<div id="menu4" class="tab-pane fade">
									<form action="index.php" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ПУНКТ ВЫЛЕТА</label>
													<select name="country" class="form-control">
														<option>Киев (IEV)</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>ПУНКТ НАЗНАЧЕНИЯ</label>
													<select name="dest" class="form-control">
														<option>Вильнус (VNO)</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label>ДАТА ВЫЛЕТА</label>
													<input name="date-out" type="text" class="form-control datepicker-here">
												</div>
											</div>
											<div class="col-md-4">
												<label>Взрослые</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="old" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-4">
												<label>Дети</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="young" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2 col-md-offset-9">
												<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
											</div>
										</div>
									</form>
								</div>
								<!-- КОНЕЦ БЛОКА ЧАРТЕР -->
								<!-- НАЧАЛО БЛОКА ТУРЫ -->
								<div id="menu5" class="tab-pane fade">
									<form action="index.php" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Страна</label>
													<select name="country" class="form-control">
														<option>Италия</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
												<div class="form-group">
													<label>Дата с...</label>
													<input name="date-from" type="text" class="form-control datepicker-here">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Город</label>
													<select name="city" class="form-control">
														<option>Венеция</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
												<div class="form-group">
													<label>По...</label>
													<input name="date-to" type="text" class="form-control datepicker-here">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label>Кол-во дней</label>
													<select name="count-days" class="form-control days-count">
														<option>2-5</option>
														<option>5-7</option>
														<option>7-10</option>
														<option>10-14</option>
													</select>
												</div>
											</div>
											<div class="col-md-4">
												<label>Взрослые</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="old" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
											<div class="col-md-4">
												<label>Дети</label>
												<div class="number input-group">
													<span class="minus input-group-addon">-</span>
													<input name="young" class="form-control" type="text" value="0"/>
													<span class="plus input-group-addon">+</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-2 col-md-offset-9">
												<button type="submit" class="search-btn btn btn-danger">ПОИСК</button>
											</div>
										</div>
									</form>
								</div>
								<!-- КОНЕЦ БЛОКА ТУРЫ -->
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-lg-offset-4 col-md-3 col-md-offset-3 bonus-c">
						<div class="bonus">
							<h1>Лето в Европе с <b>Poezd.Trevel!</b></h1>
							<h2>Выбирай направление и получай бонус.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
			<?php $this->beginBody() ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<center>
					<h1>Лучшие предложения</h1>
					<h2>Путешествуй с нами!</h2>
					</center>
				</div>
			</div>
		</div>
		<div class="best-offers">
			<div class="row">
				<div class="col-md-4">
					<img src="/img/4.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">На ночном поезде в европу.</div>
						<div>
							<div class="info-date">30 Июн ... 05 сент</div>
							<div class="info-maney"><span class="w-hide">от</span> 869 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="/img/2.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">Специальное предложение.</div>
						<div>
							<div class="info-date">07 Июн ... 06 сент</div>
							<div class="info-maney"><span class="w-hide">от</span> 300 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="/img/3.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
										<img src="/img/4.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">Замок Нойшвайнштайн.</div>
						<div>
							<div class="info-date">25 Мар ... 09 Окт</div>
							<div class="info-maney"><span class="w-hide">от</span> 2500 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="/img/5.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">Летние каникулы в Европе.</div>
						<div>
							<div class="info-date">01 Июн ... 06 Сент</div>
							<div class="info-maney"><span class="w-hide">от</span> 6500 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="/img/6.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">В лондон на поезде.</div>
						<div>
							<div class="info-date">30 Июл ... 05 Авг</div>
							<div class="info-maney"><span class="w-hide">от</span> 2200 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img src="/img/7.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">Венеция уже сегодня.</div>
						<div>
							<div class="info-date">30 Июл ... 05 Авг</div>
							<div class="info-maney"><span class="w-hide">от</span> 1900 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="/img/8.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">Альпийские тропы.</div>
						<div>
							<div class="info-date">26 Апр ... 05 Окт</div>
							<div class="info-maney"><span class="w-hide">от</span> 2700 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img src="/img/9.jpg" class="img-responsive" alt="">
					<div class="info">
						<div class="info-title">На авто в Испанию.</div>
						<div>
							<div class="info-date">30 Апр ... 05 Окт</div>
							<div class="info-maney"><span class="w-hide">от</span> 3800 грн</div>
						</div>
						<div class="info-btn">
							<button class="btn btn-info">ПОДРОБНЕЕ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="f3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="b-foot">
							<center><img src="/img/baner-footer.png" alt=""></center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="b-foot2">
						<div class="col-md-4"><img src="/img/cards.png" alt=""></div>
						<div class="col-md-4"><center><img src="/img/logo-footer.png" alt=""></center></div>
						<div class="col-md-4"><img src="/img/social.png" alt=""></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 copyright">
						<center>
						<div>Использование текстов и фотографий с сайта www.poezd.trevel.com допускается только с письменного разрешения компании Poezd.Trevel.Poezd.Trevel - международный туроператор.</div>
						<div>© 2016  Copyright </div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>