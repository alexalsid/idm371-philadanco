<?php 

/*
Template Name: homepage
*/


get_header(); ?>

<header id = "videoBackground">
    <video autoplay muted loop id="frontVideo">
        <source src="<?php the_field('video') ?>" type="video/mp4">
    </video>
</header>
<div class= "contain">
    <main class = "frontPage">

        <h1><?php the_field('event_title')?></h1>
        <h3 style ="color: #470078"><?php the_field('event_date')?></h3>
        <div class="tickets">
            <button class="purple"><a href="<?php the_field('tickets_link')?>">Tickets</a></button>
        </div>

        <div>
            <h4>Stay Updated on All Philadanco Events</h4>
            <form class = "subForm">
                <input type="text" placeholder="janedoe@example.com">
                <button class="purple">Go</button>
            </form>
        </div>

        <div class="sections">


    <?php if( have_rows('sections') ):

 	// loop through the rows of data
    while ( have_rows('sections') ) : the_row(); ?>

        <div class = "section">
            <h1><?php the_sub_field('section_title'); ?></h1>
            <div class="sec-contain">
                <div class="sec-image">
                    <img src="<?php the_sub_field('section_image');?>">
                </div>
                <div class="sec-info">
                    <p><?php the_sub_field('section_blurb');?></p>
                    <button class="purple"><a href="<?php the_sub_field('section_link');?>">More</a></button>
                </div>
            </div>
        </div>

          <?php endwhile; ?>

<?php endif; ?>

</div>
       
                

        </div>	

    </main>




<?php get_footer();?>