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