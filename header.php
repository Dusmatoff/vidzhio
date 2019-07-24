<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vidzhio
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!-- [if gt IE 8]><! -->
<html class="no-js">
  <!-- <![endif] -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php  bloginfo("template_directory"); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php  bloginfo("template_directory"); ?>/slick/slick.css" />
    <link rel="stylesheet" href="<?php  bloginfo("template_directory"); ?>/style.css" />
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->

    <header class="header">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3 d-none d-lg-block camera-img">
              <img src="<?php  bloginfo("template_directory"); ?>/img/camera.png" />
            </div>

            <div class="col-6 col-md-3 col-lg-3 col-xl-3 header-logo">
              <a href="/"><img class="img-fluid" src="<?php  bloginfo("template_directory"); ?>/img/logo.png"/></a>
            </div>
            <div class="col-6 col-md-3 col-lg-3 col-xl-2 header-contact-info header-time d-none d-sm-block">
              <span class="small">Время работы:</span><br />
              <span class="big"><?php echo get_field('work_hours', 'option') ; ?></span>
            </div>
            <div class="col-6 d-none d-sm-block col-md-3 col-lg-3 col-xl-2 header-contact-info header-email">
              <span class="big"><?php echo get_field('email', 'option') ; ?></span><br />
              <a href="#" data-toggle="modal" data-target="#modalWriteUs"><span class="small dashed-underline">Написать нам</span></a>
            </div>
            <div class="col-6  col-md-3 col-lg-3 col-xl-2 header-contact-info header-phone">
              <span class="big"><?php echo get_field('phone', 'option') ; ?></span><br />
              <a href="#" data-toggle="modal" data-target="#modalCallBack"><span class="small dashed-underline">Заказать звонок</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-expand-lg navbar-light">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <?php
                  wp_nav_menu(array(
  'theme_location'  => 'menu-1',              
  'menu'            => '',              
  'menu_class'      => 'navbar-nav',       
  'echo'            => true,           
  'fallback_cb'     => 'wp_page_menu', 
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 2,
) );
?>
                  <a class="nav-link menu-btn" href="#" data-toggle="modal" data-target="#modalRequest">Заявка о неисправности</a>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>