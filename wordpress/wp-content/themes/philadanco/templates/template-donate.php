<?php get_header(); /*
Template Name: Donate
*/?>
<body>
    <header>
    	<!-- swap out img -->
        <img src="<?php echo get_template_directory_uri() . '/dist/img/donate.jpg'?>" alt=''/>
        <h1><?php the_title(); ?></h1>


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
            <div id="form">
                <?php 
                    $campaign_id = 80;
                    charitable_get_campaign( $campaign_id )->get_donation_form()->render();  
                ?>
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