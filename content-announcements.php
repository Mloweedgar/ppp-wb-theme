<div class="content-announcement">
    <span id="date"><?php echo get_the_date(); ?></span>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php
        // now minus one day in seconds
        if ( ( time() - 86400 ) < get_the_date( 'U' ) )
        {
            $imageUrl = get_bloginfo('template_directory') . '/images/new.gif';
            echo "<img src='{$imageUrl}' alt='new' class='new'/>";
        }


        ?></h4>
    <hr>
</div>