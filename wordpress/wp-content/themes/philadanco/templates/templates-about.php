
<?php 
/*
Template Name: about
*/
get_header(); 

?>
<header class="hero">
    <img src="<?php the_field('hero_image'); ?>" alt="" />
    <h1><?php wp_title();?></h1>
</header>

<main>

<div class="intro"><p><?php the_field('about_intro')?></p></div>

<div class="meet-team">
    <img srcset="<?php the_field('meet_team')?>" alt="">
    <div>
    <h3>Meet Philadanco</h3>
    <p><?php the_field('meet_team_blurb') ?><p>
    <button class="purple"><a href="<?php the_field('meet_team_link')?>">More</a></button>
</div>


</div>

<div class="history">

<blockquote><?php the_field('about_quote') ?></blockquote>
<div class="columns">
<p><?php the_field('history_paragraph') ?></p>
<img src="<?php the_field('about_image')?>" alt="">
</div>



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