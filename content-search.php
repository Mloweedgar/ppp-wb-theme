<div class="col-6 news_section">
    <img src="<?php if (has_post_thumbnail()) {
        the_post_thumbnail_url();
    } ?>" alt="">
    <p class="news-date"><?php echo get_the_date(); ?></p>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
</div>