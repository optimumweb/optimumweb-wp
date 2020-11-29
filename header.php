<?php get_template_part( 'head' ) ?>
    <?php wpbp_wrap_before() ?>
    <div id="wrap" role="document">
        <?php wpbp_header_before() ?>
        <header id="header">
            <?php wpbp_header_inside_before() ?>
            <div class="<?php wpbp_container_class() ?>">
                <div class="grid_3 mobile-center">
                    <div id="site-title">
                        <h1>
                            <a href="<?php echo home_url() ?>/">
                                <?php bloginfo( 'name' ) ?>
                            </a>
                        </h1>
                        <h3>
                            <?php bloginfo( 'description' ) ?>
                        </h3>
                    </div>
                </div>
                <div class="grid_6 text-center">
                    <nav id="main-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ) ?>
                    </nav>
                </div>
                <div class="grid_3 text-right mobile-center">
                    <div id="cta">
                        <?php dynamic_sidebar( 'Header CTA' ) ?>
                    </div>
                </div>
            </div>
            <?php wpbp_header_inside_after() ?>
        </header>
        <?php wpbp_header_after() ?>
        <?php if ( is_front_page() ) : ?>
            <div id="hero">
                <?php dynamic_sidebar( 'Front Page Hero' ) ?>
            </div>
        <?php endif ?>
