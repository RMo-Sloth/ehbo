<!DOCTYPE html>
<?php
  switch ( true ) {
    case is_front_page():
      $metaDescription = get_bloginfo('description');
      break;
    case is_singular():
      $metaDescription = get_the_excerpt();
      break;

    default:
      $metaDescription = '';
  }
?>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <?php wp_head(); ?>
  <meta name="description" content="<?php echo $metaDescription; ?>" />
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
