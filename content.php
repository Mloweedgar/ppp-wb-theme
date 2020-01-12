<?php get_template_part('includes/slideshow', get_post_format()); ?>
<section class="layout-content home-latest">
    <div class="col-8">
        <div class="latest-projects bg-blue">
            <h3>Latest Projects</h3>
        </div>
        <div class="layout-content project-content">
            <?php
            $args = array(
                'post_type' => 'projects',
                'orderby' => 'menu_order',
                'posts_per_page' => 2,
                'order' => 'ASC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-projects', get_post_format());
            endwhile; ?>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-announcement bg-blue">
            <h3>Announcements</h3>
        </div>
        <div class="announcement">
            <?php
            $args = array(
                'post_type' => 'announcements',
                'orderby' => 'menu_order',
                'posts_per_page' => 4,
                'order' => 'ASC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-announcements', get_post_format());
            endwhile; ?>
        </div>
    </div>
</section>
<section class="layout-content home-latest">
    <div class="col-8 ">
        <div class="latest-news bg-blue">
            <h3>Latest News</h3>
        </div>
        <div class="layout-content news">
            <?php
            $args = array(
                'post_type' => 'news',
                'orderby' => 'menu_order',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-news', get_post_format());
            endwhile; ?>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-events bg-blue">
            <h3>Events</h3>
        </div>
        <div class="events">
            <?php
            $args = array(
                'post_type' => 'events',
                'orderby' => 'menu_order',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );
            $custom_query = new WP_Query($args);
            while ($custom_query->have_posts()) : $custom_query->the_post();
                get_template_part('content-events', get_post_format());
            endwhile; ?>
        </div>
    </div>
</section>
<section class="layout-content home-docs">
    <div class="col-4">
        <div class="latest-docs bg-blue">
            <h3>STANDARD BIDDING DOCS</h3>
        </div>
        <div class="docs">
            <div>
                <h4>Standard for Leasing of Public Assets</h4>
                <hr>
            </div>
            <div>
                <h4>STD for Procurement of Non-Consultant Services</h4>
                <hr>
            </div>
            <div>
                <h4>STD for Procurement of Non-Consultant Services</h4>
                <hr>
            </div>
            <div>
                <h4>Standard Prequalification Document</h4>
                <hr>
            </div>
            <div>
                <h4>Standard Invitation for Quotations</h4>
                <hr>
            </div>
            <div>
                <h4>Works</h4>
                <hr>
            </div>
            <div>
                <h4>Supply and Installation</h4>
                <hr>
            </div>
            <div>
                <h4>General Goods</h4>
                <hr>
            </div>
            <div>
                <h4>SBD for Disposal of Public Assets by Tender</h4>
                <hr>
            </div>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-docs bg-blue">
            <h3>GUIDELINES</h3>
        </div>
        <div class="docs">
            <div>
                <h4>Procurement of Conference Services from Public Bodies</h4>
                <hr>
            </div>
            <div>
                <h4>Procurement of Capital Equipment, Materials, Products and Related</h4>
                <hr>
            </div>
            <div>
                <h4>Services for Development of Industries</h4>
                <hr>
            </div>
            <div>
                <h4>Determination of Major and Minor Deviation</h4>
                <hr>
            </div>
            <div>
                <h4>Participation of Public Bodies in Public Procurement</h4>
                <hr>
            </div>
            <div>
                <h4>Participation of Special Groups in Public Procurement</h4>
                <hr>
            </div>
            <div>
                <h4>Advertisement and disclosure forms</h4>
                <hr>
            </div>
            <div>
                <h4>Circulars to Procuring Entities</h4>
                <hr>
            </div>
            <div>
                <h4>Evaluation of Tenders & Proposal</h4>
                <hr>
            </div>
        </div>
    </div>
    <div class="col-4 ">
        <div class="latest-docs bg-blue">
            <h3>RELATED LINKS</h3>
        </div>
        <div class="docs">
            <div>
                <h4><a href="https://www.mof.go.tz/">Ministry of Finance and Planning</a></h4>
                <hr>
            </div>
            <div>
                <h4><a href="https://www.tra.go.tz/">Tanzania Revenue Authority</a></h4>
                <hr>
            </div>
            <div>
                <h4><a href="https://www.bot.go.tz/">Bank of Tanzania</a></h4>
                <hr>
            </div>
            <div>
                <h4><a href="https://www.bot.go.tz/">Tanzania Private Sector Association</a></h4>
                <hr>
            </div>
            <div>
                <h4><a href="https://www.worldbank.org/">The World Bank</a></h4>
                <hr>
            </div>
            <div>
                <h4>
                    <a href="https://www.gov.uk/government/organisations/department-for-international-development">DfID</a>
                </h4>
                <hr>
            </div>
            <div>
                <h4><a href="https://www.uncdf.org/">United Nations Capital Development Fund</a></h4>
                <hr>
            </div>
            <div>
                <h4><a href="http://www.crb.go.tz/">Contractors Registration Board</a></h4>
                <hr>
            </div>
            <div>
                <h4><a href="https://www.aqrb.go.tz/firm.php">Architects and Quantity Surveyors Registration Board</a>
                </h4>
                <hr>
            </div>
        </div>
    </div>
</section>