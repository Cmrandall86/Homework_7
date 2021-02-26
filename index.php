<?php get_header(); ?>
<!– BEGIN middle of index.php -->
<main>
<!-- BEGIN WordPress Loop -->
  <?php
  if(have_posts()):
  	while(have_posts()): 
  	  the_post(); ?>
      <b>Post Title:</b><?php the_title(); ?><br>
	  <b>Post Content:</b><?php  the_content(); ?><br>
	  <?php 
	endwhile; 
  else: ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php 
  endif; ?>
<!-- END WordPress Loop -->
</main>
<!– END middle of index.php -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
