<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name');?></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- google Font Sora -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Boostrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Style Sheets -->
  <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>
  <?php wp_head(); ?>
    <!-- Nav Starts -->
    <nav>
      <a href="<?php echo home_url(); ?>">
        <img class="logo" src="<?php bloginfo('stylesheet_directory');?>/images/sistema-logo.svg" alt="Sistema Aotearoa" />

      </a>
      <div class="navlinks">
        <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "navbar-nav"]; ?>
        <?php wp_nav_menu($menu_args); ?>
      </div>
    </nav>
