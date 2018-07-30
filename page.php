<?php get_header(); ?>
    <main id="main" class="site-main">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="container pt-5 pb-5">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
    </main><!-- #main -->
<?php
get_footer();
