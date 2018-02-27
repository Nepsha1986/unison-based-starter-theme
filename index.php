<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            if (have_posts()) :

                if (is_home() && !is_front_page()) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="container">
                    <div class="posts-list-block">
                        <ul class="posts-list">
                            <?php while (have_posts()) : the_post(); ?>
                                <li class="list-item">
                                    <?php if(has_post_thumbnail()) {
                                        unison_based_theme_post_thumbnail();
                                    } else { ?>
                                        <h2>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                    <?php } ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>

                    <?php the_posts_navigation(); ?>
                </div>

            <?php else :
                get_template_part('template-parts/content', 'none');
            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
