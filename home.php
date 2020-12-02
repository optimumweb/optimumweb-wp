<?php
get_header(); ?>
<section class="hero">
    <div class="hero-cover" style="background-image: url('<?php echo get_featured_image_url(); ?>');">
        <div class="hero-overlay">
            <div class="hero-padding">
                <div class="<?php wpbp_container_class(); ?>">
                    <div class="grid_12">
                        <h1 class="page-title">
                            <?php _e( 'Latest Posts', 'wpbp' ); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wpbp_content_before(); ?>
<section id="content">
    <?php wpbp_main_before(); ?>
    <section id="main" role="main">
        <?php wpbp_main_inside_before(); ?>
        <div class="<?php wpbp_container_class(); ?>">
            <div class="<?php wpbp_container_class(); ?>">
                <div class="grid_12">
                    <div class="block_grid by_3">
                        <?php wpbp_loop_before(); ?>
                        <?php get_template_part( 'loop', 'home' ); ?>
                        <?php wpbp_loop_after(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php wpbp_main_inside_after(); ?>
    </section>
    <?php wpbp_main_after(); ?>
</section>
<?php wpbp_content_after(); ?>
<?php get_footer(); ?>
