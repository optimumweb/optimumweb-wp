<?php
get_header(); ?>
<?php wpbp_content_before(); ?>
<section id="content">
    <header class="page-header" style="background-image: url('<?php echo get_featured_image_url(); ?>');">
        <div class="<?php wpbp_container_class(); ?>">
            <div class="grid_12">
                <h1 class="page-title">
                    <?php _e( 'Latest Posts', 'wpbp' ); ?>
                </h1>
            </div>
        </div>
    </header>
    <?php wpbp_main_before(); ?>
    <section id="main" role="main">
        <?php wpbp_main_inside_before(); ?>
        <div class="<?php wpbp_container_class(); ?>">
            <div class="<?php wpbp_container_class(); ?>">
                <div class="grid_12">
                    <ul class="block_grid by_3">
                        <?php wpbp_loop_before(); ?>
                        <li>
                            <?php get_template_part( 'loop', 'home' ); ?>
                        </li>
                        <?php wpbp_loop_after(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php wpbp_main_inside_after(); ?>
    </section>
    <?php wpbp_main_after(); ?>
</section>
<?php wpbp_content_after(); ?>
<?php get_footer(); ?>
