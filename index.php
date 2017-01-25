<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />	
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>		
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>



<section class="dd-top-header">	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="dd-logo">
					<a href="#"><img src="img/logo.png" alt=""></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dd-social">
					<div class="dd-social-table">
						<div class="dd-icon"><a href="#"><img src="img/vk.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/inst.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/tube.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/face.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/ok.png" alt=""></a></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dd-number">
					<span>8-918-136-22-72</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Menu -->
<section class="dd-main-menu-wrap">
	<div class="ico-wrap">
		<div class="dd-ico">
			<img src="img/menu-ico.png" alt="">
		</div>
	</div>
	<div class="container">
		<div class="dd-menu-container">
			<ul>
				<li class="no-padding"><a class="dd-main-style" href="#">Главная</a></li>
				<li id="js-hover"><a class="dd-main-style"  href="#">Обучаем</a>
					<ul class="dd-sub-menu">
						<li><a href="#">Каратэ</a></li>
						<li><a href="#">Ушу</a></li>
						<li><a href="#">Дзюдо</a></li>
						<li><a href="#">Кикбоксинг</a></li>
						<li><a href="#">Аэробика</a></li>
					</ul>
				</li>
				<li id="js-hover"><a class="dd-main-style" href="#">Тренеры</a>
					<ul class="dd-sub-menu">
						<li><a href="#">Каратэ</a></li>
						<li><a href="#">Ушу</a></li>
						<li><a href="#">Дзюдо</a></li>
						<li><a href="#">Кикбоксинг</a></li>
						<li><a href="#">Аэробика</a></li>
					</ul>
				</li>
				<li id="js-hover"><a class="dd-main-style" href="#">Спортсмены</a>
					<ul class="dd-sub-menu">
						<li><a href="#">Лучшие спортсмены 2016</a></li>
						<li><a href="#">Лучшие спортсмены 2015</a></li>
						<li><a href="#">Лучшие спортсмены 2014</a></li>
						<li><a href="#">Лучшие спортсмены 2013</a></li>
						<li><a href="#">Лучшие спортсмены 2012</a></li>
						<li><a href="#">Лучшие спортсмены 2011</a></li>
						<li><a href="#">Лучшие спортсмены 2010</a></li>
						<li><a href="#">Лучшие спортсмены 2009</a></li>
					</ul>
				</li>
				<li><a class="dd-main-style" href="#">Календарь</a></li>
				<li><a class="dd-main-style" href="#">Галерея</a></li>
				<li><a class="dd-main-style dd-last" href="#">Контакты</a></li>
			</ul>
		</div>
	</div>
</section>



<script>
	$('.dd-menu-container #js-hover').hover(function(){
		$(this).find('.dd-sub-menu').stop().slideToggle();
	});
	$('.dd-ico').click(function(){
		$('.dd-menu-container').slideToggle();
	});
</script>


<div class="df-section">
	<div id="df-js-slider">
		<div class="item">
			<div class="df-img-slider">	
				<img  class="img-responsive" src="img/df-slider.jpg" alt="">
			</div>	
			<div class="df-slider df-slider_view">Разница между тем, кто ты есть и тем, кем хочешь быть - это то, что ты делаешь.
				Совершенствуй себя! Совершенствуй свой дух! Совершенствуй своё тело! <br>
				Вместе с Центром Каратэ "Торнадо"
			</div>	
		</div>
		<div class="df-section">
			<div class="df-img-slider">	
				<img  class="img-responsive" src="img/df-slider.jpg" alt="">
			</div>	
			<div class="df-slider df-slider_view">Разница между тем, кто ты есть и тем, кем хочешь быть - это то, что ты делаешь.
				Совершенствуй себя! Совершенствуй свой дух! Совершенствуй своё тело! <br>
				Вместе с Центром Каратэ "Торнадо"
			</div>	
		</div>
		<div class="df-section">
			<div class="df-img-slider">	
				<img  class="img-responsive" src="img/df-slider.jpg" alt="">
			</div>	
			<div class="df-slider df-slider_view">Разница между тем, кто ты есть и тем, кем хочешь быть - это то, что ты делаешь.
				Совершенствуй себя! Совершенствуй свой дух! Совершенствуй своё тело! <br>
				Вместе с Центром Каратэ "Торнадо"
			</div>	
		</div>
		<div class="df-section">
			<div class="df-img-slider">	
				<img  class="img-responsive" src="img/df-slider.jpg" alt="">
			</div>	
			<div class="df-slider df-slider_view">Разница между тем, кто ты есть и тем, кем хочешь быть - это то, что ты делаешь.
				Совершенствуй себя! Совершенствуй свой дух! Совершенствуй своё тело! <br>
				Вместе с Центром Каратэ "Торнадо"
			</div>	
		</div>
	</div>
