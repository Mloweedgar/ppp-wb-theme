<?php get_header(); ?>
<div class="site-container">
<?php echo do_shortcode(get_option('sitemap')); ?>
</div>
<?php get_footer(); ?>