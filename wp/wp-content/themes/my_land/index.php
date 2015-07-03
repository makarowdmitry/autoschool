<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/animate.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/slick/slick-theme.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<title>Школа вождения</title>

<script type="text/javascript">


        $(document).on('click','.btn.one-f',function(){
      
                $.ajax({
                    url: "<?php bloginfo('template_url');?>/mail.php", //Адрес подгружаемой страницы
                    type: "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: $("#form_id").serialize()
             
                });
                alert('Спасибо, мы с вами свяжемся!');
                return false;
             });

        $(document).on('click','.btn.two-f',function(){
                $.ajax({
                    url: "<?php bloginfo('template_url');?>/mail.php", //Адрес подгружаемой страницы
                    type: "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: $("#form_id2").serialize()
             
                });
                alert('Спасибо, мы с вами свяжемся!');
                return false;
             });
	   

         $(document).on('click','.slide-but-l, .slide-but-r',function(){

                $('.our-inst-one.two-m').toggle();
                $('.our-inst-one.tree-m').toggle();
                $('.our-inst-one.one-m').toggle();
                
                return false;
             });



        $(document).ready(function(){

            // $(".offer-text-one.one").addClass('animated zoomIn');
            // $(".first-call").addClass('animated zoomIn');
            // $(".ford-l").addClass('animated fadeInLeft');
            // $(".ford-r").addClass('animated fadeInRight');
            // $(".offer-text-one.two").addClass('animated  zoomIn');
           

            // $(".why-block").css({visibility:"hidden"});

            // $(".problem-block p").css({visibility:"hidden"});

            // $(".how-it-work").css({visibility:"hidden"});

           

         
            $(".what-your-get p").eq(1).css({visibility:"hidden"});
            $(".what-your-get p").eq(2).css({visibility:"hidden"});
            $(".what-your-get p").eq(3).css({visibility:"hidden"});
            $(".what-your-get p").eq(4).css({visibility:"hidden"});


          
            
            
            
            var h = $(window).height();
            $(window).scroll(function(){

                  if ( ($(this).scrollTop()+h) >= $(".why-block").offset().top) {
                    $(".why-block").css({visibility:"visible"});
                    $(".why-block").eq(0).addClass('animated bounceInLeft');
                   
                } 


                // if ( ($(this).scrollTop()+h) >= $(".problem-block").offset().top) {
                //     $(".problem-block p").css({visibility:"visible"});
                //     $(".problem-block p").eq(0).addClass('animated animated zoomIn');
                   
                // } 

                //  if ( ($(this).scrollTop()+h) >= $(".how-it-work").offset().top) {
                //     $(".how-it-work").css({visibility:"visible"});
                //     $(".how-it-work p").eq(0).addClass('animated rotateIn');
                   
                // }

                // if ( ($(this).scrollTop()+h) >= $(".how-it-work p").eq(1).offset().top) {
                //     $(".how-it-work p").eq(1).css({visibility:"visible"});
                //     $(".how-it-work p").eq(1).addClass('animated rollIn');
                   
                // }

                // if ( ($(this).scrollTop()+h) >= $(".how-it-work p").eq(2).offset().top) {
                //     $(".how-it-work p").eq(2).css({visibility:"visible"});
                //     $(".how-it-work p").eq(2).addClass('animated rollIn');
                   
                // }

                // if ( ($(this).scrollTop()+h) >= $(".how-it-work p").eq(3).offset().top) {
                //     $(".how-it-work p").eq(3).css({visibility:"visible"});
                //     $(".how-it-work p").eq(3).addClass('animated zoomIn');
                   
                // }

            


                //  if ( ($(this).scrollTop()+h) >= $(".what-your-get").offset().top) {
                //     $(".what-your-get p").css({visibility:"visible"});
                //     $(".what-your-get p").eq(0).addClass('animated rollIn');
                   
                // }

                if ( ($(this).scrollTop()+h) >= $(".what-your-get p").eq(1).offset().top) {
                    $(".what-your-get p").eq(1).css({visibility:"visible"});
                    $(".what-your-get p").eq(1).addClass('animated zoomIn');
                   
                }

                  if ( ($(this).scrollTop()+h) >= $(".what-your-get p").eq(2).offset().top) {
                    $(".what-your-get p").eq(2).css({visibility:"visible"});
                    $(".what-your-get p").eq(2).addClass('animated zoomIn');
                   
                }

                  if ( ($(this).scrollTop()+h) >= $(".what-your-get p").eq(3).offset().top) {
                    $(".what-your-get p").eq(3).css({visibility:"visible"});
                    $(".what-your-get p").eq(3).addClass('animated zoomIn');
                   
                }

                  if ( ($(this).scrollTop()+h) >= $(".what-your-get p").eq(4).offset().top) {
                    $(".what-your-get p").eq(4).css({visibility:"visible"});
                    $(".what-your-get p").eq(4).addClass('animated zoomIn');
                   
                }


                //   if ( ($(this).scrollTop()+h) >= $(".bg9").offset().top) {
                //     $(".bg9").css({visibility:"visible"});
                //     $(".bg9 p").eq(0).addClass('animated rubberBand');
                //     $(".bg9 p").eq(1).addClass('animated zoomIn');
                //     $(".bg9 p").eq(2).addClass('animated rubberBand');
                //     $(".bg9 p").eq(3).addClass('animated zoomIn');
                   
                // }


                //  if ( ($(this).scrollTop()+h) >= $(".bg9 p").eq(4).offset().top) {
                //     $(".bg9 p").eq(4).css({visibility:"visible"});
                //     $(".bg9 p").eq(4).addClass('animated rollIn');
                   
                // }

                // if ( ($(this).scrollTop()+h) >= $(".bg9 p").eq(5).offset().top) {
                //     $(".bg9 p").eq(5).css({visibility:"visible"});
                //     $(".bg9 p").eq(5).addClass('animated rollIn');
                   
                // }


                // if ( ($(this).scrollTop()+h) >= $(".bg9 p").eq(6).offset().top) {
                //     $(".bg9 p").eq(6).css({visibility:"visible"});
                //     $(".bg9 p").eq(6).addClass('animated zoomIn');
                   
                // }

                // if ( ($(this).scrollTop()+h) >= $(".bg9 p").eq(7).offset().top) {
                //     $(".bg9 p").eq(7).css({visibility:"visible"});
                //     $(".bg9 p").eq(7).addClass('animated rollIn');
                   
                // }

                //  if (($(this).scrollTop()+h) >= $(".bg10").offset().top) {
                //     $(".bg10").css({visibility:"visible"});
                //     $(".bg10 p").eq(0).addClass('animated rollIn');
                //     $(".bg10 p").eq(1).addClass('animated zoomIn');
                //     $(".bg10 p").eq(2).addClass('animated rollIn');
                //     $(".bg10 p").eq(3).addClass('animated zoomIn');
                //     $(".bg10 p").eq(4).addClass('animated rollIn');
                //     $(".bg10 p").eq(5).addClass('animated zoomIn');
                   
                // }

                // if ( ($(this).scrollTop()+h) >= $(".end-btn").offset().top) {
                //     $(".end-btn").css({visibility:"visible"});
                //     $(".end-btn").eq(0).addClass('animated zoomIn');
                   
                // }


                // if (($(this).scrollTop()+h) >= $(".review").offset().top) {
                //     $(".review").css({visibility:"visible"});
                //     $(".review div").eq(0).addClass('animated zoomIn');
                //     $(".review div").eq(1).addClass('animated zoomIn');
                //     $(".review div").eq(2).addClass('animated zoomIn');
                   
                // }
            });
});





        
</script>
</head>
<body>

