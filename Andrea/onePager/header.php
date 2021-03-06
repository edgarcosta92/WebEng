<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> <?php bloginfo('name'); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,500' rel='stylesheet' type='text/css'/>
    <script src="<?php bloginfo('template_url'); ?>/jquery-2.2.2.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/transitions.js"></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> data-spy="scroll" data-offset="0" data-target="#navbar-main">



<!-- ==== MENU ==== -->
  <nav>
    <ul>


            <li>
                <div class="iconname"><a href="#home">Home</a></div>
                <div class="iconn"><a href="#home"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-home.png" id="home-icon" /></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#about"> About Me</a></div>
                <div class="iconn"><a href="#about"> <img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-about.png" id="about-icon" /></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#portfolio"> Portfolio</a></div>
                <div class="iconn"><a href="#portfolio"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-portfolio.png" id="portfolio-icon"/></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#blog"> Blog</a></div>
                <div class="iconn"><a href="#blog"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-blog.png" id="blog-icon" /></a></div>
            </li>
            <li>
                <div class="iconname"><a href="#contact"> Contact</a></div>
                <div class="iconn"><a href="#contact"><img src="<?php bloginfo('template_url'); ?>/assets/img/Icons/menu-contact.png" id="contact-icon" /></a></div>
            </li>
    </ul>
    </nav>   
      
    <!-- ==== /MENU ==== -->
  <!-- ==== HEADER ==== -->
  <section class="web">
  <section id="home">
    <header class="main_header">
        <h1><span ></span></h1>
        <p>
            <?php bloginfo('description'); ?>
        </p>
      </header>     

  </section>

