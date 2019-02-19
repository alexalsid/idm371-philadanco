<?php 

/*
Template Name: homepage
*/


get_header(); ?>


<header id = "videoBackground">
    <video autoplay muted loop id="frontVideo">
        <source src="assets/promo.mp4" type="video/mp4">
    </video>
</header>
<div class= "contain">
    <main class = "frontPage">

        <h1><?php the_field('next_event')?></h1>
        <h3 style ="color: #470078"> <?php the_field('event_date')?></h3>
        <div class="tickets">
            <img  src="dist/img/tickets.svg" alt="tickets" href="<?php the_field('ticket_link')?>">
        </div>

        <div>
            <h4>Stay Updated on All Philadanco Events</h4>
            <form class = "subForm">
                <input type="text" placeholder="janedoe@example.com">
                <button class="purple">Go</button>
            </form>
        </div>

        <div class="info-boxes">

        <?php if( have_rows('links') ): ?>


    <?php while ( have_rows('links') ) : the_row(); ?>


                    <div class="info-box">
                         <div class="info-top">
                              <h3><?php the_sub_field('title'); ?></h3>
                            <h5><?php the_sub_field('subtitle'); ?></h5>
                           
                        </div>
                        <button class="purple">Read More</button>
                        <div class="img-bot">
                            <img src="<?php the_sub_field('image'); ?>">
                        </div>                        
                    </div>

      
        

    <?php endwhile; ?>

<?php else : ?>

  

<?php endif; ?>


        </div>
</main>




<?php get_footer();?>