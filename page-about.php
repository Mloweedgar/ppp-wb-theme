<?php get_header(); ?>
  <section class="page-intro-section">
            <article class="white-text-color">
                <h1>Who we are</h1>
                <p>Promoting partnerships between the government, private sector
                 and development partners in order to foster efficient and quality 
                 delivery of social goods and services
                </p>
            </article>
    </section>
<section class="bg-blue">
<div class="about-content">
    <div class="about-vision">
    <h2>OUR VISION</h2>
    <p>Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services</p>
    </div>
    <div class="about-mission">
    <h2>OUR MISSION</h2>
    <p>Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services</p>
    </div> 
</section>
<section class="layout-content about-overview">
    <div class="col-8">
            <h3>Overview</h3>
            <p>Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services.</p>
            <div class="overview">
                <h4>Providing financial services to private sector through governments</h4>
                <p>Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services.</p>
            </div>
            <div class="overview">
                 <h4>Promoting knowledge sharing through private sector</h4>
                <p>Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services.</p>
                <p>Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services. Promoting partnerships between the government, private sector and development partners in order to foster efficient and quality delivery of social goods and services.</p>
            </div>
    </div>
    <div class="col-4 ">
        <div class="related-link">
            <h3>RELATED LINKS</h3>
        </div>
        <div class="links">
            <?php
            $bookmarks = get_bookmarks( array(
                'orderby'        => 'name',
                'order'          => 'ASC',
                'category_name'  => 'RELATED LINKS'
            ) );

            // Loop through each bookmark and print formatted output
            foreach ( $bookmarks as $bookmark ) {
                printf('<div><h4><a href="%1$s">%2$s</a></h4><hr></div>',esc_attr( $bookmark->link_url ), $bookmark->link_name);
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>