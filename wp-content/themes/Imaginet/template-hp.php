<?php
/**
 * Template Name: HP Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page-hp'); ?>
<?php endwhile; ?>
