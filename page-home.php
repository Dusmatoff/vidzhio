<?php /* Template Name: Vidzhio Homepage */
   get_header();
   ?>
<div class="section-slide">
   <div class="container slide-block">
      <h1 class="slide-title">
         <?php echo get_field('first_title') ; ?>
      </h1>
      <div class="row">
         <div class="col-md-7 col-lg-8 col-xl-9">
         </div>
         <div class="col-md-5 col-lg-4 col-xl-3">
            <div class="download-block">
               <p class="send-question">Отправить вопрос</p>
               <div id="form1-note"></div>
               <form id="form1" action="<?php bloginfo("template_directory"); ?>/form1-mail.php" method="post">
                  <input type="text" name="form1_tel" id="form1_tel" placeholder="Телефон"
                     required/>
                  <textarea
                     name="form1_message"
                     id="form1_message"
                     placeholder="Описание задачи,имя, город"
                     required></textarea
                     >
                  <input class="form-submit-btn" id="form1-submit" type="submit" value="Отправить" />
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="calculator-section">
<div class="container">
   <div class="row">
      <div class="col-lg-4">
         <!-- cd-accordion-menu -->
         <ul class="cd-accordion-menu">
            <li class="has-children accordion-item1">
               <input type="checkbox" name="group-1" id="group-1" checked />
               <label for="group-1">Видеонаблюдение</label>
               <ul>
                  <li><a href="#0">Система видеонаблюдения RVI</a></li>
                  <li><a href="#0">Система видеонаблюдения Trassir</a></li>
                  <li><a href="#0">Система видеонаблюдения Hikvision</a></li>
                  <li><a href="#0">Система видеонаблюдения Macroscope</a></li>
                  <li>
                     <a href="#0">Техническое обслуживание видеонаблюдения</a>
                  </li>
               </ul>
            </li>
            <li class="has-children accordion-item2">
               <input type="checkbox" name="group-2" id="group-2" />
               <label for="group-2">Пожарная безопасность</label>
               <ul>
                  <li><a href="#0">Пожарный аудит и расчет рисков</a></li>
                  <li class="has-children">
                     <input
                        type="checkbox"
                        name="sub-group-2"
                        id="sub-group-2"
                        />
                     <label for="sub-group-2"
                        >Установка пожарной сигнализации и оповещения</label
                        >
                     <ul class="third-level">
                        <li>
                           <a href="#0">Система пожарной сигнализации Болид</a>
                        </li>
                        <li>
                           <a href="#0">Система пожарной сигнализации Рубеж</a>
                        </li>
                        <li>
                           <a href="#0">Система пожарной сигнализации Стрелец</a>
                        </li>
                        <li>
                           <a href="#0"
                              >Система пожарной сигнализации ВЭРС, Гранит</a
                              >
                        </li>
                        <li>
                           <a href="#0">Система пожарной сигнализации Bosch</a>
                        </li>
                        <li>
                           <a href="#0">Система пожарной сигнализации Simplex</a>
                        </li>
                        <li>
                           <a href="#0">Система пожарной сигнализации Caddex</a>
                        </li>
                        <li>
                           <a href="#0">Система пожарной сигнализации Honeywell</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#0"
                        >Техническое обслуживание пожарной сигнализации</a
                        >
                  </li>
               </ul>
            </li>
            <li class="has-children accordion-item3">
               <input type="checkbox" name="group-3" id="group-3" />
               <label for="group-3">Системы контроля доступа</label>
               <ul>
                  <li><a href="#0">Система контроля доступа Guard</a></li>
                  <li><a href="#0">Система контроля доступа Parsec</a></li>
                  <li><a href="#0">Система конроля доступа ЭРА</a></li>
                  <li><a href="#0">Системы контроля доступа Lenel</a></li>
                  <li>
                     <a href="#0"
                        >Техническое обслуживание систем контроля доступа</a
                        >
                  </li>
               </ul>
            </li>
            <li class="accordion-item4">
               <a href="#0">Комплексное оснащение объектов</a>
               <input type="checkbox" name="group-4" id="group-4" />
            </li>
            <li class="has-children accordion-item5">
               <input type="checkbox" name="group-5" id="group-5" />
               <label for="group-5">Готовые решения</label>
               <ul>
                  <li><a href="#0">Загородный дом</a></li>
                  <li><a href="#0">Офис</a></li>
                  <li><a href="#0">Склад</a></li>
                  <li><a href="#0">Магазин</a></li>
                  <li><a href="#0">Хостел</a></li>
               </ul>
            </li>
         </ul>
         <!-- cd-accordion-menu -->
      </div>
      <div class="col-lg-8">
         <p class="section-title">Калькулятор стоимости системы</p>
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="true">Видеонаблюдение</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="fire-tab" data-toggle="tab" href="#fire" role="tab" aria-controls="fire" aria-selected="false">Пожарная сигнализация</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="control-tab" data-toggle="tab" href="#control" role="tab" aria-controls="control" aria-selected="false">Контроль доступа</a>
            </li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane active" id="video" role="tabpanel" aria-labelledby="video-tab">
               <form id="form2" action="<?php bloginfo("template_directory"); ?>/form2-mail.php" method="post">
                  <div class="form-top">
                     <label class="calculator-label" for="cameraQty">Количество камер</label>
                     <input class="calc-range" id="cameraQty" oninput="outputcameraQty.value=cameraQty.value" type="range" name="cameraQty" value="4" min="4" max="100" step="1" aria-required="true" aria-invalid="false" /> <output class="calc-output-range" name="your-range" id="outputcameraQty" for="cameraQty">4</output> шт
                     <p><b>Стоимость с работой:</b> <output name="cameraResult" id="cameraResult"></output></p>
                     <script>
                        var p = document.getElementById("cameraQty"),
                        res = document.getElementById("cameraResult");
                        p.addEventListener("input", function() {
                        if (p.value < 65){
                            res.innerHTML = "около " + (p.value * 12000) + " ₽";
                        }else{
                            res.innerHTML = "Индивидуальный проект";
                        }
                        
                        }, false); 
                     </script>
                  </div>
                  <div class="calc-form-section">
                     <span class="calc-form-title text-center">Отправить предварительное коммерческое предложение себе на почту</span><br>
                     <div class="row">
                        <div class="col-md-4">
                           <input name="form2_name" id="form2_name" type="text" class="modal-form-input" placeholder="Ваше имя" required>
                        </div>
                        <div class="col-md-4">
                           <input name="form2_email" id="form2_email" type="email" class="modal-form-input" placeholder="Ваш email">
                        </div>
                        <div class="col-md-4">
                           <input name="form2_tel" id="form2_tel" type="tel" class="modal-form-input" placeholder="+7 (123) 456 - 78 - 90" required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8">
                           <input type="checkbox" id="calc-form-checkbox" checked> <label for="calc-form-checkbox">Согласен с условиями <a href="#">политики конфиденциальности</a></label>
                        </div>
                        <div class="col-md-4">
                           <input class="form-submit-btn" id="form2-submit" type="submit" value="Отправить" />
                        </div>
                     </div>
               </form>
               <div id="form2-note"></div>
               </div>
            </div>
            <div class="tab-pane" id="fire" role="tabpanel" aria-labelledby="fire-tab">
               <form id="form2-2" action="<?php bloginfo("template_directory"); ?>/form2-2-mail.php" action="" method="post" >
                  <div class="form-top">
                     <label class="calculator-label" for="objectSquare">Площадь объекта</label>
                     <input class="calc-range" id="objectSquare" oninput="outputobjectSquare.value=objectSquare.value" type="range" name="objectSquare" value="50" min="50" max="1000" step="50" aria-required="true" aria-invalid="false" /> <output class="calc-output-range" name="your-range" id="outputobjectSquare" for="objectSquare">50</output> м<sup>2</sup>
                     <p><b>Стоимость с работой:</b> <output name="objectResult" id="objectResult"></output></p>
                     <script>
                        var p2 = document.getElementById("objectSquare"),
                        res2 = document.getElementById("objectResult");
                        p2.addEventListener("input", function() {
                        if (p2.value < 501){
                            res2.innerHTML = "около " + (p2.value * 1000) + " ₽";
                        }else{
                            res2.innerHTML = "Индивидуальный проект";
                        }
                        
                        }, false); 
                     </script>
                  </div>
                  <div class="calc-form-section">
                     <span class="calc-form-title text-center">Отправить предварительное коммерческое предложение себе на почту</span>
                     <div id="form2-2-note"></div>
                     <div class="row">
                        <div class="col-md-4">
                           <input name="form2-2-name" id="form2_name" type="text" class="modal-form-input" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-4">
                           <input name="form2-2-email" id="form2_email" type="email" class="modal-form-input" placeholder="Ваш email">
                        </div>
                        <div class="col-md-4">
                           <input name="form2-2-tel" id="form2_tel" type="tel" class="modal-form-input" placeholder="+7 (123) 456 - 78 - 90" required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8">
                           <input type="checkbox" id="calc-form-checkbox" checked> <label for="calc-form-checkbox">Согласен с условиями <a href="#">политики конфиденциальности</a></label>
                        </div>
                        <div class="col-md-4">
                           <input class="form-submit-btn" id="form2-2-submit" type="submit" value="Отправить" />
                        </div>
                     </div>
               </form>
               </div>
            </div>
            <div class="tab-pane" id="control" role="tabpanel" aria-labelledby="control-tab">
               <form id="form2-3" action="" method="post">
                  <div class="form-top">
                     <label class="calculator-label" for="camera-qty">Количество точек прохода</label>
                     <input class="calc-range" id="controlQty" oninput="outputcontrolQty.value=controlQty.value" type="range" name="controlQty" value="1" min="1" max="100" step="1" aria-required="true" aria-invalid="false" /> <output class="calc-output-range" name="your-range" id="outputcontrolQty" for="controlQty">1</output>
                     <p><b>Стоимость с работой:</b> <output name="controlResult" id="controlResult"></output></p>
                     <script>
                        var p3 = document.getElementById("controlQty"),
                        res3 = document.getElementById("controlResult");
                        p3.addEventListener("input", function() {
                        if (p3.value < 11){
                            res3.innerHTML = "около " + (p3.value * 17000) + " ₽";
                        }else{
                            res3.innerHTML = "Индивидуальный проект";
                        }
                        
                        }, false); 
                     </script>
                  </div>
                  <div class="calc-form-section">
                     <span class="calc-form-title text-center">Отправить предварительное коммерческое предложение себе на почту</span>
                     <div id="form2-3-note"></div>
                     <div class="row">
                        <div class="col-md-4">
                           <input name="form2-3-name" id="form2_name" type="text" class="modal-form-input" placeholder="Ваше имя" required>
                        </div>
                        <div class="col-md-4">
                           <input name="form2-3-email" id="form2_email" type="email" class="modal-form-input" placeholder="Ваш email">
                        </div>
                        <div class="col-md-4">
                           <input name="form2-3-tel" id="form2_tel" type="tel" class="modal-form-input" placeholder="+7 (123) 456 - 78 - 90" required>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8">
                           <input type="checkbox" id="calc-form-checkbox" checked> <label for="calc-form-checkbox">Согласен с условиями <a href="#">политики конфиденциальности</a></label>
                        </div>
                        <div class="col-md-4">
                           <input class="form-submit-btn" id="form2-3-submit" type="submit" value="Отправить" />
                        </div>
                     </div>
               </form>
               </div>
            </div>
            <script type="text/javascript">
               $(function () {
                 $('#myTab li:last-child a').tab('show')
               })
            </script>
         </div>
      </div>
   </div>
