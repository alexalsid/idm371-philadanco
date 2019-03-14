
<?php 

/*
Template Name: meet the team
*/


get_header(); 

get_template_part('hero');

?>

<main>
        <div class="top">
           <div class="jmb card">
                <div>
                    <div>
               <h2>Joan Meyers Brown</h2>
               <h3>Founder</h3>
               </div>
            </div>
            
              <img src="<?php the_field('joan_photo')?>" alt=''/>

            </div>

    
                <div class="dl card">
                    <div>
                        <div>
                            <h2>Donald Lunsford</h2>
                            <h3>D/2 Director</h3>
                        </div>
                    </div>
            
                    <img src='<?php the_field('donald_photo')?>' alt='' />
            
                </div>


        </div>
        
        <div class="dancers">
        
            <?php

// check if the repeater field has rows of data
if( have_rows('dancers') ):

 	// loop through the rows of data
    while ( have_rows('dancers') ) : the_row(); ?>

     <div class="card-cont">
                <button class="card-scroll-btn"></button>
            <div class="bio-card card">
        
                
                <h2><?php the_sub_field('dancer_name')?></h2>
                <h4><?php the_sub_field('dancer_from')?></h4>
                <div class="dancer-img"><img src='<?php the_sub_field('dancer_photo')?>' alt=''/></div>
                
                <div class="bio-cont">
                    <p><?php the_sub_field('dancer_bio')?></p>
                </div>

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