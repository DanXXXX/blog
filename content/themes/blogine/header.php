
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
  <meta charset=" <?php bloginfo('charset'); ?> ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description') ?></title>
  <link rel="stylesheet" href="<?php  echo get_theme_file_uri('public/css/style.css'); ?>" />
 
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">

      <div class="header_content">

        <div class="logo">
          <a href="<?php bloginfo('url'); ?>" class="logo_text"><?php bloginfo('name'); ?></a>
          <div class="logo_baseline"><?php bloginfo('description'); ?></div>
        </div>
      </div>

        <nav class="main-nav">
          <ul>
            <li><a href="#">Catégories</a></li>
            <li><a href="#">A propos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>

        <div class="header_tools">

          <div class="search">
            <form action="" class="search_form">
              <label for="search" class="search_form_label">
                  <i class="fa fa-search" aria-hidden="true"></i>
              </label>
              <input type="text"name="search" id="search" class="search_input" placeholder="Rechercher">
            </form>
          </div>
          <a href="#" class="action-button">s'abonner</a>

        </div>

    </header>

    <main class="main">

    <?php
    
    // Vérifie l'URL de la home du site
    if ( is_front_page() ) {
      echo 'je suis sur la homepage statique !';
    // Vérifie le type de la homepage (les derniers articles /page statique)
    } if ( is_home() ) {
      echo 'je suis sur la homepage Blog !';
    } elseif (is_single()) {
      echo 'je suis sur un article';
    }

    ?>