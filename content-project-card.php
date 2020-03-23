<section class="project-card">
    <img src="<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail_url();
    } ?>" alt="posts image">
    <div class="contents-section">
        <div class="project-category">SUB-SECTOR:<?php the_category( ', ' ); ?></div>
        <h4 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="project-content"><?php the_excerpt(); ?></p>
    </div>
</section>