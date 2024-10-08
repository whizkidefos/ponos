<?php get_header(); ?>

<?php get_template_part('/components/innerpage-banner'); ?>

<section class="page-details">
    <div class="uk-container uk-container-small">
        <figure>
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large', array('class' => 'custom-featured-image'));
                }
            ?>

        </figure>
        <article>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </article>
    </div>
</section>

<?php get_template_part('/components/cta'); ?>


<?php get_footer(); ?>