</div>
<div class="video-section">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-lg-4 col-xl-3">
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="left-video">
                  <p>
                     Бесплатный<br />
                     мини-проект к КП
                  </p>
               </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="left-video">
                  <p>
                     Подготовка ТЗ<br />
                     для Вас за Вас
                  </p>
               </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="left-video">
                  <p>
                     Бесплатная техническая<br />
                     поддержка и консультации
                  </p>
               </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="left-video">
                  <p>
                     Работаем по чек-листам.<br />
                     Аккуратно и качественно
                  </p>
               </div>
            </a>
         </div>
         <div class="col-md-6 col-lg-4 col-xl-6">
            <iframe
               width="100%"
               height="310"
               src="https://www.youtube.com/embed/mK72EwuxZAU?feature=oembed"
               frameborder="0"
               allow="autoplay; encrypted-media"
               allowfullscreen
               ></iframe>
         </div>
         <div class="col-md-3 col-lg-4 col-xl-3">
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="right-video">
                  <p>
                     Бесплатный<br />
                     выезд для осмотра
                  </p>
               </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="right-video">
                  <p>
                     Опытных инженеров<br />
                     с 10 летним стажем
                  </p>
               </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="right-video">
                  <p>
                     Гарантию 3 года, лицензии МЧС<br />
                     и полный пакет документов
                  </p>
               </div>
            </a>
            <a href="#" data-toggle="modal" data-target="#modalCallBack">
               <div class="right-video">
                  <p>
                     Обучение как пользоваться.<br />
                     Видеоролик.
                  </p>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="company-section">
      <div class="row">
         <div class="col-lg-12 col-xl-7">
            <p class="section-title text-center">
               Коротко о работе нашей компании в цифрах
            </p>
            <div class="row text-center">
               <div class="col-sm-6 col-md-4">
                  <div class="counter-bg">
                     <img class="counter-img" src="<?php  bloginfo("template_directory"); ?>/img/new-icon-1.png"><br>
                  </div>
                  <span class="counter-count counter-num">9</span>
                  <p class="company-icon-text">
                     <strong>Лет</strong> успешной работы<br />
                     нашей компании
                  </p>
               </div>
               <div class="col-sm-6 col-md-4">
                  <div class="counter-bg">
                     <img class="counter-img" src="<?php  bloginfo("template_directory"); ?>/img/new-icon-2.png"><br>
                  </div>
                  <span class="counter-count counter-num">8</span>
                  <p class="company-icon-text">
                     <strong>Бригад</strong> в шатате<br />
                     компании постоянно
                  </p>
               </div>
               <div class="col-sm-6 col-md-4">
                  <div class="counter-bg">
                     <img class="counter-img" src="<?php  bloginfo("template_directory"); ?>/img/new-icon-3.png"><br>
                  </div>
                  <span class="counter-count counter-num">1000</span>
                  <p class="company-icon-text">
                     <strong>Объектов</strong> за 9 лет
                  </p>
               </div>
            </div>
            <div class="row text-center">
               <div class="col-sm-6 col-md-6">
                  <div class="counter-bg">
                     <img class="counter-img" src="<?php  bloginfo("template_directory"); ?>/img/new-icon-4.png"><br>
                  </div>
                  <span class="counter-num">99 %</span>
                  <p class="company-icon-text">
                     <strong>Заказчиков</strong><br />
                     рекомендуют нас
                  </p>
               </div>
               <div class="col-sm-6 col-md-6">
                  <div class="counter-bg">
                     <img class="counter-img" src="<?php  bloginfo("template_directory"); ?>/img/new-icon-5.png"><br>
                  </div>
                  <span class="counter-num">10 %</span>
                  <p class="company-icon-text">
                     <strong>Скидку</strong> даем от<br />
                     цены конкурента
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-5  d-none d-xl-block">
            <img src="<?php bloginfo("template_directory"); ?>/img/man.png" alt="" class="company-man img-fluid" />
         </div>
      </div>
   </div>
