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
    </article>
        </div>
    </section>
<?php get_footer(); ?>