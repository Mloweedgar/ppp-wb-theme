
<div class="col-6">
    <hgroup>
        <h4><?php the_category( ', ' ); ?></h4>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </hgroup>
    <p><?php the_excerpt(); ?></p>
</div>