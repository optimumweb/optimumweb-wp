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
        <?php wpbp_loop_before(); ?>
        <?php the_content(); ?>
        <?php wpbp_loop_after(); ?>
        <?php wpbp_main_inside_after(); ?>
    </section>
    <?php wpbp_main_after(); ?>
</section>
<?php wpbp_content_after(); ?>
<?php get_footer(); ?>