</div>			

<section class="section section-db-news-view">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="db-h2-news">Главные новости</h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="db-news-container1">		
					<a href="#">
						<div class="db-new-imgbox">
							<img src="img/db-news-one.jpg" alt="img">
						</div>
					</a>
					<p>
						<a href="#">РЕЗУЛЬТАТЫ ПЕРВЕНСТВА ЮФО<br> 
							ПО КАРАТЭ Г. САЛЬСК</a><br>
							<span>5 января 2017 года</span>
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="db-news-container2">	
					<a href="#"><div class="db-new-imgbox">
						<img src="img/db-news-two.jpg" alt="img">
					</div>
				</a>
				<p>
					<a href="#">ОБЪЯВЛЕН НАБОР В ГРУППУ<br> 
						ПАРА-КАРАТЭ</a><br>
						<span>5 января 2017 года</span>
					</p>
				</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="db-news-container3">	
					<a href="#"><div class="db-new-imgbox">
						<img src="img/db-news-three.jpg" alt="img">
					</div>
				</a>
				<p>
					<a href="#">ВЫБРАНЫ ЛУЧШИЕ СПОРТСМЕНЫ<br>
						ДЕКАБРЯ</a><br>
						<span>5 января 2017 года</span>
					</p>
				</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="submit_padding-news">
						<input type="submit" value="Все новости">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>


<section class="section db-section-whi_view">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="db-why-h2">Почему стоит доверить нам <span>обучение<br> 
					вашего ребенка каратэ?</span></h2>
				</div>
		
			<div class="clearfix"></div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-one.png" alt="img">
					</div>
					<p class="db-p-content">
						7 тренеров с высшим 
						физобразованием
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-two.png" alt="img">
					</div>
					<p class="db-p-content">
						20 лет стажа
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-three.png" alt="img">
					</div>
					<p class="db-p-content">
						1800 медалей 
						завоевано
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-four.png" alt="img">
					</div>
					<p class="db-p-content">
						2300 детей <br>
						обучено
					</p>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-five.png" alt="img">
					</div>
					<p class="db-p-content">
						1 мастер спорта 
						международного класса
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-six.png" alt="img">
					</div>
					<p class="db-p-content">
						5 мастеров спорта
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-seven.png" alt="img">
					</div>
					<p class="db-p-content">
						17 кандидатов 
						в мастера спорта
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="db-why-content">
					<div class="db-img-box">
						<img src="img/db-why-eight.png" alt="img">
					</div>
					<p class="db-p-content">
						41 чемпионов 
						и призеров первенств
					</p>
				</div>
			</div>
			<div class="clearfix"></div>		

		</div>
	</div>
</section>


