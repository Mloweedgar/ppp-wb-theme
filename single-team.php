<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-team-member">
        <img src="<?php if (has_post_thumbnail()) {
            the_post_thumbnail_url();
        } ?>" alt="team member" height="300" width="300">
        <div class="single-team-member-contents">
            <h4><?php echo get_post_meta(get_the_ID(), 'ppp-team-member-name', true); ?></h4>
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <div>
        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
