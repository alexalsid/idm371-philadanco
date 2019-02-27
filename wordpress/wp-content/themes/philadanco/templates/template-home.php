<?php 

/*
Template Name: homepage
*/


get_header(); ?>

    <main class = "frontPage">

        <h1><?php the_field('event_title')?></h1>
        <h3 style ="color: #470078"><?php the_field('event_date')?></h3>
        <div class="tickets">
            <img  src="dist/img/tickets.svg" alt="tickets">
        </div>

        <div>
            <h4>Stay Updated on All Philadanco Events</h4>
            <form class = "subForm">
                <input type="text" placeholder="janedoe@example.com">
                <button class="purple">Go</button>
            </form>
        </div>

        <div class = "section">
            <div class="imageCircle">
                <img src="<?php the_field('section_2_image')?>">
            </div>
            <div class="sectionInfo">
                <h1><?php the_field('section_heading')?></h1>
                <p><?php the_field('section_content')?></p>
            </div>
        </div>
        <div class = "section">
            <div class="sectionInfo">
                <h1><?php the_field('section_2_heading')?></h1>
                <p><?php the_field('section_2_content')?></p>
            </div>
            <div class="imageCircle">
                <img src="<?php the_field('section_2_image')?>">
            </div>
        </div>
                

        </div>	

    </main>




<?php get_footer();?>