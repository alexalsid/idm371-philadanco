
<?php 

/*
Template Name: about
*/

get_header(); 

get_template_part('hero')

?>


<main>

<div class="intro"><p><?php the_field('about_intro')?></p></div>

<div class="meet-team">
    <img src="<?php the_field('meet-team')?>" alt="">
    <div>
    <h3>Meet Philadanco</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic iste ex magnam sequi suscipit incidunt repudiandae, ut officiis<p>
    <button class="purple">More</button>
</div>


</div>

<div class="history">

<blockquote><?php the_field('about_quote') ?></blockquote>
<p><?php the_field('history_paragraph') ?></p>
<img src="<?php the_field('about_image')?>" alt="">
<p><?php the_field('history_paragraph_2') ?></p>



</div>

<div class="contact">
    <h2>
        Contact Us
    </h2>
<form>
    <input type="text" name="firstname" placeholder="Jane">
    <input type="text" name="lastname" placeholder="Doe">
    <input type="text" name="email" placeholder="janedoe@example.com">
    
    <textarea placeholder="Your message..."></textarea>
    <a href="http://alsid.design/idm371-philadanco/wordpress/meet-philadanco"><button class="purple">Send</button></a>
</form>
</div>

</main>



<?php 

wp_footer();

get_footer();

?>