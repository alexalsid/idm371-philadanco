<?php get_header(); /*
Template Name: Donate
*/?>
<body>
    <header>
    	<!-- swap out img -->
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

        <div class="display_flex overlap">
            <div class="info"><p><?php echo get_field('tagline'); ?></p></div>
           <!--  put in charitable form here instead of placeholder form -->
            <div class="form">
                <form>
                    <input type="text" placeholder="Jane">
                    <input type="text" placeholder="Doe">
                    <input type="text" placeholder="janedoe@example.com">
                    <button class="purple">Next Step</button>
                </form>
            </div>
        </div>
        <div class="mission">
            <?php the_content(); ?>
            <h2>Mission</h2>
            <div class="mission_content">
                <p><?php echo get_field('mission'); ?></p>
                <!-- wordpress img here -->
            </div>
        </div>

        <div class="support">
            <h2>Support</h2>
            <div class="support_content">
				<p><?php echo get_field('support'); ?></p> 
					 <!-- wordpress img here -->
            </div>
        </div>

        <div class="supporters">
            <h2>Made possible by:</h2>
            <div class="icons">
  				<?php echo get_field('supporters'); ?>
            </div>
        </div>


    </main>
   </body>







<?php get_footer(); ?>