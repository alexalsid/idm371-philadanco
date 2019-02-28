
<?php 

/*
Template Name: education
*/

get_header(); 

get_template_part('hero')


?>





<main>
   <section class="links">
      <h3 style="text-align: center; font-weight: bold;"><?php the_field('select_course')?></h3>
      <img src="<?php echo get_template_directory_uri() . '/dist/img/four.jpg'?>" width="400" alt="">
      <div class="course-links-container">
         <h4 class="course-links"><a href="#instruction"><?php the_field('course_links_1')?></a></h4>
         <h4 class="course-links"><a href="#arts"><?php the_field('course_links_2')?></a></h4>
         <h4 class="course-links"><a href="#summer"><?php the_field('course_links_3')?></a></h4>
         <h4 class="course-links"><a href="psda.html"><?php the_field('course_links_4')?></a></h4>
         <h4 class="course-links"><a href="#d2"><?php the_field('course_links_5')?></a></h4>
         <h4 class="course-links"><a href="#d3"><?php the_field('course_links_6')?></a></h4>
      </div>
   </section>

   <section class="intro">
      <p><?php the_field('education_intro')?></p>
   </section>

   <div id="swirl-container">
      <img src="<?php echo get_template_directory_uri() . '/dist/img/swirl.png'?>" alt="swirl">
   </div>

   <section class="classes">
      <div class="classes-container">
         <h3 id="instruction">Instruction and Training Program</h3>
         <img src="<?php echo get_template_directory_uri() . '/dist/img/education-img.jpg'?>" alt="placeholder" style="float: right;">
         <p class="class-desc"><?php the_field('instruction_paragraph')?></p>
      </div>

      <div class="classes-container">
         <img src="<?php echo get_template_directory_uri() . '/dist/img/education-img2.jpg'?>"  alt="placeholder" style="float: left; padding: 0 3rem;">
         <h3 id="arts">Arts in Education and Community</h3>
         <p class="class-desc"><?php the_field('arts_paragraph')?></p>
      </div>

      <div class="classes-container">
         <h3 id="summer">Summer Training Program</h3>
         <img src="<?php echo get_template_directory_uri() . '/dist/img/education-img3.jpg'?>" alt="placeholder" style="float: right;">
         <p class="class-desc"><?php the_field('summer_paragraph')?></p>
      </div>

      <div class="classes-container">
         <img src="<?php echo get_template_directory_uri() . '/dist/img/d2.jpg'?>"  alt="placeholder" style="float: left; padding: 0 3rem;">
         <h3 id="d2">D/2 Apprentice Company</h3>
         <p class="class-desc"><?php the_field('d2_paragraph')?></p>
      </div>

      <div class="classes-container">
         <h3 id="d3">D/3 Youth Ensemble</h3>
         <img src="<?php echo get_template_directory_uri() . '/dist/img/d3.jpg'?>" alt="placeholder" style="float: right;">
         <p class="class-desc"><?php the_field('d3_paragraph')?></p>
      </div>
   </section>
</main>



<?php get_footer();?>