</div>
<div class="portfolio-section">
   <div class="container">
      <p class="section-title text-center">Наши работы</p>
      <?php 
         $posts = get_posts(array(
         	'posts_per_page'	=> 2,
         	'post_type'			=> 'post',
         	'category'			=> '3'
         ));
         
         if( $posts ): ?>
      <div class="row">
         <?php foreach( $posts as $post ): 
            setup_postdata( $post );
            
            ?>
         <div class="col-md-6 col-lg-12 col-xl-6 portfolio-item">
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo("template_directory"); ?>/img/portfolio-pic-1.png" class="portfolio-item-img" /></a>
            <a href="<?php the_permalink(); ?>"><span class="portfolio-item-title"><?php the_title(); ?></span></a>
            <p class="portfolio-item-desc"><?php echo the_content(); ?></p>
            <a href="<?php the_permalink(); ?>" class="portfolio-btn">Посмотреть отчет</a>
         </div>
         <?php endforeach; ?>
         <a href="/category/portfolio/" class="portfolio-more-btn">Еще отчеты</a>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
   </div>
</div>
<div class="container">
   <div class="license-section">
      <p class="section-title text-center">Лицензии и сертификаты</p>
      <div class="row">
         <div class="col-md-12">
            <?php if( have_rows('license') ): ?>
            <div class="sertificate-carousel text-center">
               <?php while( have_rows('license') ): the_row(); 
                  // переменные
                  $image = get_sub_field('license_image');
                  
                  ?>
               <div>
                  <a href="<?php echo $image['url']; ?>" target="_blank">
                  <img src="<?php echo $image['url']; ?>" class="sert-image" />
                  </a>
               </div>
               <?php endwhile; ?>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<div class="team-section">
   <div class="container">
      <p class="section-title text-center">Наша команда</p>
      <div class="row">
         <?php if( have_rows('our_team') ): ?>
         <?php while( have_rows('our_team') ): the_row(); 
            // переменные
            $team_photo = get_sub_field('team_photo');
            $team_full_name = get_sub_field('full_name_team');
                  $team_position = get_sub_field('position_team');
            ?>
         <div class="col-md-6 col-lg-4 col-xl-3 team-member text-center">
            <img src="<?php echo $team_photo['url']; ?>" alt="<?php echo $team_photo['alt'] ?>" />
            <div class="team-member-info">
               <span class="team-member-name"><?php echo $team_full_name; ?></span><br />
               <span class="team-member-position">Должность:</span>
               <span class="team-member-position-name"><?php echo $team_position; ?></span>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</div>