<section class="section section_padding section_padding-dc_gyms_view">
	<div class="container">		
		<div class="row">		
		    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		        <h2 class="tornado__gyms_title">
		            Тренировочные залы
		        </h2>
		        <div class="tornado__gyms_text">
                    Комфортабельные залы с современным коммуникационным оснащением,<br> оборудованные профессиональными татами и необходимым для занятий спортивным инвентарем. <br>Только в таких условиях проходят тренировки.
		        </div>
		        <center>
		        <div class="tornado__gyms_slider slider-db1">
				    <div class="item">
				        <div class="tornado__gyms_slider_padding">
                            <div class="tornado__gyms_slider_for_image">
                                <img class="tornado__gyms_slider_image" src="../img/dc-gyms-1.jpg">
                            </div>
                                <a class="tornado__gyms_slider_link" href="#">
                                    ЭКРКУРСИЯ ПО ЗАЛУ
                                </a>
                        </div>
                        <div class="tornado__gyms_slider_text">
                            <a href="">
                                г. Краснодар, Юбилейный микрорайон,<br>
                                ЖК «Новый город»,<br>
                                бульвар Клары Лучко, 14/1.
                            </a>
                        </div>
	                </div>
				    <div class="item">
				        <div class="tornado__gyms_slider_padding">
				            <div class="tornado__gyms_slider_for_image">
                                <img class="tornado__gyms_slider_image" src="../img/dc-gyms-2.jpg">
                            </div>
                            <a class="tornado__gyms_slider_link" href="#">
                                ЭКРКУРСИЯ ПО ЗАЛУ
                            </a>
                        </div>
                        <div class="tornado__gyms_slider_text">
                            <a href="">
                                г. Краснодар, мкр. Панорама,<br>
                                ЖК «Смоленский»,<br>
                                ул. Восточно-Кругликовская, 30
                            </a>
                        </div>
	                </div>
				    <div class="item">
				        <div class="tornado__gyms_slider_padding">
				            <div class="tornado__gyms_slider_for_image">
                                <img class="tornado__gyms_slider_image" src="../img/dc-gyms-3.jpg">
                            </div>
                            <a class="tornado__gyms_slider_link" href="#">
                                ЭКРКУРСИЯ ПО ЗАЛУ
                            </a>
                        </div>
                        <div class="tornado__gyms_slider_text">
                            <a href="">
                                г. Краснодар, Фестивальный микрорайон,<br>
                                ЖК «Солнечный город»,<br>
                                ул. Архитектора Ишунина, 7/1.
                            </a>
                        </div>
	                </div>
		        </div>
		        </center>
            </div>
	    </div>
	</div>
</section>

<section class="section section_padding df-bg-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="df-cap">Наши опытные тренера</h2>
				<p class="df-toptext">Детей обучают мастера спорта и квалифицированные инструкторы в области восточных единоборств, 				со званиями и наградами, являющиеся победителями и призерами олимпиад и конкурсов.</p>
				<div class="df-treners df-treners_view">
					<div class="df-treners-slider">
						<div class="item">
							<div class="df-treners__block df-treners__block_view">
								<div class="df-treners__img df-treners__img_view">
									<a href="#"><img src="img/df-tr1.jpg" alt=""></a>
								</div>
								<a href="#" class="df-treners__link df-treners__link_view">Марат Казимович Айбазов</a>
							</div>
						</div>
						<div class="item">
							<div class="df-treners__block df-treners__block_view">
								<div class="df-treners__img df-treners__img_view">
									<a href="#"><img src="img/df-tr2.jpg" alt=""></a>
								</div>
								<a href="#" class="df-treners__link df-treners__link_view">Ольга Валерьевна Кудрявцева</a>
							</div>
						</div>
						<div class="item">
							<div class="df-treners__block df-treners__block_view">
								<div class="df-treners__img df-treners__img_view">
									<a href="#"><img src="img/df-tr3.jpg" alt=""></a>
								</div>
								<a href="#" class="df-treners__link df-treners__link_view">Александр Алексеевич Лебедев</a>
							</div>
						</div>
						<div class="item">
							<div class="df-treners__block df-treners__block_view">
								<div class="df-treners__img df-treners__img_view">
									<a href="#"><img src="img/df-tr4.jpg" alt=""></a>
								</div>
								<a href="#" class="df-treners__link df-treners__link_view">Артур Олегович Борбот</a>
							</div>
						</div>
						<div class="item">
							<div class="df-treners__block df-treners__block_view">
								<div class="df-treners__img df-treners__img_view">
									<a href="#"><img src="img/df-tr5.jpg" alt=""></a>
								</div>
								<a href="#" class="df-treners__link df-treners__link_view">Юлия Александровна Федосова</a>
							</div>
						</div>
						<div class="item">
							<div class="df-treners__block df-treners__block_view">
								<div class="df-treners__img df-treners__img_view">
									<a href="#"><img src="img/df-tr6.jpg" alt=""></a>
								</div>
								<a href="#" class="df-treners__link df-treners__link_view">Артур Дереникович Оганесян</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>		

