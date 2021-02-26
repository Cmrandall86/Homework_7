<!– BEGIN sidebar.php -->
<?php if(is_active_sidebar( 'my-sidebar' )) : ?>
  <section id="sidebar">
    <?php dynamic_sidebar( 'my-sidebar'); ?>
  </section>
<?php endif; ?>
<!– END sidebar.php -->