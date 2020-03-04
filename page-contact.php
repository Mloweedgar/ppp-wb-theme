<?php get_header(); ?>
    <section>
        <div class="white-text-color bg-blue contact">
            <h2>Contact us</h2>
            <p>
                We would like to here from you
            </p>
        </div>
        <article class="contact-us">
            <div class="layout-content contact-info">
                <div class="col-4 ">
                    <h3>Call us</h3>
                    <p>+255 736 645 453</p>
                    <p>+255 242 230 546</p>
                </div>
                <div class="col-4">
                    <h3>Visit our offices</h3>
                    <p>P.O.Box 874/1154,</p>
                    <p>Vuga-Zanzibar</p>
                </div>
                <div class="col-4">
                    <h3>Write to us</h3>
                    <p>P.O.Box 874/1154,</p>
                    <p>Vuga-Zanzibar</p>
                    <p>info@pppnode.go.tz</p>
                </div>
            </div>

            <div class="contact-form">
                <h3 id="contact-title">Write us a message</h3>
                <div class="form-field">
                    <?php echo do_shortcode(get_option('contact_us')); ?>
                </div>
                <h3 id="contact-title">Visit us</h3>
                <div>
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d855.4413882671664!2d39.18799732599505!3d-6.166556085094531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52a41a8f300b0510!2sZanzibar%20Planning%20Commission!5e1!3m2!1sen!2stz!4v1567802378049!5m2!1sen!2stz" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

        </article>
        </div>
    </section>
<?php get_footer(); ?>