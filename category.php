<?php
  get_header();
  if( have_posts() ) {
  $categories = get_the_category();
  $category = $categories[0];
?>

<main>
  <section>
    <h1 class='section-header max-text-width'><?php echo $category->name; ?></h1>
    <p class='centered max-text-width'><?php echo $category->description; ?></p>
    <ul class="featured-items">
  <?php if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      if( has_post_thumbnail() ) {
        $postImageUrl =  get_the_post_thumbnail_url();
        $alt = get_post_meta ( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
      } else {
        $postImageUrl =  get_template_directory_uri().'/images/default-background-1.jpg';
        $alt = '';
      }?>
      <li class='card'>
      <a href="<?php echo get_permalink(); ?>">
        <figure>
          <img src="<?php echo $postImageUrl; ?>" alt="<?php echo $alt; ?>" >

        </figure>
        <h2 class="title"><?php the_title(); ?></h2>
      </a>
    <?php } ?>
    </li>
  <?php } ?>
    </ul>
  </section>
</main>

<?php } else { ?>
  <main>
  </main>
<?php }
get_footer();