<section class="section section_padding df-bg-section2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="df-h2">Календарь мероприятий на 2017 год</h2>
				<div class="df-calendar df-calendar_view">
					<div class="df-calendar__links df-calendar__links_view">
						<a href="#df-tab1" class="df-active">Предстоящие</a>
						<a href="#df-tab2">Прошедшие</a>
					</div>
					<div class="clear"></div>
					<div class="df-calendar__events df-calendar__events_view" id="df-tab1">
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">16 января</a>
							<a class="df-right_view" href="#">Всероссийский турнир по каратэ “Невский факел</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">1 февраля</a>
							<a class="df-right_view" href="#">Всероссийский турнир по кикбоксинг формс «Musical forms»</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">3 марта</a>
							<a class="df-right_view" href="#">Первенство Тимашевского района по каратэ и кикбоксинг формс, посвященное праздникам 23 февраля и 8 марта</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">3 марта</a>
							<a class="df-right_view" href="#">Первенство Тимашевского района по каратэ и кикбоксинг формс, посвященное праздникам 23 февраля и 8 марта</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">3 марта</a>
							<a class="df-right_view" href="#">Первенство Тимашевского района по каратэ и кикбоксинг формс, посвященное праздникам 23 февраля и 8 марта</a>
						</div>
					</div>
					<div class="df-calendar__events df-calendar__events_view" id="df-tab2">
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">15 января</a>
							<a class="df-right_view" href="#">Всероссийский турнир по каратэ “Невский факел</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">3 февраля</a>
							<a class="df-right_view" href="#">Всероссийский турнир по кикбоксинг формс «Musical forms»</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">4 марта</a>
							<a class="df-right_view" href="#">Первенство Тимашевского района по каратэ и кикбоксинг формс, посвященное праздникам 23 февраля и 8 марта</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">5 марта</a>
							<a class="df-right_view" href="#">Первенство Тимашевского района по каратэ и кикбоксинг формс, посвященное праздникам 23 февраля и 8 марта</a>
						</div>
						<div class="df-calendar__textbox df-calendar__textbox_view">
							<a class="df-left_view" href="#">7 марта</a>
							<a class="df-right_view" href="#">Первенство Тимашевского района по каратэ и кикбоксинг формс, посвященное праздникам 23 февраля и 8 марта</a>
						</div>
					</div>
					<input class="df-input-calendar" type="submit" value="Все мероприятия">
				</div>
				
			</div>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){
    $('.df-calendar__links_view a').click(function(e) {
        e.preventDefault();
        $('.df-calendar__links_view .df-active').removeClass('df-active');
        $(this).addClass('df-active');
        var tab = $(this).attr('href');
        $('.df-calendar__events_view').not(tab).css({'display':'none'});
        $(tab).fadeIn(400);
    });
});
</script>			

<section class="section section-db-we-view">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="db-h2-we">Мы растим чемпионов!</h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				
					<img src="img/db-we-one.jpg" alt="img" class="img-responsive">
				
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
			
					<img src="img/db-we-two.jpg" alt="img" class="img-responsive">
				
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="submit_padding">
					<input type="submit">
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

<section class="section section-db-zapis">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="db-zapis-h2">Запись на пробное занятие</h2>
			</div>
			<form action="#" method="post">
				<div class="col-md-4">
					<input type="text" placeholder="Наше имя">
				</div>
				<div class="col-md-4">
					<input type="text" placeholder="Наш телефон" class="phone">
				</div>
				<div class="col-md-4">
					<input type="submit" value="ХОЧУ ПОПРОБОВАТЬ!" class="db-zapis-submit">
				</div>		
			</form>
		</div>
	</div>
</section>

