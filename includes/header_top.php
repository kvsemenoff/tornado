<section class="dd-top-header">	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="dd-logo">
					<img src="img/logo.png" alt="">
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