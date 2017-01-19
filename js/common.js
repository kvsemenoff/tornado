

$(document).ready(function(){

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });

    var owl = $(".slider-db");

    owl.owlCarousel({
        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="db-left"></span>','<span class="db-right"></span>'],
        responsive:{
          0:{
            items:0
          },       
          120:{
            items:1
          },
          240:{
            items:1
          },
          360:{
            items:2
          },
          500:{
            items:3
          },
          700:{
            items:4
          },
          1200:{
            items:6
          },
          1248:{
            items:6
          }
        }

    });

    var owl1 = $(".slider-db1");

    owl1.owlCarousel({
        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:false,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,
        navText:['<span class="db-left1"></span>','<span class="db-right1"></span>'],
        responsive:{
          0:{
            items:0
          },       
          120:{
            items:1
          },
          240:{
            items:1
          },
          360:{
            items:1
          },
          500:{
            items:2
          },
          700:{
            items:2
          },
          1200:{
            items:3
          },
          1248:{
            items:3
          }
        }

    });
 });


