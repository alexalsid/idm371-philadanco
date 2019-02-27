<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

 <header>
        <img src='https://placehold.it/400x250' alt=''/>
        <h1><?php the_title(); ?></h1>

    </header>

    <main>
        <?php if (have_posts()): ?> 
                <?php // show pg contents?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile;?>
                <?php wp_reset_query();?>
            <?php else: ?>
              <h2>Sorry, Content Not Found</h2>
            <?php endif; ?>

    </main>
   </body>


<?php
get_footer();