<div class="container features-section">
   <div class="row">
      <div class="col-md-5 d-none d-xl-block">
         <img class="man-bg" src="<?php bloginfo("template_directory"); ?>/img/man.png" alt="" />
      </div>
      <div class="col-lg-12 col-xl-7">
         <p class="section-title text-center">Монтажные стандарты качества</p>
         <div class="row">
            <div class="col-md-6">
               <div class="feature-item-block text-center">
                  <img
                     src="<?php bloginfo("template_directory"); ?>/img/montazh-pic1.png"
                     alt=""
                     class="feature-item-image"
                     />
                  <p class="feature-item-text text-center">
                     Всё строго параллельно<br />и перпендикулярно
                  </p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="feature-item-block text-center">
                  <img
                     src="<?php bloginfo("template_directory"); ?>/img/montazh-pic1.png"
                     alt=""
                     class="feature-item-image"
                     />
                  <p class="feature-item-text text-center">
                     Расстояние между<br />клипсами 50 см
                  </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="feature-item-block text-center">
                  <img
                     src="<?php bloginfo("template_directory"); ?>/img/montazh-pic1.png"
                     alt=""
                     class="feature-item-image"
                     />
                  <p class="feature-item-text text-center">
                     Углы коробок<br />запиливаются
                  </p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="feature-item-block text-center">
                  <img
                     src="<?php bloginfo("template_directory"); ?>/img/montazh-pic1.png"
                     alt=""
                     class="feature-item-image"
                     />
                  <p class="feature-item-text text-center">
                     Все размещается с<br />максимальным удобством<br />
                     эксплуатации
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container steps-section">
   <p class="section-title text-center">Этапы работы</p>
   <div class="row">
      <div class="col-md-3 text-center step-item">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-1.png" alt="" />
         <p class="step-text">
            Обсуждение ТЗ<br />
            и осмотр объекта
         </p>
      </div>
      <div class="col-md-3 text-center step-item">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-2.png" alt="" />
         <p class="step-text">Подготовка КП</p>
      </div>
      <div class="col-md-3 text-center step-item">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-3.png" alt="" />
         <p class="step-text">
            Согласование и<br />
            подписание договора
         </p>
      </div>
      <div class="col-md-3 text-center">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-4.png" alt="" />
         <p class="step-text">
            Утверждение графика<br />
            поставок и выхода<br />
            специалистов на объект
         </p>
      </div>
   </div>
   <div class="row">
      <div class="col-md-3 text-center step-item">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-5.png" alt="" />
         <p class="step-text">
            Монтаж и<br />
            пусконаладочные работы
         </p>
      </div>
      <div class="col-md-3 text-center step-item">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-6.png" alt="" />
         <p class="step-text">
            Приёмка и сдача<br />
            объекта в эксплуатацию,<br />
            подписание актов
         </p>
      </div>
      <div class="col-md-3 text-center step-item">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-7.png" alt="" />
         <p class="step-text">
            Полный финансовый<br />
            расчёт
         </p>
      </div>
      <div class="col-md-3 text-center">
         <img src="<?php bloginfo("template_directory"); ?>/img/step-8.png" alt="" />
         <p class="step-text">
            Гарантия и<br />
            техподдержка<br />
         </p>
      </div>
   </div>
