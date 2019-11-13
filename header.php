<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?> >
    <header class='closed'>
      <i class="fas fa-bars toggle-icons"></i>
    <?php
		wp_nav_menu( array(
			'theme_location' => 'main-menu',
			'container'			 => 'nav'
		) );
		?>

    </header>
<?php
