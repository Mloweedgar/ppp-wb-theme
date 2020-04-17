<div class="news-card-small">
    <div class="news-box"><img src="<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail_url();
    } ?>" alt="posts image">
    </div>
    <div class="news-card-contents">
        <span class="news-date"><?php echo get_the_date(); ?></span>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <hr>
    </div>
</div>
