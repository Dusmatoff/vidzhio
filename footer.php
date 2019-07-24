<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vidzhio
 */

?>

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-2">
            <p class="footer-menu-title">О компании</p>
            <ul class="footer-menu">
              <li><a href="#">Миссия</a></li>
              <li><a href="#">Цели</a></li>
              <li><a href="#">Отзывы</a></li>
              <li><a href="#">Гарантии</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-2">
            <p class="footer-menu-title">Готовые решения</p>
            <ul class="footer-menu">
              <li><a href="#">Загородный дом</a></li>
              <li><a href="#">Офис</a></li>
              <li><a href="#">Предприятие</a></li>
              <li><a href="#">Строительный объект</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-lg-2">
            <p class="footer-menu-title">Услуги компании</p>
            <ul class="footer-menu">
              <li><a href="#">Проектирование систем</a></li>
              <li><a href="#">Монтаж систем</a></li>
              <li><a href="#">Техническое обслуживание</a></li>
              <li><a href="#">Технический аудит</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer-contact-info header-time">
              <span class="small">Время работы:</span><br />
              <span class="big"><?php echo get_field('work_hours', 'option') ; ?></span>
            </div>
            <div class="footer-contact-info header-email">
              <span class="big"><?php echo get_field('email', 'option') ; ?></span><br />
              <a href="#"
                ><span class="small dashed-underline">Написать нам</span></a
              >
            </div>
            <div class="footer-contact-info header-phone">
              <span class="big"><?php echo get_field('phone', 'option') ; ?></span><br />
              <a href="#"
                ><span class="small dashed-underline">Заказать звонок</span></a
              >
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <img class="footer-logo img-fluid" src="<?php bloginfo("template_directory"); ?>/img/footer-logo.png" />

            <p class="footer-copyright">Все права защищены © 2010-2018</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/slick/slick.min.js"></script>
    <script src="<?php bloginfo("template_directory"); ?>/contact.js"></script>
    
    <script type="text/javascript">
      $(".sertificate-carousel").slick({
        //dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    </script>
    
    <script>
        $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    </script>
    
    <!-- Modal - Write Us -->
<div class="modal fade" id="modalWriteUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Напишите нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="modal-form1" action="<?php bloginfo("template_directory"); ?>/modal-form1-mail.php" method="post">
              <input type="email" name="modal-form1-email" class="modal-form-input" placeholder="Ваш Email" required>
              <textarea name="modal-form1-text" class="modal-form-textarea" placeholder="Ваш вопрос"></textarea>
              <input type="submit" id="modal-form1-submit" class="modal-form-btn" value="Отправить">
          </form> 
          <div id="modal-form1-note"></div>
      </div>
    </div>
  </div>
</div>
    <!-- Modal - Write Us -->
    
    <!-- Modal - Callback -->
<div class="modal fade" id="modalCallBack" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Заказать звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal-form2" action="<?php bloginfo("template_directory"); ?>/modal-form2-mail.php" method="post">
              <input type="text" name="modal-form2-name" class="modal-form-input" placeholder="Ваше имя">
              <input type="text" name="modal-form2-tel" class="modal-form-input" placeholder="+7 (123) 456 - xx - xx" required>
              <input type="submit" class="modal-form-btn" value="Отправить">
          </form> 
          <div id="modal-form2-note"></div>
      </div>
    </div>
  </div>
</div>
    <!-- Modal - Callback -->
    
        <!-- Modal - Request -->
<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Заявка о неисправности</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal-form3" action="<?php bloginfo("template_directory"); ?>/modal-form3-mail.php" method="post">
              <input type="text" name="modal-form3-name" class="modal-form-input" placeholder="ФИО">
              <input type="text" name="modal-form3-company" class="modal-form-input" placeholder="Организация">
              <input type="text" name="modal-form3-position" class="modal-form-input" placeholder="Должность">
              <input type="text" name="modal-form3-tel" class="modal-form-input" placeholder="+7 (123) 456 - xx - xx" required>
              <input type="email" name="modal-form3-email" class="modal-form-input" placeholder="Ваш email">
              <input type="text" name="modal-form3-address" class="modal-form-input" placeholder="Адрес объекта">
              <textarea class="modal-form-textarea" name="modal-form3-text" placeholder="Описание проблемы"></textarea>
              <input type="file" name="modal-form-file"><br>
              <input type="submit" class="modal-form-btn" value="Отправить">
          </form> 
          <div id="modal-form3-note"></div>
      </div>
    </div>
  </div>
</div>
    <!-- Modal - Request -->
    <?php wp_footer(); ?>
  </body>
</html>
