<?php get_header(); ?>
    <div id="primary" class="content-area two-column-layout">
        <main id="main" class="site-main pt-5 pb-5">
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
                                <li class="list-item mb-5">
                                    <?php the_title('<h2>','</h2>'); ?>
                                    <?php the_excerpt(); ?>
                                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Learn more</a>
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

        <?php get_sidebar(); ?>
    </div><!-- #primary -->

<?php
get_footer();
