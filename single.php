<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package unison-based-theme
 */

get_header(); ?>

    <div id="primary" class="content-area two-column-layout">
        <main id="main" class="site-main">
            <div class="container pt-5 pb-5">
                <?php
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', get_post_type()); ?>

                    <?php the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </main><!-- #main -->

        <?php get_sidebar(); ?>
    </div><!-- #primary -->

<?php
get_footer();