<!-- 1 -->
<div class="bg1-left"><div class="ford-l"></div></div>
<div class="bg1-right"><div class="ford-r"></div></div>

<div class="bg1">
    <div class="header-block-wrapper">
        <div class="header-block">
                <img src="<?php bloginfo('template_url');?>/images/logo.png">      
                <a href="#call-yes-id" class="btn first-call">Заказать звонок</a>
                <p class="phone-header">

                <?php if(have_posts()):query_posts('p=81');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
                <br><span><?php if(have_posts()):query_posts('p=29');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?></span>
                <img src="<?php bloginfo('template_url');?>/images/line_h.png">
            </p>

        </div>
    </div>   
    

    <div class="offer-text-one one">

    <?php if(have_posts()):query_posts('p=31');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
    
    </div>

    <div class="offer-text-one two">

    <?php if(have_posts()):query_posts('p=33');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        
    </div>
</div>


<!-- 2 -->
<div class="bg2">
    <div class="why-block">
        <?php if(have_posts()):query_posts('p=35');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
    </div>
    </div>

    <!-- 3 -->
<div class="bg3">
     <div class="problem-block">
        <p class="first"> <?php if(have_posts()):query_posts('p=38');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?></p>
        <p class="two-p">
             <?php if(have_posts()):query_posts('p=40');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
        </p>
        <p class="three-p">
             <?php if(have_posts()):query_posts('p=42');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
        </p>
        <div class="problem-left">
            <?php if(have_posts()):query_posts('p=40');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        </div>

        <div class="problem-right">
        
              <?php if(have_posts()):query_posts('p=42');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            
        </div>
        </div>
        <div class="bg3-1">  

        <div class="itog">
        <?php if(have_posts()):query_posts('p=44');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        </div>      
    </div>
    

    <!-- 4 -->
    <div class="bg4">

    <div class="form-one" id="callyes">
    <form method="post" action=""  id="form_id">
        <input type="text"  name="name" placeholder="Ваше имя" value="">
        <input type="text"  name="phone" placeholder="Ваш телефон" value="">
         <input type="hidden" name="youremail" value="<?php if(have_posts()):query_posts('p=84');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">
        <a href="" class="btn one-f">Оставить заявку</a>
    </form>

    </div>

    <!-- 5 -->
    <div class="bg5">
    <div class="how-it-work">

    <?php if(have_posts()):query_posts('p=48');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
     
        
        
    </div>
    </div>

    <!-- 6 -->
    <div class="bg6">
    <div class="our-instruct">
        <p>
              <?php if(have_posts()):query_posts('p=50');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>

        </p>

        <div class="carousel-instructor">


        <div class="our-inst-one one-m">
            <img src="<?php if(have_posts()):query_posts('p=23');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

        <?php if(have_posts()):query_posts('p=52');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            
        </div>
        <div class="our-inst-one two-m">
            <img src="<?php if(have_posts()):query_posts('p=25');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

          <?php if(have_posts()):query_posts('p=54');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            
        </div>
        <div class="our-inst-one three-m">
            <img src="<?php if(have_posts()):query_posts('p=27');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">
              <?php if(have_posts()):query_posts('p=56');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        </div>
        
         <div class="our-inst-one two-m">
            <img src="<?php if(have_posts()):query_posts('p=125');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

          <?php if(have_posts()):query_posts('p=148');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            
        </div>


         <div class="our-inst-one two-m">
            <img src="<?php if(have_posts()):query_posts('p=127');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

          <?php if(have_posts()):query_posts('p=150');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            
        </div>


         <div class="our-inst-one two-m">
            <img src="<?php if(have_posts()):query_posts('p=129');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

          <?php if(have_posts()):query_posts('p=152');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            
        </div>


        </div>
        <?php if(have_posts()):query_posts('p=59');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        
    </div>
    </div>

    <!-- 7 -->
    <div class="bg7">
    <div class="what-your-get">
     <?php if(have_posts()):query_posts('p=61');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        
        
    </div>
    </div>
    <div class="bg8">
        <div class="review">
         <p>
             <?php if(have_posts()):query_posts('p=63');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
         </p>

    <div class="carousel-review">
    
    <div>
        <div class="review1">
            <div>
                <img src="<?php if(have_posts()):query_posts('p=13');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

            <?php if(have_posts()):query_posts('p=65');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
                
            </div>
            <p class="background-carousel"> <?php if(have_posts()):query_posts('p=65');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?></p>
        </div>
    </div>
    
      <div>
        <div class="review1">
            <div>
                <img src="<?php if(have_posts()):query_posts('p=19');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

       <?php if(have_posts()):query_posts('p=67');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
                
            </div>
            <p class="background-carousel">
                
                <?php if(have_posts()):query_posts('p=67');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
            </p>
        </div>
    </div>

      <div>
        <div class="review1">
            <div>
                <img src="<?php if(have_posts()):query_posts('p=21');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">
                  <?php if(have_posts()):query_posts('p=69');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            </div>
            <p class="background-carousel">
                <?php if(have_posts()):query_posts('p=69');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
            </p>
        </div>
    </div>




        <div>
        <div class="review1">
            <div>
                <img src="<?php if(have_posts()):query_posts('p=119');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">
        <?php if(have_posts()):query_posts('p=131');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
            </div>
            <p class="background-carousel">
                <?php if(have_posts()):query_posts('p=131');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>
            </p>
        </div>
        </div>

        <div>
            <div class="review1">
                <div>
                    <img src="<?php if(have_posts()):query_posts('p=121');
            while (have_posts()):the_post(); ?><?php the_title();?>
            <? endwhile; endif; wp_reset_query();?>">
                      <?php if(have_posts()):query_posts('p=142');
            while (have_posts()):the_post(); ?><?php the_content();?>
            <? endwhile; endif; wp_reset_query();?>
                </div>
                <p class="background-carousel">
                    <?php if(have_posts()):query_posts('p=142');
            while (have_posts()):the_post(); ?><?php the_title();?>
            <? endwhile; endif; wp_reset_query();?>
                </p>
            </div>
        </div>

        <div>
            <div class="review1">
                <div>
                    <img src="<?php if(have_posts()):query_posts('p=123');
            while (have_posts()):the_post(); ?><?php the_title();?>
            <? endwhile; endif; wp_reset_query();?>">
                      <?php if(have_posts()):query_posts('p=144');
            while (have_posts()):the_post(); ?><?php the_content();?>
            <? endwhile; endif; wp_reset_query();?>
                </div>
                <p class="background-carousel">
                    <?php if(have_posts()):query_posts('p=144');
            while (have_posts()):the_post(); ?><?php the_title();?>
            <? endwhile; endif; wp_reset_query();?>
                </p>
            </div>
        </div>

        </div>
            
        </div>
    </div>
   
    <div class="bg9">
    <div>
     <?php if(have_posts()):query_posts('p=75');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>

     </div>
    </div>

    <div class="bg10">
        <div>
        <?php if(have_posts()):query_posts('p=77');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
         <a href="#call-yes-id" class="btn end-btn">Заказать звонок</a>
         <?php if(have_posts()):query_posts('p=79');
        while (have_posts()):the_post(); ?><?php the_content();?>
        <? endwhile; endif; wp_reset_query();?>
        </div>
    </div>

    <div class="bg11">
        <div>
            <div>
                <form method="post" action=""  id="form_id2">
                <input type="text"  name="name" placeholder="Ваше имя" value="">
                <input type="text"  name="phone" placeholder="Ваш телефон" value="">
                <input type="hidden" name="youremail" value="<?php if(have_posts()):query_posts('p=84');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>">

                <select name="metro">

