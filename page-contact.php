<?php get_header(); ?>

<section class="contact">
    <div class="uk-container">
        <header class="contact-header">
            <h2>Contact Us</h2>
            <p>
                Have a question or need assistance? We're here to help!  You can reach us using the contact details below, or simply fill out the form and we'll get back to you as soon as possible.
            </p>
        </header>
        <div class="uk-child-width-1-2@m" uk-grid>
            <div class="contact-details">
                <address>
                    <h4><i class="fa-solid fa-location-dot"></i> Location</h4>
                    <p>Eku House: 2nd Floor, Enerhen Junction, Effurun - Warri, Delta State. Nigeria.</p>
                </address>
                <hr>
                <summary>
                    <h4><i class="fa-solid fa-mobile-screen-button"></i> Phone Numbers</h4>
                    <p>+2347031946996</p>
                    <p>+2348023211005</p>
                </summary>
                <hr>
                <summary>
                    <h4><i class="fa-solid fa-envelope"></i> Email Address</h4>
                    <p>
                        <a href="mailto:info@ponossupportservices.com">info@ponossupportservices.com</a>
                    </p>
                </summary>
            </div>
            <div class="contact-form">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15884.49211283649!2d5.7806209!3d5.5487726!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041ad650483218b%3A0x400ce511da182bde!2sPonos%20Support%20Services%20Ltd.!5e0!3m2!1sen!2suk!4v1729066904085!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>