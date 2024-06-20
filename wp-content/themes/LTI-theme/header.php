<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <header class="header" id="header">
  <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo esc_url(get_theme_mod('mytheme_logo')); ?>" alt="<?php bloginfo('name'); ?>" height="80"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    
    <?php wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'menu'
    )); ?>
      <!--<li><a href="#about">About</a></li>
      <li><a href="#offerings">Offerings</a></li>
      <li><a href="#upgrade">Upgrade</a></li>
      <li><a href="#">Contact</a></li>-->
   
  </header>