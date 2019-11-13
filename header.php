<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <?php
    if( is_home() === true ) {
      $title = '';
    } else if( is_category() && have_posts() ) {
      $categories = get_the_category();
      $title = $categories[0]->name;
    } else {
      $title = get_the_title();
    }
    $title = $title ? $title.' - ' : '' ;

    wp_head();
  ?>
  <title><?php echo $title; ?>EHBO Berkenwoude</title>
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
