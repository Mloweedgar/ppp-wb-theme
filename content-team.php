<div class="team-member">
    <img src="<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail_url();
    } ?>" alt="team member" height="180"  width="180">
    <div class="team-member-contents">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div><?php echo get_post_meta(get_the_ID(), 'ppp-team-member-title', true); ?></div>
        <p><?php the_content() ?></p>
    </div>
</div>