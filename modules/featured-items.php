<?php

class FeaturedItems {
  private $stickyPostIndexes;
  private $posts;

  function __construct() {
    $this->stickyPostIndexes = get_option( 'sticky_posts' );
  }
  function compile() {
    $this->createPosts();

    $this->openList();
    $this->addPosts();
    $this->closeList();
  }
  private function createPosts() {
    foreach ( $this->stickyPostIndexes as $stickyPostIndex ) {
      $query = new WP_Query( 'p=' . $stickyPostIndex );
      if( !is_null( $query->post ) ) // wp doesn't return private posts
        $this->posts[] = $query->post;
    }
  }
  private function openList() {
    echo '<ul class=\'featured-items\'>';
  }
  private function closeList() {
    echo '</ul>';
  }
  private function addPosts() {
    $this->addPost();
  }
  private function addPost() {
    foreach ( $this->posts as $post ) {
      if( get_the_post_thumbnail_url( $post ) )
        $postImageUrl =  get_the_post_thumbnail_url( $post );
      else
        $postImageUrl = get_template_directory_uri().'/images/default-background-1.jpg';

      echo "<li class='card'><a href='".get_permalink( $post )."'>";

      echo '<figure>';
      echo '<img src="'.$postImageUrl.'" />';
      echo '</figure>';

      echo "<h2 class='title'>$post->post_title</h2>";

      echo '</a></li>';
    }
  }
}
