<?php get_header(); ?>
<?php wpbp_content_before(); ?>
<section class="hero">
    <div class="hero-cover" style="background-image: url('<?php echo get_featured_image_url(); ?>');">
        <div class="hero-overlay is-grey-dark">
            <div class="hero-padding">
                <div class="<?php wpbp_container_class(); ?>">
                    <div class="grid_12">
                        <h1 class="page-title">
                            <?php the_title(); ?>
                        </h1>
                        <?php if ( $metadesc = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ) : ?>
                            <p class="lead">
                                <?php echo $metadesc; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <?php wpbp_main_before(); ?>
    <section id="main" role="main">
        <?php wpbp_main_inside_before(); ?>
        <div class="<?php wpbp_container_class(); ?>">
            <div class="grid_12">
                <?php wpbp_loop_before(); ?>
                <?php get_template_part( 'loop', 'single' ); ?>
                <?php wpbp_loop_after(); ?>
            </div>
        </div>
        <?php wpbp_main_inside_after(); ?>
    </section>
    <?php wpbp_main_after(); ?>
</section>
<?php wpbp_content_after(); ?>
<?php get_footer(); ?>