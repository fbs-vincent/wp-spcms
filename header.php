<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('title') ?></title>
    <link
      rel="preload"
      as="font"
      href="<?php echo  get_template_directory_uri() . "/font/Poppins-Bold.woff2" ?>"
      crossorigin="anonymous"
    />

    <link
      rel="preload"
      as="font"
      href="<?php echo get_template_directory_uri() . "/font/Poppins-Regular.woff2" ?>"
      crossorigin="anonymous"
    />

    <link
      rel="preload"
      as="font"
      href="<?php echo get_template_directory_uri() . "/font/Poppins-Light.woff2" ?>"
      crossorigin="anonymous"
    />

    <link
      rel="preload"
      as="font"
      href="<?php echo get_template_directory_uri() . "/font/Poppins-SemiBold.woff2" ?>"
      crossorigin="anonymous"
    />

    <link
      rel="preload"
      as="font"
      href="<?php echo  get_template_directory_uri() . "/font/Poppins-ExtraLight.woff2" ?>"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"
    />
    <?php wp_head() ?>
    
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navigation">
          <div class="logo">
            <?php the_custom_logo() ?>
          </div>
          <div class="burger-menu">
            <span></span>
          </div>
          <?php
	        	wp_nav_menu(
	            array(
		        'theme_location' => 'top-menu',
	          )
          );
	?>
        </nav>
      </div>
    </header>