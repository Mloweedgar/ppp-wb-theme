<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://developer.wordpress.org/themes/basics/template-hierarchy/}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<section class="no-results not-found">
    <div class="bluish-text-color">
        <h2 id="news"><?php _e( 'Nothing Found' ); ?></h2>
    </div>

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
