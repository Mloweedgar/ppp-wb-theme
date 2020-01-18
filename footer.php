<footer class="site-footer">
    <section class="main-footer black-background white-text-color">
       <section class="subscription-section">
           <h4>SUBSCRIBE TO NEWSLETTER & UPDATES</h4>
           <form>
               <input type="email"/>
               <input type="submit" value="SUBSCRIBE"/>
           </form>
       </section>
        <section class="quickcontacts">
            <h4> QUICK CONTACTS</h4>
<!--            <address>-->
<!--                Kijitonyama Dar es salaam <br/>-->
<!--                SLP 16 Dar es salaam <br/>-->
<!--                +255 716 645 453 <br/>-->
<!--                +255 789 673 673 <br/>-->
<!--                info@pppnode.go.tz-->
<!--            </address>-->
            <?php echo get_option('physical_address'); ?>
            <br/>
            <?php echo get_option('post_address'); ?>
            <br/>
            <?php echo get_option('phone_number'); ?>
            <br/>
            <?php echo get_option('email_address'); ?>
            <br/>
            <address>

            </address>
        </section>
        <section class="site-visits">
            <h4>SITE VISITORS</h4>
            <div>
                online: 5 <br/>
                Today: 26 <br/>
                Yesterday: 65 <br/>
                Week: 320 <br/>
                Month: 1302 <br/>
                Year: 159663 <br/>
            </div>
        </section>

    </section>
    <section class="footer-navigation dark-grey-background white-text-color">
        <nav>
            <?php
            wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '' ) );
            ?>
        </nav>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>