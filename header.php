<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
		<?php // echo '<script>var $ = jQuery.noConflict();</script>'; ?>
	</head>
	<body>
		<header>
			<div class='header-container container'>
				<div class='visible-xs hidden-sm hidden-md hidden-lg'>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-collapse-menu" aria-expanded="false"></button>
					<a href='contacts' class='xs_contacts_a'></a>
					<a class='xs_search_a search_toggler' href='#' ></a>
					<ul class='xs_contacts_menu'>
						<li><a href="contacts_saloni">Контакты</a></li>
						<li><a href="contacts">Обратная связь</a></li>
						<li><a href='test-drive#18'>Tест-драйв</a></li>
						<li><a href='zapisy-na-servis'>Запись на сервис</a></li>
					</ul>
					<nav class="navbar navbar-default">
						<div class="collapse navbar-collapse" id="top-collapse-menu">
							<ul class='xs-menu main-menu nav navbar-nav'>
								<li><a class='xs-main_level_a' href='about-us'>Эмералд Моторс</a></li>
								<li><a class='xs-main_level_a' data-alias='special-offers' href='special-offers'>Специальные предложения</a></li>
								<li><a class='xs-main_level_a' data-alias='korporativnye-prodaghi' href='korporativnye-prodaghi'>Корпоративным клиентам</a></li>
								<li><a class='xs-main_level_a' data-alias='price-list' href='price-list'>Прайс-лист</a></li>
								<li><a class='xs-main_level_a' href='/'>Домой</a></li>
								<li><a class='xs-main_level_a' href='all-models'>Автомобили BMW</a></li>
								<li><a class='xs-main_level_a' data-alias='special-car-in-salon' href='special-car-in-salon'>BMW в наличии</a></li>
								<li class='xs_opener'>
									<a class='xs_opener_a xs-main_level_a' href='#'>Владельцам</a>
									<ul class='xs_sub_menu'>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Комплекты оригинальных колес BMW</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='vygodno-znachit-vovremya'  href="http://bmw.odessa.ua/vygodno-znachit-vovremya">ВЫГОДНО ЗНАЧИТ ВОВРЕМЯ.</a></li>
												<li><a data-alias='komplekty-originalynyh-zimnih-koles-bmw'  href="http://bmw.odessa.ua/komplekty-originalynyh-zimnih-koles-bmw">Комплекты оригинальных зимних колёс BMW</a></li>
												<li><a data-alias='bmw-1-serii-f20-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-1-serii-f20-winter-wheels-2017">BMW 1 серии (F20)</a></li>
												<li><a data-alias='bmw-2-serii-f45-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-2-serii-f45-winter-wheels-2017">BMW 2 серии (F45)</a></li>
												<li><a data-alias='bmw-3-serii-f30-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-3-serii-f30-winter-wheels-2017">BMW 3 серии (F30)</a></li>
												<li><a data-alias='bmw-3-serii-g30-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-3-serii-g30-winter-wheels-2017">BMW 5 серии (G30)</a></li>
												<li><a data-alias='bmw-7-serii-g11-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-7-serii-g11-winter-wheels-2017">BMW 7 серии (G11)</a></li>
												<li><a data-alias='bmw-x1-f48-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x1-f48-winter-wheels-2017">BMW X1 (F48)</a></li>
												<li><a data-alias='bmw-x3-f25-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x3-f25-winter-wheels-2017">BMW X3 (F25)</a></li>
												<li><a data-alias='bmw-x5-f15-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x5-f15-winter-wheels-2017">BMW X5 (F15)</a></li>
												<li><a data-alias='bmw-x6-f16-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x6-f16-winter-wheels-2017">BMW X6 (F16)</a></li>
												<li><a data-alias='bmw-x5m-f85-x6m-f86-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x5m-f85-x6m-f86-winter-wheels-2017">BMW X5 M (F85)/ X6 M (F86)</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Услуги сервисной службы</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='personal-services-bmw-servic'  href="http://bmw.odessa.ua/personal-services-bmw-servic">Услуги сервисной службы</a></li>
												<li><a data-alias='zapisy-na-servis'  href="http://bmw.odessa.ua/zapisy-na-servis">Запись на сервис</a></li>
												<li><a data-alias='personal-services-warranty'  href="http://bmw.odessa.ua/personal-services-warranty">Гарантия</a></li>
												<li><a data-alias='personal-services-bmw-roadside-assistance'  href="http://bmw.odessa.ua/personal-services-bmw-roadside-assistance">Помощь на дороге BMW</a></li>
												<li><a data-alias='personal-services-assistance'  href="http://bmw.odessa.ua/personal-services-assistance">BMW Roadside Assistance</a></li>
												<li><a data-alias='bmw-service-inclusive'  href="http://bmw.odessa.ua/bmw-service-inclusive">BMW Service Inclusive</a></li>
												<li><a data-alias='personal-services-bmw-original-parts'  href="http://bmw.odessa.ua/personal-services-bmw-original-parts">Новые детали</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Обслуживание автомобилей и запасные части</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='vehicle-service-parts-overview'  href="http://bmw.odessa.ua/vehicle-service-parts-overview">BMW M Performance Parts: Обзор</a></li>
												<li><a data-alias='vehicle-service-parts-m-performance-images-videos'  href="http://bmw.odessa.ua/vehicle-service-parts-m-performance-images-videos">BMW M Performance Parts: Изображения и видео</a></li>
												<li><a data-alias='vehicle-service-parts-spring-summer-accessories-2016'  href="http://bmw.odessa.ua/vehicle-service-parts-spring-summer-accessories-2016">Весенние и летние принадлежности</a></li>
											</ul>
										</li>
										<li><a class='xs-second_level_a' data-alias='bmw-lifestyle-shop'  href='http://bmw.odessa.ua/bmw-lifestyle-shop'>BMW Lifestyle</a></li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Аксессуары</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='autoaccessories'  href="http://bmw.odessa.ua/autoaccessories">Автоаксессуары</a></li>
												<li><a data-alias='accessories-lifestyle'  href="http://bmw.odessa.ua/accessories-lifestyle">Lifestyle</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class='xs_opener'>
									<a class='xs_opener_a xs-main_level_a' href='#'>Мир BMW</a>
									<ul class='xs_sub_menu'>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Концепты BMW</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='koncept-bmw-x7-iperformance_mX'  href="http://bmw.odessa.ua/koncept-bmw-x7-iperformance_mX">Концепт BMW X7 iPerformance</a></li>
												<li><a data-alias='koncept-bmw-z4'  href="http://bmw.odessa.ua/koncept-bmw-z4">Концепт BMW Z4</a></li>
												<li><a data-alias='koncept-bmw-8-serii'  href="http://bmw.odessa.ua/koncept-bmw-8-serii">Концепт BMW 8 серии</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Специальные предложения</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='servisnaya-akciya-biznes-spa'  href="http://bmw.odessa.ua/servisnaya-akciya-biznes-spa">Сервисная акция "Бизнес СПА"</a></li>
												<li><a data-alias='special_bmw_x1_2018'  href="http://bmw.odessa.ua/special_bmw_x1_2018">BMW X1</a></li>
												<li><a data-alias='specialynye-predlogheniya-na-avtomobili-bmw-2017-goda'  href="http://bmw.odessa.ua/specialynye-predlogheniya-na-avtomobili-bmw-2017-goda">Специальные предложения на автомобили BMW 2017 года.</a></li>
												<li><a data-alias='modeli-bmw-x'  href="http://bmw.odessa.ua/modeli-bmw-x">Модели BMW X.</a></li>
												<li><a data-alias='goryachaya-rasprodagha'  href="http://bmw.odessa.ua/goryachaya-rasprodagha">Горячая распродажа</a></li>
												<li><a data-alias='bmw-i3-special_03_2018'  href="http://bmw.odessa.ua/bmw-i3-special_03_2018">BMW i3</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Автомобили BMW с пробегом</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='trade-in'  href="http://bmw.odessa.ua/trade-in">TRADE-IN</a></li>
												<li><a data-alias='used-automobiles-premium-selection-bmw-premium-selection'  href="http://bmw.odessa.ua/used-automobiles-premium-selection-bmw-premium-selection">BMW Premium Selection</a></li>
												<li><a data-alias='bmw_s_probegom'  href="http://bmw.odessa.ua/bmw_s_probegom">BMW с пробегом</a></li>
												<li><a data-alias='used-automobiles-premium-selection-benefits'  href="http://bmw.odessa.ua/used-automobiles-premium-selection-benefits">Преимущества</a></li>
											</ul>
										</li>
										<li><a class='xs-second_level_a' data-alias='news' href='news'>Новости BMW</a></li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>BMW Financial Services</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='bmw-financial-services-overview'  href="http://bmw.odessa.ua/bmw-financial-services-overview">Обзор</a></li>
												<li><a data-alias='bmw-financial-services-credit'  href="http://bmw.odessa.ua/bmw-financial-services-credit">Кредитование автомобилей BMW</a></li>
												<li><a data-alias='bmw-financial-services-credit-bmwi'  href="http://bmw.odessa.ua/bmw-financial-services-credit-bmwi">Условия кредитования для гибридных и электромобилей</a></li>
												<li><a data-alias='bmw-financial-services-leasing'  href="http://bmw.odessa.ua/bmw-financial-services-leasing">Лизинг</a></li>
												<li><a data-alias='bmw-financial-services-insurance'  href="http://bmw.odessa.ua/bmw-financial-services-insurance">Страхование</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>BMW EfficientDynamics</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='efficient-dynamics-overview'  href="http://bmw.odessa.ua/efficient-dynamics-overview">Обзор</a></li>
												<li><a data-alias='efficient-dynamics-twinpower-turbo-engines'  href="http://bmw.odessa.ua/efficient-dynamics-twinpower-turbo-engines">Двигатели BMW TwinPower Turbo</a></li>
												<li><a data-alias='bmw-edrive'  href="http://bmw.odessa.ua/bmw-edrive">BMW eDrive.</a></li>
												<li><a data-alias='efficient-dynamics-edrive-faqs'  href="http://bmw.odessa.ua/efficient-dynamics-edrive-faqs">Часто задаваемые вопросы</a></li>
												<li><a data-alias='efficient-dynamics-efficient-lightweight'  href="http://bmw.odessa.ua/efficient-dynamics-efficient-lightweight">BMW EfficientLightweight</a></li>
												<li><a data-alias='efficient-dynamics-aerodynamics-and-energy-management'  href="http://bmw.odessa.ua/efficient-dynamics-aerodynamics-and-energy-management">Аэродинамика и управление энергией</a></li>
												<li><a data-alias='efficient-dynamics-120-g-fleet'  href="http://bmw.odessa.ua/efficient-dynamics-120-g-fleet">Модели BMW с выбросами СО2 до 120 г/км</a></li>
												<li><a data-alias='efficient-dynamics-edrive-models'  href="http://bmw.odessa.ua/efficient-dynamics-edrive-models">Модели BMW eDrive</a></li>
												<li><a data-alias='efficient-dynamics-images-and-videos'  href="http://bmw.odessa.ua/efficient-dynamics-images-and-videos">Изображения и видео</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>BMW M GmbH</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='m-gmbh-introduction'  href="http://bmw.odessa.ua/m-gmbh-introduction">Введение</a></li>
												<li><a data-alias='m-gmbh-m-automobile'  href="http://bmw.odessa.ua/m-gmbh-m-automobile">Автомобили М</a></li>
												<li><a data-alias='m-gmbh-m-equipment-packages'  href="http://bmw.odessa.ua/m-gmbh-m-equipment-packages">Оснащение и пакеты M</a></li>
												<li><a data-alias='m-gmbh-driving-experience'  href="http://bmw.odessa.ua/m-gmbh-driving-experience">BMW Driving Experience</a></li>
												<li><a data-alias='m-gmbh-m-performance-automobile'  href="http://bmw.odessa.ua/m-gmbh-m-performance-automobile">Aвтомобили BMW M Performance</a></li>
												<li><a data-alias='m-gmbh-images-and-videos'  href="http://bmw.odessa.ua/m-gmbh-images-and-videos">Изображения и видео</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>BMW Individual</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='individual-overview'  href="http://bmw.odessa.ua/individual-overview">Обзор</a></li>
												<li><a data-alias='individual-individual-collection'  href="http://bmw.odessa.ua/individual-individual-collection">Коллекция BMW Individual</a></li>
												<li><a data-alias='individual-individual-manufaktur'  href="http://bmw.odessa.ua/individual-individual-manufaktur">BMW Individual Manufaktur</a></li>
												<li><a data-alias='individual-model-overview'  href="http://bmw.odessa.ua/individual-model-overview">Обзор моделей</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>BMW xDrive</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='bmw-xdrive-intro'  href="http://bmw.odessa.ua/bmw-xdrive-intro">Введение</a></li>
												<li><a data-alias='bmw-xdrive-technology'  href="http://bmw.odessa.ua/bmw-xdrive-technology">Технология</a></li>
												<li><a data-alias='bmw-xdrive-experience-the-xdrive-in-motion'  href="http://bmw.odessa.ua/bmw-xdrive-experience-the-xdrive-in-motion">Испытать xDrive в движении</a></li>
												<li><a data-alias='bmw-xdrive-models'  href="http://bmw.odessa.ua/bmw-xdrive-models">Модели BMW xDRIVE</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>BMWi</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='bmw-i-philosophy'  href="http://bmw.odessa.ua/bmw-i-philosophy">Философия</a></li>
												<li><a data-alias='bmw-i-concept'  href="http://bmw.odessa.ua/bmw-i-concept">Концепция</a></li>
												<li><a data-alias='bmw-i-vehicles'  href="http://bmw.odessa.ua/bmw-i-vehicles">Автомобили</a></li>
												<li><a data-alias='bmw-i-sustainability'  href="http://bmw.odessa.ua/bmw-i-sustainability">Устойчивое развитие</a></li>
												<li><a data-alias='bmw-i-360-electric'  href="http://bmw.odessa.ua/bmw-i-360-electric">360° ELECTRIC</a></li>
												<li><a data-alias='bmw-i-mobility-services'  href="http://bmw.odessa.ua/bmw-i-mobility-services">Услуги по обеспечению мобильности</a></li>
												<li><a data-alias='bmw-i-connecteddrive'  href="http://bmw.odessa.ua/bmw-i-connecteddrive">BMW i ConnectedDrive</a></li>
												<li><a data-alias='bmw-i-cooperations'  href="http://bmw.odessa.ua/bmw-i-cooperations">BMW i: партнерские программы</a></li>
											</ul>
										</li>
										<li>
											<a class='xs-second_level_a xs_und_opener' href='#'>Загрузки</a>
											<ul class='xs_under_menu'>
												<li><a data-alias='information-sheets-bmw'  href="http://bmw.odessa.ua/information-sheets-bmw">Информационные листы BMW</a></li>
												<li><a data-alias='directories'  href="http://bmw.odessa.ua/directories">Каталоги</a></li>
											</ul>
										</li>
										<li><a xs-second_level_a data-alias='bmw-klassa-lyuks'  href="http://bmw.odessa.ua/bmw-klassa-lyuks">BMW класса "Люкс"</a></li>
									</ul>
								</li>
								<li>
									<a class='xs-main_level_a change_lang' rel="alternate" hreflang="ua" href="http://bmw.odessa.ua/ua/bmw-2-series-coupe-learn-more">
									Українська
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class='hidden-xs visible-sm visible-md visible-lg'>
					<div class='top_menu '>
						<ul class='menu_small'>
							<li><a href='about-us'>Эмералд Моторс</a></li>
							<li><a href='special-offers' data-alias='special-offers' >Специальные предложения</a></li>
							<li><a href='korporativnye-prodaghi' data-alias='korporativnye-prodaghi' >Корпоративным клиентам</a></li>
							<li><a href='price-list' data-alias='price-list'>Прайс-лист</a></li>
							<li>
								<a class='change_lang' href="http://bmw.odessa.ua/ua/bmw-2-series-coupe-learn-more">
								Українська
								</a>
							</li>
						</ul>
						<ul class='menu_big'>
							<li><a data-alias='main' class='main_level_a' href='./'>Домой</a></li>
							<li><a class='main_level_a' href='all-models'>Автомобили BMW</a></li>
							<li><a class='main_level_a' data-alias='special-car-in-salon' href='special-car-in-salon'>BMW в наличии</a></li>
							<li class='opener'>
								<a class='opener_a main_level_a' href='#'>Владельцам</a>
								<ul class='sub_menu'>
									<li>
										<a class='und_opener' href='#'><span>Комплекты оригинальных колес BMW</span></a>
										<ul class='under_menu'>
											<li><a data-alias='vygodno-znachit-vovremya'  href="http://bmw.odessa.ua/vygodno-znachit-vovremya">ВЫГОДНО ЗНАЧИТ ВОВРЕМЯ.</a></li>
											<li><a data-alias='komplekty-originalynyh-zimnih-koles-bmw'  href="http://bmw.odessa.ua/komplekty-originalynyh-zimnih-koles-bmw">Комплекты оригинальных зимних колёс BMW</a></li>
											<li><a data-alias='bmw-1-serii-f20-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-1-serii-f20-winter-wheels-2017">BMW 1 серии (F20)</a></li>
											<li><a data-alias='bmw-2-serii-f45-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-2-serii-f45-winter-wheels-2017">BMW 2 серии (F45)</a></li>
											<li><a data-alias='bmw-3-serii-f30-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-3-serii-f30-winter-wheels-2017">BMW 3 серии (F30)</a></li>
											<li><a data-alias='bmw-3-serii-g30-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-3-serii-g30-winter-wheels-2017">BMW 5 серии (G30)</a></li>
											<li><a data-alias='bmw-7-serii-g11-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-7-serii-g11-winter-wheels-2017">BMW 7 серии (G11)</a></li>
											<li><a data-alias='bmw-x1-f48-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x1-f48-winter-wheels-2017">BMW X1 (F48)</a></li>
											<li><a data-alias='bmw-x3-f25-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x3-f25-winter-wheels-2017">BMW X3 (F25)</a></li>
											<li><a data-alias='bmw-x5-f15-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x5-f15-winter-wheels-2017">BMW X5 (F15)</a></li>
											<li><a data-alias='bmw-x6-f16-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x6-f16-winter-wheels-2017">BMW X6 (F16)</a></li>
											<li><a data-alias='bmw-x5m-f85-x6m-f86-winter-wheels-2017'  href="http://bmw.odessa.ua/bmw-x5m-f85-x6m-f86-winter-wheels-2017">BMW X5 M (F85)/ X6 M (F86)</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>Услуги сервисной службы</span></a>
										<ul class='under_menu'>
											<li><a data-alias='personal-services-bmw-servic'  href="http://bmw.odessa.ua/personal-services-bmw-servic">Услуги сервисной службы</a></li>
											<li><a data-alias='zapisy-na-servis'  href="http://bmw.odessa.ua/zapisy-na-servis">Запись на сервис</a></li>
											<li><a data-alias='personal-services-warranty'  href="http://bmw.odessa.ua/personal-services-warranty">Гарантия</a></li>
											<li><a data-alias='personal-services-bmw-roadside-assistance'  href="http://bmw.odessa.ua/personal-services-bmw-roadside-assistance">Помощь на дороге BMW</a></li>
											<li><a data-alias='personal-services-assistance'  href="http://bmw.odessa.ua/personal-services-assistance">BMW Roadside Assistance</a></li>
											<li><a data-alias='bmw-service-inclusive'  href="http://bmw.odessa.ua/bmw-service-inclusive">BMW Service Inclusive</a></li>
											<li><a data-alias='personal-services-bmw-original-parts'  href="http://bmw.odessa.ua/personal-services-bmw-original-parts">Новые детали</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>Обслуживание автомобилей и запасные части</span></a>
										<ul class='under_menu'>
											<li><a data-alias='vehicle-service-parts-overview'  href="http://bmw.odessa.ua/vehicle-service-parts-overview">BMW M Performance Parts: Обзор</a></li>
											<li><a data-alias='vehicle-service-parts-m-performance-images-videos'  href="http://bmw.odessa.ua/vehicle-service-parts-m-performance-images-videos">BMW M Performance Parts: Изображения и видео</a></li>
											<li><a data-alias='vehicle-service-parts-spring-summer-accessories-2016'  href="http://bmw.odessa.ua/vehicle-service-parts-spring-summer-accessories-2016">Весенние и летние принадлежности</a></li>
										</ul>
									</li>
									<li><a data-alias='bmw-lifestyle-shop'  href='http://bmw.odessa.ua/bmw-lifestyle-shop'>BMW Lifestyle</a></li>
									<li>
										<a class='und_opener' href='#'><span>Аксессуары</span></a>
										<ul class='under_menu'>
											<li><a data-alias='autoaccessories'  href="http://bmw.odessa.ua/autoaccessories">Автоаксессуары</a></li>
											<li><a data-alias='accessories-lifestyle'  href="http://bmw.odessa.ua/accessories-lifestyle">Lifestyle</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class='opener'>
								<a class='opener_a main_level_a' href='#'>Мир BMW</a>
								<ul class='sub_menu'>
									<li>
										<a class='und_opener' href='#'><span>Концепты BMW</span></a>
										<ul class='under_menu'>
											<li><a data-alias='koncept-bmw-x7-iperformance_mX'  href="http://bmw.odessa.ua/koncept-bmw-x7-iperformance_mX">Концепт BMW X7 iPerformance</a></li>
											<li><a data-alias='koncept-bmw-z4'  href="http://bmw.odessa.ua/koncept-bmw-z4">Концепт BMW Z4</a></li>
											<li><a data-alias='koncept-bmw-8-serii'  href="http://bmw.odessa.ua/koncept-bmw-8-serii">Концепт BMW 8 серии</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>Специальные предложения</span></a>
										<ul class='under_menu'>
											<li><a data-alias='servisnaya-akciya-biznes-spa'  href="http://bmw.odessa.ua/servisnaya-akciya-biznes-spa">Сервисная акция "Бизнес СПА"</a></li>
											<li><a data-alias='special_bmw_x1_2018'  href="http://bmw.odessa.ua/special_bmw_x1_2018">BMW X1</a></li>
											<li><a data-alias='specialynye-predlogheniya-na-avtomobili-bmw-2017-goda'  href="http://bmw.odessa.ua/specialynye-predlogheniya-na-avtomobili-bmw-2017-goda">Специальные предложения на автомобили BMW 2017 года.</a></li>
											<li><a data-alias='modeli-bmw-x'  href="http://bmw.odessa.ua/modeli-bmw-x">Модели BMW X.</a></li>
											<li><a data-alias='goryachaya-rasprodagha'  href="http://bmw.odessa.ua/goryachaya-rasprodagha">Горячая распродажа</a></li>
											<li><a data-alias='bmw-i3-special_03_2018'  href="http://bmw.odessa.ua/bmw-i3-special_03_2018">BMW i3</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>Автомобили BMW с пробегом</span></a>
										<ul class='under_menu'>
											<li><a data-alias='trade-in'  href="http://bmw.odessa.ua/trade-in">TRADE-IN</a></li>
											<li><a data-alias='used-automobiles-premium-selection-bmw-premium-selection'  href="http://bmw.odessa.ua/used-automobiles-premium-selection-bmw-premium-selection">BMW Premium Selection</a></li>
											<li><a data-alias='bmw_s_probegom'  href="http://bmw.odessa.ua/bmw_s_probegom">BMW с пробегом</a></li>
											<li><a data-alias='used-automobiles-premium-selection-benefits'  href="http://bmw.odessa.ua/used-automobiles-premium-selection-benefits">Преимущества</a></li>
										</ul>
									</li>
									<li><a data-alias='news' href='news'>Новости BMW</a></li>
									<li>
										<a class='und_opener' href='#'><span>BMW Financial Services</span></a>
										<ul class='under_menu'>
											<li><a data-alias='bmw-financial-services-overview'  href="http://bmw.odessa.ua/bmw-financial-services-overview">Обзор</a></li>
											<li><a data-alias='bmw-financial-services-credit'  href="http://bmw.odessa.ua/bmw-financial-services-credit">Кредитование автомобилей BMW</a></li>
											<li><a data-alias='bmw-financial-services-credit-bmwi'  href="http://bmw.odessa.ua/bmw-financial-services-credit-bmwi">Условия кредитования для гибридных и электромобилей</a></li>
											<li><a data-alias='bmw-financial-services-leasing'  href="http://bmw.odessa.ua/bmw-financial-services-leasing">Лизинг</a></li>
											<li><a data-alias='bmw-financial-services-insurance'  href="http://bmw.odessa.ua/bmw-financial-services-insurance">Страхование</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>BMW EfficientDynamics</span></a>
										<ul class='under_menu'>
											<li><a data-alias='efficient-dynamics-overview'  href="http://bmw.odessa.ua/efficient-dynamics-overview">Обзор</a></li>
											<li><a data-alias='efficient-dynamics-twinpower-turbo-engines'  href="http://bmw.odessa.ua/efficient-dynamics-twinpower-turbo-engines">Двигатели BMW TwinPower Turbo</a></li>
											<li><a data-alias='bmw-edrive'  href="http://bmw.odessa.ua/bmw-edrive">BMW eDrive.</a></li>
											<li><a data-alias='efficient-dynamics-edrive-faqs'  href="http://bmw.odessa.ua/efficient-dynamics-edrive-faqs">Часто задаваемые вопросы</a></li>
											<li><a data-alias='efficient-dynamics-efficient-lightweight'  href="http://bmw.odessa.ua/efficient-dynamics-efficient-lightweight">BMW EfficientLightweight</a></li>
											<li><a data-alias='efficient-dynamics-aerodynamics-and-energy-management'  href="http://bmw.odessa.ua/efficient-dynamics-aerodynamics-and-energy-management">Аэродинамика и управление энергией</a></li>
											<li><a data-alias='efficient-dynamics-120-g-fleet'  href="http://bmw.odessa.ua/efficient-dynamics-120-g-fleet">Модели BMW с выбросами СО2 до 120 г/км</a></li>
											<li><a data-alias='efficient-dynamics-edrive-models'  href="http://bmw.odessa.ua/efficient-dynamics-edrive-models">Модели BMW eDrive</a></li>
											<li><a data-alias='efficient-dynamics-images-and-videos'  href="http://bmw.odessa.ua/efficient-dynamics-images-and-videos">Изображения и видео</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>BMW M GmbH</span></a>
										<ul class='under_menu'>
											<li><a data-alias='m-gmbh-introduction'  href="http://bmw.odessa.ua/m-gmbh-introduction">Введение</a></li>
											<li><a data-alias='m-gmbh-m-automobile'  href="http://bmw.odessa.ua/m-gmbh-m-automobile">Автомобили М</a></li>
											<li><a data-alias='m-gmbh-m-equipment-packages'  href="http://bmw.odessa.ua/m-gmbh-m-equipment-packages">Оснащение и пакеты M</a></li>
											<li><a data-alias='m-gmbh-driving-experience'  href="http://bmw.odessa.ua/m-gmbh-driving-experience">BMW Driving Experience</a></li>
											<li><a data-alias='m-gmbh-m-performance-automobile'  href="http://bmw.odessa.ua/m-gmbh-m-performance-automobile">Aвтомобили BMW M Performance</a></li>
											<li><a data-alias='m-gmbh-images-and-videos'  href="http://bmw.odessa.ua/m-gmbh-images-and-videos">Изображения и видео</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>BMW Individual</span></a>
										<ul class='under_menu'>
											<li><a data-alias='individual-overview'  href="http://bmw.odessa.ua/individual-overview">Обзор</a></li>
											<li><a data-alias='individual-individual-collection'  href="http://bmw.odessa.ua/individual-individual-collection">Коллекция BMW Individual</a></li>
											<li><a data-alias='individual-individual-manufaktur'  href="http://bmw.odessa.ua/individual-individual-manufaktur">BMW Individual Manufaktur</a></li>
											<li><a data-alias='individual-model-overview'  href="http://bmw.odessa.ua/individual-model-overview">Обзор моделей</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>BMW xDrive</span></a>
										<ul class='under_menu'>
											<li><a data-alias='bmw-xdrive-intro'  href="http://bmw.odessa.ua/bmw-xdrive-intro">Введение</a></li>
											<li><a data-alias='bmw-xdrive-technology'  href="http://bmw.odessa.ua/bmw-xdrive-technology">Технология</a></li>
											<li><a data-alias='bmw-xdrive-experience-the-xdrive-in-motion'  href="http://bmw.odessa.ua/bmw-xdrive-experience-the-xdrive-in-motion">Испытать xDrive в движении</a></li>
											<li><a data-alias='bmw-xdrive-models'  href="http://bmw.odessa.ua/bmw-xdrive-models">Модели BMW xDRIVE</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>BMWi</span></a>
										<ul class='under_menu'>
											<li><a data-alias='bmw-i-philosophy'  href="http://bmw.odessa.ua/bmw-i-philosophy">Философия</a></li>
											<li><a data-alias='bmw-i-concept'  href="http://bmw.odessa.ua/bmw-i-concept">Концепция</a></li>
											<li><a data-alias='bmw-i-vehicles'  href="http://bmw.odessa.ua/bmw-i-vehicles">Автомобили</a></li>
											<li><a data-alias='bmw-i-sustainability'  href="http://bmw.odessa.ua/bmw-i-sustainability">Устойчивое развитие</a></li>
											<li><a data-alias='bmw-i-360-electric'  href="http://bmw.odessa.ua/bmw-i-360-electric">360° ELECTRIC</a></li>
											<li><a data-alias='bmw-i-mobility-services'  href="http://bmw.odessa.ua/bmw-i-mobility-services">Услуги по обеспечению мобильности</a></li>
											<li><a data-alias='bmw-i-connecteddrive'  href="http://bmw.odessa.ua/bmw-i-connecteddrive">BMW i ConnectedDrive</a></li>
											<li><a data-alias='bmw-i-cooperations'  href="http://bmw.odessa.ua/bmw-i-cooperations">BMW i: партнерские программы</a></li>
										</ul>
									</li>
									<li>
										<a class='und_opener' href='#'><span>Загрузки</span></a>
										<ul class='under_menu'>
											<li><a data-alias='information-sheets-bmw'  href="http://bmw.odessa.ua/information-sheets-bmw">Информационные листы BMW</a></li>
											<li><a data-alias='directories'  href="http://bmw.odessa.ua/directories">Каталоги</a></li>
										</ul>
									</li>
									<li><a data-alias='bmw-klassa-lyuks'  href="http://bmw.odessa.ua/bmw-klassa-lyuks">BMW класса "Люкс"</a></li>
								</ul>
							</li>
							<li class='opener'>
								<a href='#' class='top_contacts_a opener_a main_level_a'><span class='imaged_a_content'>Контакты</span></a>
								<ul class='sub_menu'>
									<li><a href="contacts_saloni">Контакты</a></li>
									<li><a href="contacts">Обратная связь</a></li>
									<li><a href='test-drive#18'>Tест-драйв</a></li>
									<li><a href='zapisy-na-servis'>Запись на сервис</a></li>
								</ul>
							</li>
							<li><a class='main_level_a top_search_a search_toggler' href='#' ><span class='imaged_a_content'>Поиск </span></a></li>
						</ul>
					</div>
				</div>
				<a href='/'>
				<img class='logo logo_with_simple_menu' alt='BMW в Украине' src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_ru.png">
				</a>
			</div>
			<div class='xs_simple_menu'>
				<div class='simple_menu'>
					<a class='simple_menu_opener' onclick="return false;" href='#'>BMW 2 серии Купе</a>
					<ul class='simple_menu_ul'>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-learn-more' href="bmw-2-series-coupe-learn-more">Узнать больше</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-design' href="bmw-2-series-coupe-design">Дизайн</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-lines-equipment' href="bmw-2-series-coupe-lines-equipment">Линии отделки и оборудование</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-engines' href="bmw-2-series-coupe-engines">Двигатели</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-driving-dynamics' href="bmw-2-series-coupe-driving-dynamics">Динамические характеристики</a></li>
						<li><a class='simple_menu_a' data-alias='coupe-2013-bmw-mperformance' href="coupe-2013-bmw-mperformance">BMW M Performance</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-efficiency' href="bmw-2-series-coupe-efficiency">Экономичность</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-services-apps' href="bmw-2-series-coupe-services-apps">Сервисы и приложения</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-security' href="bmw-2-series-coupe-security">Безопасность</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-equipment' href="bmw-2-series-coupe-equipment">Оборудование</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-images-videos' href="bmw-2-series-coupe-images-videos">Изображения и видео</a></li>
						<li><a class='simple_menu_a' data-alias='specifications_eY' href="bmw-218i-coupe">Технические характеристики</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div class='fixed_header_helper'></div>
		<div class='sub_header_outer'>
			<div class='container sub_header'>
				<div class='fixed_contacts_outer'>
					<a class='fixed_contacts' href='#'>Контакты</a>
					<ul class='fixed_menu'>
						<li><a href="contacts_saloni">Контакты</a></li>
						<li><a href="contacts">Обратная связь</a></li>
						<li><a href='test-drive#18'>Tест-драйв</a></li>
						<li><a href='zapisy-na-servis'>Запись на сервис</a></li>
					</ul>
					<a class='bmw_btn test-drive-btn' href='test-drive#18'>Tест-драйв</a>
				</div>
				<?php
					global $wpdb;
					$all_wp_pages = $wpdb->get_results( 'SELECT *  FROM `'.$wpdb->posts.'` WHERE `post_status` LIKE "publish" AND `post_type` LIKE "page"' );
					$page_childrens = get_page_children( get_post()->ID, $all_wp_pages );
					if ( count($page_childrens) <= 0 ) {
						$ancestors = get_ancestors( get_post()->ID, 'page' );
						$page_childrens = get_page_children( $ancestors[0], $all_wp_pages );
					}
				?>
				<div class='simple_menu'>
					<a class='simple_menu_opener' onclick="return false;" href='#'><?php echo get_post()->post_title; ?></a>
					<ul class='simple_menu_ul'>
					<?php foreach ($page_childrens as $page_children) { ?>
						<li><a class='simple_menu_a' data-alias='<?php echo $page_children->post_name; ?>' href="<?php echo $page_children->post_name; ?>"><?php echo $page_children->post_title; ?></a></li>
					<?php } ?>
					</ul>
				</div>
				<!--
				<div class='simple_menu'>
					<a class='simple_menu_opener' onclick="return false;" href='#'>BMW 2 серии Купе</a>
					<ul class='simple_menu_ul'>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-learn-more' href="bmw-2-series-coupe-learn-more">Узнать больше</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-design' href="bmw-2-series-coupe-design">Дизайн</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-lines-equipment' href="bmw-2-series-coupe-lines-equipment">Линии отделки и оборудование</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-engines' href="bmw-2-series-coupe-engines">Двигатели</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-driving-dynamics' href="bmw-2-series-coupe-driving-dynamics">Динамические характеристики</a></li>
						<li><a class='simple_menu_a' data-alias='coupe-2013-bmw-mperformance' href="coupe-2013-bmw-mperformance">BMW M Performance</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-efficiency' href="bmw-2-series-coupe-efficiency">Экономичность</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-services-apps' href="bmw-2-series-coupe-services-apps">Сервисы и приложения</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-security' href="bmw-2-series-coupe-security">Безопасность</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-equipment' href="bmw-2-series-coupe-equipment">Оборудование</a></li>
						<li><a class='simple_menu_a' data-alias='bmw-2-series-coupe-images-videos' href="bmw-2-series-coupe-images-videos">Изображения и видео</a></li>
						<li><a class='simple_menu_a' data-alias='specifications_eY' href="bmw-218i-coupe">Технические характеристики</a></li>
					</ul>
				</div>
				-->
			</div>
		</div>
		<div class='search_container'>
			<form class="search_form" role="search" method="get" action="http://bmw.odessa.ua/ru/search">
				<div class='container'>
					<div class="row">
						<div class='col-xs-10 col-md-6'>
							<div class="input-group">
								<input type="text" class="form-control" name="search" placeholder="Поиск ">
								<span class="input-group-btn">
								<button class="do_search" type="submit">main.do_search</button>
								</span>
							</div>
						</div>
						<div class='col-xs-2 col-md-6 text-left'>
							<a class='search_toggler close_search' href='#'></a>
						</div>
					</div>
				</div>
			</form>
		</div>