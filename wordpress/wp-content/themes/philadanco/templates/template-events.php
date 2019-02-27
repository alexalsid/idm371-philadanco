
<?php 

/* 

Template Name: Events

*/


get_header(); ?>


   
    <main>
    <div class="event-info-container" id="event-info-container">
        <div class="left"><img alt='' id="events-pic" src='img/events-pic.jpg'></div>
        <div class="right">
            <h1 class="event-h1"><?php the_field('event_title')?></h1>
            <p class="event-p"><?php the_field('event_description')?></p>
                <div class="display_flex spacing_center">
                    <h2 class="event-dates"><span class="event-h2" id="span-day">Friday</span><br>
                    Nov 16</h2>
                    <h2 class="event-dates hyphen">-</h2>
                    <h2 class="event-dates"><span class="event-h2" id="span-day">Sunday</span><br>
                    Nov 18, 2018</h2>
                    <button class="purple">Tickets</button>
                </div>
                <div class="center-upcoming-events">
                    <h2 class="event-h2"><?php the_field('next_event')?></h2><img alt='' src='<?php the_field('next_event_image')?>'>
                    <h4>Friday April 12 - Sunday April 14, 2019</h4>
                </div>
        </div>
    </div>
   
    <div class="center">
        <h2>Stay up to date on all of Philadanco's events:</h2>
        <h2 class="bold">Join our mailing list</h2>
        <div class="display_flex sign-up">
            <input class="events-form" type="text"> <button class="yellow">sign up</button>
        </div>
    </div>

    <h2>Philadanco in the News</h2>
    <div class="articles">
        <div class="article">
            <img alt='' src='https://placehold.it/400x250'>
            <div class="rectangle_background overlap text_margin">
                <h2 class="bold">Philadanco's Joan Myers Brown: Frontierswoman of Modern Dance</h2>
<!--                 <h3 class="inline">October 23, 2017</h3>
 -->            <h3>September 18, 2018</h3>            
                <p><a href="">Read More</a></p>
            </div>
        </div>
    </div>

    <div class="display_grid">
        <div class="article half">
            <img alt='' src='https://placehold.it/400x250'>
            <div class="rectangle_background overlap">
                <h2 class="bold">School of Dance Arts 2018 Brochure Available</h2>
                <h3>August 12, 2018</h3>
                <p><a href="">Read More</a></p>
            </div>
        </div>

        <div class="article half">
            <img alt='' src='https://placehold.it/400x250'>
            <div class="rectangle_background overlap">
                <h2 class="bold">7 Days of Things to do in Philadelphia From Nov. 11 to 17</h2>
                <h3>August 12, 2018</h3>
                <p><a href="">Read More</a></p>
            </div>
        </div>
    </div>
</main>



<?php get_footer();?>