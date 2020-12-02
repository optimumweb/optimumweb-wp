<?php get_template_part( 'head' ) ?>
    <?php wpbp_wrap_before() ?>
    <div id="wrap" role="document">
        <?php wpbp_header_before() ?>
        <header id="header">
            <?php wpbp_header_inside_before() ?>
            <div class="<?php wpbp_container_class() ?> fluid">
                <div class="grid_3 mobile-center">
                    <h1 id="site-logo">
                        <a href="<?php echo home_url() ?>" title="<?php bloginfo( 'name' ) ?> - <?php bloginfo( 'description' ) ?>">
                            <img src="<?php echo THEME_URI . '/img/logo-dark.png' ?>" width="400" height="60" alt="<?php bloginfo( 'name' ) ?>">
                        </a>
                    </h1>
                    <a id="menu-burger" href="#">
                        <i class="fal fa-bars"></i>
                    </a>
                </div>
                <div class="grid_6 text-center">
                    <nav id="main-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ) ?>
                    </nav>
                </div>
                <div class="grid_3 text-right mobile-center">
                    <nav id="header-cta-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'header_cta_navigation' ) ) ?>
                    </nav>
                </div>
            </div>
            <?php wpbp_header_inside_after() ?>
        </header>
        <?php wpbp_header_after() ?>
