<?php get_header(); ?>

<section class="contact">
    <div class="uk-container">
        <div class="uk-child-width-expand@s" uk-grid>
            <div class="contact-form">
                <?php the_content(); ?>
            </div>

            <div class="contact-details">
                <address>
                    <h4><i class="fa-solid fa-location-dot"></i> Location</h4>
                    <p>Eku House: 2nd Floor, Enerhen Junction, Effurun - Warri, Delta State. Nigeria.</p>
                </address>
                <hr>
                <summary>
                    <h4><i class="fa-solid fa-mobile-screen-button"></i> Phone Numbers</h4>
                    <p>+234 803 333 3333</p>
                    <p>+234 803 333 3333</p>
                </summary>
                <hr>
                <summary>
                    <h4><i class="fa-solid fa-envelope"></i> Email Address</h4>
                    <p>
                        <a href="mailto:info@ponossupportservices.com">info@ponossupportservices.com</a>
                    </p>
                </summary>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>