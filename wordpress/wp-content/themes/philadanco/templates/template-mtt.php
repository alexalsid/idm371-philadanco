
<?php 

/*
Template Name: meet the team
*/


get_header(); ?>

<main>
        <div class="top">
            <div class="jmb card">
               <h2>Joan Meyers Brown</h2>
               <h3>Founder</h3>
            
              <img src='<?php the_field('joan_photo')?>' alt=''/>

            </div>
            <div class="dl card">
                <h2>Donald Lunsford</h2>
                <h3>Director of D/2 Apprentice Company</h3>
                <p></p>
                <img src='<?php the_field('donald_photo')?>' alt='' />

            </div>

        </div>
        <div class="dancers">
        
            <?php

// check if the repeater field has rows of data
if( have_rows('dancers') ):

 	// loop through the rows of data
    while ( have_rows('dancers') ) : the_row(); ?>

    <div class="bio-card card">
                <h2>"<?php the_sub_field('dancer_name'); ?>"</h2>
                <h4>"<?php the_sub_field('dancer_home'); ?>"</h4>
               <div> <img src="<?php the_sub_field('dancer_image'); ?>" alt='' /></div>
                <button class="card-scroll-btn"></button>
    
            </div>

        </div>

    <?php endwhile; ?>

<?php else : ?>

    

<?php endif; ?>

        
        <div class="bod card">
<?php
        // check if the repeater field has rows of data
if( have_rows('dancers') ):

 	// loop through the rows of data
    while ( have_rows('dancers') ) : the_row(); ?>

            <div class="director-info">
                <h3><?php the_sub_field('bod_name'); ?></h3>
                <h4><?php the_sub_field('bod_role'); ?></h4>
                <h5><?php the_sub_field('bod_company'); ?></h5>
            </div>


    <?php endwhile; ?>

<?php else : ?>

    // no rows found

<?php endif; ?>

        </div>

    </main>


<?php get_footer();?>