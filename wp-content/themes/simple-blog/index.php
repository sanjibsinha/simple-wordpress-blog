<?php get_header(); ?>
<!-- Main Content -->

<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<?php


if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'content', get_post_format() );
  
endwhile; endif;

?>
</div>
</div>
</div>

<?php //get_sidebar(); ?>

<?php get_footer();
