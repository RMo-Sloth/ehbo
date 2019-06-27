<?php

class FeaturedItems {
  private $stickyPostIndexes;

  function __construct() {
    $this->stickyPostIndexes = get_option( 'sticky_posts' );
  }
  function compile() {
    $this->openList();
    $this->addPosts();
    $this->closeList();
  }
  private function openList() {
    echo '<ul class=\'featured-items\'>';
  }
  private function closeList() {
    echo '</ul>';
  }
  private function addPosts() {
    while( count($this->stickyPostIndexes) > 0 ) {
      $this->addPost();
    }
  }
  private function addPost() {
    $query = new WP_Query( 'p=' . array_shift($this->stickyPostIndexes) );
    $post = $query->post;
    $postImageUrl = get_template_directory_uri().'/images/default-background-1.jpg';
    if( get_the_post_thumbnail_url( $post ) )
      $postImageUrl =  get_the_post_thumbnail_url( $post );

    echo "<li class='card'><a href='".get_permalink( $post )."'>";

    echo '<figure>';
    echo '<img src="'.$postImageUrl.'" />';
    echo '</figure>';

    echo "<h2 class='title'>$post->post_title</h2>";

    echo '</a></li>';
  }
}
