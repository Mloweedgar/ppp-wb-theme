<?php get_header(); ?>
  <section class="page-intro-section">
            <article class="white-text-color">
                <h1>ABOUT US</h1>
                <p>Ensuring Coordination of PPP projects for efficiency and affordability.
                </p>
            </article>
    </section>
<section class="bg-blue">
<div class="about-content">
    <div class="about-vision">
    <h2>OUR VISION</h2>
    <p>A poverty-free Zanzibar with all the necessary infrastructure and public services perpetually in place, the achievement of which is partially due to well-collaborated public and private sector initiatives.</p>
    </div>
    <div class="about-mission">
    <h2>OUR MISSION</h2>
    <p>To implement a robust and transparent framework for public and private sector collaboration in Zanzibar through a competitive and transparent PPP process.</p>
    </div> 
</section>
<section class="layout-content about-overview">
    <div class="col-8">
   
    <h3>Overview</h3>
            <div class="overview">
                <h4>The PPP Department</h4>
            <p>The PPP Department serves as a coordinating entity for all the Public-Private Partnership projects implemented in Zanzibar. The pivotal role of this unit is to ensure that PPP projects conform with RGoZ objectives, that all proper procedures are followed, and relevant approvals are obtained during development and implementation of each project up through contract signing. The PPP Department is established under the Zanzibar Planning Commission and reports directly to the Executive Secretary.  also serves as the secretariat for the PPP Technical Committee. </p>

            Overarching roles of the PPP Department are:    
            <ul>
                <li>Approval of the PPP processes
                    <p>Serves as a secretariat to the Technical Committee and send recommendations of various PPP processes.</p>
                </li>
                <li>Policy Guidance
                    <p>Ensure that PPP pipeline aligns with RGoZ's (Revolutionary Government of Zanzibar) budget priorities and investment plans and developments.</p>
                </li>
                <Li>
                    Capacity Building
                    <p>Providing technical support to the Implementing Authority by ensuring that appropriate skillset and necessary competencies are available to work across the PPP project cycle.</p>
                </Li>

            </ul>
            <h4>Implementing Authority (IA)</h4>
            <p>
                Means a Public Authority that has entered into a Memorandum of Understanding with a Private partner, as a part of a Public Private Partnership Agreement in accordance with the provisions of the Act (PPP Act No. 8 2015). The IA is responsible for project identification, hiring and management of Pre-Feasibility and Feasibility Study Technical and Transaction Advisors, managing tendering and selection process as well as monitoring execution of project including progress report to the PPP Department. The execution of these function is through Project Management Team headed by the Project Manager, which may be supported by a Technical Advisor.
            </p>

            <h4>PPP Technical Committee</h4>
            <p>
                PPP Technical Committee under the directorship of the Executive Secretary of the Planning commission, has been empowered by the Public Private Partnerships Act of No 8.2015 to provide recommendations on approval for PPP projects above 10 million US Dollars. Comprising of the Principal Secretaries responsible for Infrastructure, Land and Environment, Deputy Attorney General, Executive Director of ZIPA and a Representative from the Ministry of Finance. The function of this Committee is to review and approve PPP Projects documents and provide recommendations to the Principal Secretary of the Ministry of Finance and Planning.
            </p>

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
                printf('<div><h4 style="font-weight: 100"><a href="%1$s">%2$s</a></h4><hr></div>',esc_attr( $bookmark->link_url ), $bookmark->link_name);
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>