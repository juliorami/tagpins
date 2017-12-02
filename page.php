<?php /* Template Name: Page */ ?>
<?php get_header() ?>

<div class="container">  
  <div class="row">
    <div class="col-xs-12">
<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 
    ?>

    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>

    <?php
  } // end while
} // end if
?>
    </div>
  </div>
</div>

<?php get_footer() ?>