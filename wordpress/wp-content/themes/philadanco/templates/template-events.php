
<?php 

/* 

Template Name: Events

*/


get_header(); ?>


   
    <main>
    <div class="event-info-container" id="event-info-container">
        <div class="left"><img alt='' id="events-pic" src='<?php echo get_template_directory_uri() . '/dist/img/events-pic.jpg'?>'></div>
        <div class="right">
            <h1 class="event-h1"><?php the_field('event_title')?></h1>
            <p class="event-p"><?php the_field('event_description')?></p>
                <div class="display_flex spacing_center">
                    <h2 class="event-dates"><span class="event-h2" id="span-day"><?php the_field('start_day')?></span><br>
                    <?php the_field('start_date')?></h2>
                    <h2 class="event-dates hyphen">-</h2>
                    <h2 class="event-dates"><span class="event-h2" id="span-day"><?php the_field('end_day')?></span><br>
                    <?php the_field('end_date')?></h2>
                    <button class="purple"><a href="<?php the_field('ticket_link')?>" target="">Tickets</a></button>
                </div>
                <div class="center-upcoming-events">
                    <h2 class="event-h2"><?php the_field('next_event')?></h2>
                    <div class="next-event-image"><img alt='' src='<?php 
                    the_field('next_event_image')
                    ?>'></div>
                    <h4><?php the_field('full_date')?></h4>
                </div>
        </div>
    </div>
   
    <div class="center">
        <div class="mailing-list-events">
        <?php if( function_exists( 'mc4wp_show_form' ) ) {
            mc4wp_show_form( 295 );
        } ?>
        </div>
<!--         <h2>Stay up to date on all of Philadanco's events:</h2>
        <h2 class="bold">Join our mailing list</h2>
        <div class="display_flex sign-up">
            <input class="events-form" type="text"> <button class="yellow">sign up</button>
        </div> -->
    </div>

    <h2>Philadanco in the News</h2>
    <div class="articles">

    <?php if( have_rows('articles') ):

 	// loop through the rows of data
    while ( have_rows('articles') ) : the_row(); ?>



        <div class="article">
            <div class="info">
                <h3><?php the_sub_field('article_title'); ?></h3>
                <h6><?php the_sub_field('date_published'); ?></h6> 
            </div>
            <button class="purple"> <a href="<?php the_sub_field('article_link'); ?>">Read More </a></button>
            <div class="article-image">
                <img src="<?php the_sub_field('article_image'); ?>">
            </div>

        </div>


    <?php endwhile; ?>

<?php endif; ?>
      
    </div>


    </div>
</main>



<?php get_footer();?>
