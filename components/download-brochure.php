<section class="brochure">
    <div class="uk-container">
        <div class="brochure-wrapper">
            <p>
                <strong>PONOS</strong> is a fully integrated engineering and construction firm with a remarkable track record of successful projects. The company is known for its expertise in construction works and offers top-tier project management services across the engineering spectrum.
            </p>
            <div class="brochure-cta">
            <?php if ( $ponos_brochure_file_link = get_field( 'ponos_brochure_file_link' ) ) : ?>
                <a href="<?php echo esc_html( $ponos_brochure_file_link ); ?>" target="_blank" class="ponos-cta">
                    <i class="fa-solid fa-download"></i>Download Brochure
                </a>
            <?php else : ?>
                <a href="<?php echo get_template_directory_uri() . "/media/PONOS-NEW-BRONCHOR.pdf" ?>" target="_blank" class="ponos-cta">
                    <i class="fa-solid fa-download"></i>Download Brochure
                </a>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>