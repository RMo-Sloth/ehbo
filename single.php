<?php
  get_header();
?>

<main>
  <article>
  <?php if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      
      if ( has_post_thumbnail() === true )
        echo "<div class='intro-image' style='background-image: url(".get_the_post_thumbnail_url().")'></div>";

      the_title( '<h1>', '</h1>' );

      the_content();
    }
  }?>
</article>
</main>

<?php get_footer(); ?>