<option disabled selected value="не указано">Выберите станцию метро</option>
<option >Авиамоторная</option>
<option >Автозаводская</option>
<option>Академическая</option>
<option>Александровский сад</option>
<option>Алексеевская</option>
<option>Алма-Атинская</option>
<option>Алтуфьево</option>
<option>Аннино</option>
<option>Арбатская (Арбатско-Покровская линия)</option>
<option>Арбатская (Филевская линия)</option>
<option>Аэропорт</option>
<option>Бабушкинская</option>
<option>Багратионовская</option>
<option>Баррикадная</option>
<option>Бауманская</option>
<option>Беговая</option>
<option>Белорусская</option>
<option>Беляево</option>
<option>Бибирево</option>
<option>Библиотека имени Ленина</option>
<option>Борисово</option>
<option>Боровицкая</option>
<option>Ботанический сад</option>
<option>Братиславская</option>
<option>Бульвар адмирала Ушакова</option>
<option>Бульвар Дмитрия Донского</option>
<option>Бульвар Рокоссовского</option>
<option>Бунинская аллея</option>
<option>Варшавская</option>
<option>ВДНХ</option>
<option>Владыкино</option>
<option>Водный стадион</option>
<option>Войковская</option>
<option>Волгоградский проспект</option>
<option>Волжская</option>
<option>Волоколамская</option>
<option>Воробьевы горы</option>
<option>Выставочная</option>
<option>Выхино</option>
<option>Деловой центр</option>
<option>Динамо</option>
<option>Дмитровская</option>
<option>Добрынинская</option>
<option>Домодедовская</option>
<option>Достоевская</option>
<option>Дубровка</option>
<option>Жулебино</option>
<option>Зябликово</option>
<option>Измайловская</option>
<option>Калужская</option>
<option>Кантемировская</option>
<option>Каховская</option>
<option>Каширская</option>
<option>Киевская</option>
<option>Китай-город</option>
<option>Кожуховская</option>
<option>Коломенская</option>
<option>Комсомольская</option>
<option>Коньково</option>
<option>Красногвардейская</option>
<option>Краснопресненская</option>
<option>Красносельская</option>
<option>Красные ворота</option>
<option>Крестьянская застава</option>
<option>Кропоткинская</option>
<option>Крылатское</option>
<option>Кузнецкий мост</option>
<option>Кузьминки</option>
<option>Кунцевская</option>
<option>Курская</option>
<option>Кутузовская</option>
<option>Ленинский проспект</option>
<option>Лермонтовский проспект</option>
<option>Лубянка</option>
<option>Люблино</option>
<option>Марксистская</option>
<option>Марьина роща</option>
<option>Марьино</option>
<option>Маяковская</option>
<option>Медведково</option>
<option>Международная</option>
<option>Менделеевская</option>
<option>Митино</option>
<option>Молодежная</option>
<option>Монорельса Выставочный центр</option>
<option>Монорельса Телецентр</option>
<option>Монорельса Улица Академика Королева</option>
<option>Монорельса Улица Милашенкова</option>
<option>Монорельса Улица Сергея Эйзенштейна</option>
<option>Монорельсовой дороги Тимирязевская</option>
<option>Мякинино</option>
<option>Нагатинская</option>
<option>Нагорная</option>
<option>Нахимовский проспект</option>
<option>Новогиреево</option>
<option>Новокосино</option>
<option>Новокузнецкая</option>
<option>Новослободская</option>
<option>Новоясеневская</option>
<option>Новые Черемушки</option>
<option>Октябрьская</option>
<option>Октябрьское поле</option>
<option>Орехово</option>
<option>Отрадное</option>
<option>Охотныйряд</option>
<option>Павелецкая</option>
<option>Парк культуры</option>
<option>Парк Победы</option>
<option>Партизанская</option>
<option>Первомайская</option>
<option>Перово</option>
<option>Петровско-Разумовская</option>
<option>Печатники</option>
<option>Пионерская</option>
<option>Планерная</option>
<option>Площадь Ильича</option>
<option>Площадь Революции</option>
<option>Полежаевская</option>
<option>Полянка</option>
<option>Пражская</option>
<option>Преображенская площадь</option>
<option>Пролетарская</option>
<option>Проспект Вернадского</option>
<option>Проспект Мира</option>
<option>Профсоюзная</option>
<option>Пушкинская</option>
<option>Пятницкое шоссе</option>
<option>Речной вокзал</option>
<option>Рижская</option>
<option>Римская</option>
<option>Рязанский проспект</option>
<option>Савеловская</option>
<option>Свиблово</option>
<option>Севастопольская</option>
<option>Семеновская</option>
<option>Серпуховская</option>
<option>Славянский бульвар</option>
<option>Смоленская (Арбатско-Покровская линия)</option>
<option>Смоленская (Филевская линия)</option>
<option>Сокол</option>
<option>Сокольники</option>
<option>Спартак</option>
<option>Спортивная</option>
<option>Сретенский бульвар</option>
<option>Строгино</option>
<option>Студенческая</option>
<option>Сухаревская</option>
<option>Сходненская</option>
<option>Таганская</option>
<option>Тверская</option>
<option>Театральная</option>
<option>Текстильщики</option>
<option>Теплый стан</option>
<option>Тимирязевская</option>
<option>Третьяковская</option>
<option>Тропарево</option>
<option>Трубная</option>
<option>Тульская</option>
<option>Тургеневская</option>
<option>Тушинская</option>
<option>Улица Академика Янгеля</option>
<option>Улица Горчакова</option>
<option>Улица Скобелевская</option>
<option>Улица Старокачаловская</option>
<option>Улица 1905 года</option>
<option>Университет</option>
<option>Филевский парк</option>
<option>Фили</option>
<option>Фрунзенская</option>
<option>Царицыно</option>
<option>Цветной бульвар</option>
<option>Черкизовская</option>
<option>Чертановская</option>
<option>Чеховская</option>
<option>Чистые пруды</option>
<option>Чкаловская</option>
<option>Шаболовская</option>
<option>Шипиловская</option>
<option>Шоссе Энтузиастов</option>
<option>Щелковская</option>
<option>Щукинская</option>
<option>Электрозаводская</option>
<option>Юго-Западная</option>
<option>Южная</option>
<option>Ясенево</option>
                </select>
                
            </div>
            <div>                
                <p class="phone-header">
                    
                    <?php if(have_posts()):query_posts('p=81');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?>

                <br><span><?php if(have_posts()):query_posts('p=29');
        while (have_posts()):the_post(); ?><?php the_title();?>
        <? endwhile; endif; wp_reset_query();?></span></p>
                <a href="#call-yes-id" class="btn two-ff two-f">Заказать звонок</a>
</form>
            </div>
        </div>
    </div>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url');?>/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
  $('.carousel-instructor').slick({

    autoplay : true

  });
});

    $(document).ready(function(){
  $('.carousel-review').slick({
    autoplay : true,
    slidesToShow: 2,
    slidesToScroll: 2
  });
});






                
</script>
</body>
</html>