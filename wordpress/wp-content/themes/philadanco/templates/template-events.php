
<?php 

/* 

Template Name: Events

*/


get_header(); ?>


   <main>
        <div class="event-info-container">
            <h1 class="event-h1"><?php the_field('next_event')?></h1>
                <p class="event-p">
                <?php the_field('next_event_description')?>
                </p>
        </div>
         <div class="display_flex spacing">
            <h5><?php the_field('from_day')?></h5>
            <h5><?php the_field('to_day')?></h5>
        </div>
         <div class="display_flex spacing_center">
            <h2><?php the_field('dates')?></h2>
            
        </div>
        <div class="center">
            <a href="<?php the_field('tickets_link')?>"><button class="purple">Tickets</button></a>
                <div class="center-upcoming-events">
                    <h2>Up Next: <?php the_field('second_event') ?></h2>
                        <img src="<?php the_field('second_event_image')?>" alt='' />
                    <h4><?php the_field('second_event_dates')?></h4>
                </div>
            <!-- <div></div> dots -->
            <h2>Stay up to date on all of Philadanco's events:</h2>
            <h2 class="bold">Join our mailing list</h2>
            <div class="display_flex sign-up">
                <input class="events-form" type="text">
                <button class="yellow">sign up</button>
            </div>
        </div>
        <h2>Philadanco in the News</h2>
        <div class="articles">
            <div class="article">
                <img src='https://placehold.it/400x250' alt='' />
                <div class="rectangle_background overlap text_margin">
                    <h2 class="bold">Article Title</h2>
                        <h3 class="inline">October 23, 2017</h3>
                        <p class="read inline"><a href="">Read More</a></p>
                </div>
            </div>
        </div>
        <div class="display_grid">
            <div class="article half">
                <img src='https://placehold.it/400x250' alt='' />
                <div class="rectangle_background overlap">
                    <h2 class="bold">Article Title</h2>
                    <h3>Date</h3>
                    <p><a href="">Read More</a></p>
                </div>
            </div>
             <div class="article half">
                <img src='https://placehold.it/400x250' alt='' />
                <div class="rectangle_background overlap">
                    <h2 class="bold">Article Title</h2>
                    <h3>Date</h3>
                    <p><a href="">Read More</a></p>
                </div>
            </div>
        </div>
    </main>



<?php get_footer();?>