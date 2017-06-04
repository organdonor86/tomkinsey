<?php
    /**
    * Template Name: Patios
    */
?>

<?php get_header(); ?>

<!-- PAGE HEADER -->
<section id="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <span class="st-border"></span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /PAGE HEADER -->


<section class="intro">
<div class="container">
	<div class="row">
		<div class="col-md-12">

        <?php the_content(); ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, nothing here!' ); ?></p>
      <?php endif; ?>

		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>
