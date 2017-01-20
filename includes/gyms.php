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
                            <div class="tornado__gyms_slider_link">
                                <a href="">ЭКРКУРСИЯ ПО ЗАЛУ</a>
                            </div>
                            <div class="tornado__gyms_slider_overlay">
                            </div>
                        </div>
                        <div class="tornado__gyms_slider_text">
                            г. Краснодар, Юбилейный микрорайон,<br>
                            ЖК «Новый город»,<br>
                            бульвар Клары Лучко, 14/1.
                        </div>
	                </div>
				    <div class="item">
				        <div class="tornado__gyms_slider_padding">
				            <div class="tornado__gyms_slider_for_image">
                                <img class="tornado__gyms_slider_image" src="../img/dc-gyms-2.jpg">
                            </div>
                            <div class="tornado__gyms_slider_link">
                                <a href="">ЭКРКУРСИЯ ПО ЗАЛУ</a>
                            </div>
                            <div class="tornado__gyms_slider_overlay">
                            </div>
                        </div>
                        <div class="tornado__gyms_slider_text">
                            г. Краснодар, мкр. Панорама,<br>
                            ЖК «Смоленский»,<br>
                            ул. Восточно-Кругликовская, 30
                        </div>
	                </div>
				    <div class="item">
				        <div class="tornado__gyms_slider_padding">
				            <div class="tornado__gyms_slider_for_image">
                                <img class="tornado__gyms_slider_image" src="../img/dc-gyms-3.jpg">
                            </div>
                            <div class="tornado__gyms_slider_link">
                                <a href="">ЭКРКУРСИЯ ПО ЗАЛУ</a>
                            </div>
                            <div class="tornado__gyms_slider_overlay">
                            </div>
                        </div>
                        <div class="tornado__gyms_slider_text">
                            г. Краснодар, Фестивальный микрорайон,<br>
                            ЖК «Солнечный город»,<br>
                            ул. Архитектора Ишунина, 7/1.
                        </div>
	                </div>
		        </div>
		        </center>
            </div>
	    </div>
	</div>
</section>	

<script type="text/javascript">
	$(document).ready(function(){
		// Надпись, положение
		var explode = function(){
		    $(".tornado__gyms_slider_link").css("top", 
                $(".tornado__gyms_slider_image").height()/2 - 10 + 'px'
		    );

            var diff = 40;
            if ($(document).width() < 320) {
            	diff = 90;
            }

		    $(".tornado__gyms_slider_link").css("left", 		    	
                $(".tornado__gyms_slider_padding").width()/2 - diff + 'px'
		    );
		};
		setTimeout(explode, 500);
	});
</script>