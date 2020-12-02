<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php wpbp_post_before(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php wpbp_post_inside_before(); ?>
        <section class="hero">
            <div class="hero-cover" style="background-image: url('<?php echo get_featured_image_url(); ?>');">
                <div class="hero-overlay is-grey-dark">
                    <div class="hero-padding">
                        <div class="<?php wpbp_container_class(); ?>">
                            <div class="grid_12">
                                <h1 class="post-title">
                                    <?php the_title(); ?>
                                </h1>
                                <div class="post-meta">
                                    <time class="post-date updated" datetime="<?php the_time( 'c' ); ?>">
                                        <?php printf( __( 'Posted on %s', 'wpbp' ), get_the_time( __( 'l, F jS, Y', 'wpbp' ) ) ); ?>
                                    </time>
                                    <span class="post-author byline author vcard">
                                        <?php _e( 'by', 'wpbp' ); ?> <?php the_author_posts_link(); ?>
                                    </span>
                                </div>
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
                    <div class="grid_2"></div>
                    <div class="grid_8">
                        <?php wpbp_loop_before(); ?>
                        <div class="post-content">
                            <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search ?>
                                <?php the_excerpt(); ?>
                            <?php else : ?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                        </div>
                        <footer class="post-footer">
                            <p class="post-tags"><?php the_tags(); ?></p>
                        </footer>
                        <?php wpbp_loop_after(); ?>
                    </div>
                    <div class="grid_2"></div>
                </div>
                <?php wpbp_main_inside_after(); ?>
            </section>
            <?php wpbp_main_after(); ?>
        </section>
        <?php wpbp_content_after(); ?>
    </article>
    <?php wpbp_post_after(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