</div>
<div class="brands-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <img src="<?php bloginfo("template_directory"); ?>/img/brands.png" class="img-fluid" alt="" />
         </div>
      </div>
   </div>
</div>
<div class="container form-section">
   <div class="row">
      <div class="col-md-12 col-lg-8">
         <p class="section-title text-center">
            Оставьте заявку и мы решим любой вопрос
         <div id="bf-note"></div>
         </p>
         <form class="bottom_form" id="bottom_form" action="<?php bloginfo("template_directory"); ?>/bf-mail.php" method="post">
            <div class="row">
               <div class="col-md-6">
                  <input
                     type="text"
                     name="bf_name"
                     id="bf_name"
                     class="bottom-form-input"
                     placeholder="Представьтесь"
                     required />
               </div>
               <div class="col-md-6">
                  <input
                     type="tel"
                     class="bottom-form-input"
                     name="bf_tel"
                     id="bf_tel"
                     placeholder="Номер телефона"
                     required />
               </div>
            </div>
            <textarea
               class="bottom-form-textarea"
               cols="40"
               rows="6"
               name="bf_message"
               id="bf_message"
               placeholder="Введите ваш вопрос"
               required></textarea>
            <br>
            <input class="form-submit-btn" type="submit" id="bottom-form-submit" value="Жду звонка" />
         </form>
      </div>
      <div class="col-md-4 d-none d-lg-block">
         <img class="form-man" src="<?php bloginfo("template_directory"); ?>/img/man.png" alt="" />
      </div>
   </div>
</div>
<?php get_footer(); ?>