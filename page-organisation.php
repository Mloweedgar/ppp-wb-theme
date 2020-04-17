<?php get_header(); ?>
<div class="site-container">
    <section class="layout-content organization">
        <div class="col-8">
           <img src="<?php echo get_bloginfo('template_directory'); ?>/images/organisation-structure.gif">
        </div>
        <div class="col-4">
            <div class="related-link">
                <?php get_template_part( 'includes/related-links' , get_post_format()); ?>
            </div>
            
        </div>
    </section>
</div>
<?php get_footer(); ?>