<section class="section section_padding section_padding-dc_view">
	<div class="container">		
		<div class="row">		
		    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		        <h2 class="tornado__about_title">
		            О нашем центре карате
		        </h2>
		        <div class="tornado__about">
		            <p class="tornado__about_text">
		                О происхождении карате известно только из легенд. Так, по одной из легенд, создателем карате считается Бодхидхарма, основатель дзэн-буддизма, который в 520 г. н.э. перенес свою резиденцию из Индии в Китай, в монастырь Шаолинь, расположенный на склоне лесистой горы Шаоши в нескольких десятках километров от города Чжэнчжоу.
		            </p>
		            <p class="tornado__about_text">
		                В монастыре Шаолинь Бодхидхарма обучал своих учеников умению терпеть (выносливости), развивать силу, быстроту, ловкость, гибкость. Проводимые им тренировки основывались на принципе движений животных с элементами самозащиты и предположительно назывались «18 движений рук архата». Этими упражнениями укреплялась сила духа и тела, осуществлялась подготовка к испытаниям, каковыми являлись длительные сеансы медитации. Кроме того, эти упражнения служили средством защиты на дорогах за пределами монастыря. В дальнейшем методы физических тренировок Бодхидхармы развивались и совершенствовались и стали известны как боевое искусство монастыря Шаолинь. Впоследствии это боевое искусство вывезли с Японию, где оно смешалось с местными приемами борьбы жителей островов.
		            </p>
		            <p class="tornado__about_text">
		                Документально подтвержденных исторических сведений о появлении карате в Японии не так уж много. Известно, что в XII в., когда самурайские дружины Тайра, разбитые в сражении при Дан-ноура (совр. Симоносэки) войсками Минамото, беспорядочно устремились на юг, многие переправились на Окинаву (крупнейший остров архипелага Рюкю, лежащий в 500км от о.Кюсю, в 600км от Тайваня и в 800км от южно-китайского побережья) и там познакомили местных жителей со своим боевым искусством.
		            </p>
		            <p class="tornado__about_text">
		                В 1392г. в Наху, столицу острова, прибыла специальная миссия из 36 китайских колонистов (так называемые «36 принявших подданство»), имевших задание распространять среди местного населения начала знаний по мореплаванию, книгопечатанию и различным ремеслам.
		            </p>
		        </div>
            </div>
	    </div>
	</div>
</section>	
	


<section class="section section_padding-dc_view1">
	<div class="container">		
		<div class="row">		
		    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		        <center>
				<div class="logos__slider slider-db">				    
				    <div class="item">
				        <div class="logos__slider_padding">
                            <img class="logos__slider_image" src="../img/2.png">
                        </div>
	                </div>
				    <div class="item">
				        <div class="logos__slider_padding">
                            <img class="logos__slider_image" src="../img/3.png">
                        </div>
	                </div>
				    <div class="item">
				        <div class="logos__slider_padding">
                            <img class="logos__slider_image" src="../img/5.png">
                        </div>
	                </div>
				    <div class="item">
				        <div class="logos__slider_padding">
                            <img class="logos__slider_image" src="../img/4.png">
                        </div>
	                </div>
				    <div class="item">
				        <div class="logos__slider_padding">
                            <img class="logos__slider_image" src="../img/6.png">
                        </div>
	                </div>
				    <div class="item">
				        <div class="logos__slider_padding">
                            <img class="logos__slider_image" src="../img/7.png">
                        </div>
	                </div>	                
            </div>
            </center>
	    </div>
	</div>
</section>	

<section>
	<div class="container my-padding">
		<div class="row">
			<div class="col-md-6">
				<div class="dd-social float">
					<div class="dd-social-table">
						<div class="dd-icon"><a href="#"><img src="img/vk.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/inst.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/tube.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/face.png" alt=""></a></div>
						<div class="dd-icon"><a href="#"><img src="img/ok.png" alt=""></a></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="dd-number">
					<span>8-918-136-22-72</span><br>
					<div class="dd-wr">
						<span>kr-region-karate@yandex.ru</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="dd-footer-bottom-txt">
					<span>© 2017. Центр каратэ «Торнадо». Все права защищены.</span>
				</div>
			</div>
		</div>
	</div>
</section>

</body>
</html>