<?php 
   /*
   Template Name: Philadelphia School of Dance Arts
   */
   
   get_header(); 
   
   get_template_part('hero')
   
   
   ?>

<main>
  <section class="links">
    <h3 style="text-align: center; font-weight: bold; margin-bottom: 5rem;"><?php the_field('select_course')?></h3>
      <h4 class="age"><a href="#4to6">Ages 4-6</a></h4>
      <h4 class="age"><a href="#7to10">Ages 7-10</a></h4>
      <h4 class="age"><a href="#10to17">Ages 10-17</a></h4>
      <h4 class="age"><a href="#adult">Adult</a></h4>
  </section>

  <section class="intro">      
   <p><?php the_field('psda_intro')?></p>  
      <p>The Philadelphia School of Dance Arts features:
         <li><?php the_field('psda_features1')?></li>
         <li><?php the_field('psda_features2')?></li>
         <li><?php the_field('psda_features3')?></li>
         <li><?php the_field('psda_features4')?></li>
       </p>
    <p><?php the_field('psda_intro_2')?></p>

     <p><?php the_field('psda_intro_3')?></p>
  </section>

  <div class="classes-container">
    <div class="row">
      <div class="text-column">
        <h2 class="age-class" id="4to6">Ages 4-6 years</h2>
        <h4 class="class-type">Pre-Dance/Children's Dance</h4>
          <p class="class-desc">
            <?php the_field('predance_info')?></p>
            <h4 class="class-type">Acrobats/Gymnastics</h4>
              <p class="class-desc"><?php the_field('acrobats_info')?></p>
            <button class="purple">Registration Form</button>
        </div>
      <div class="pic-column">
          <img src="<?php echo get_template_directory_uri() . '/dist/img/psda-img.jpg'?> alt="">
      </div>
    </div>
  </div>

  <div class="classes-container">
    <div class="row">
      <div class="pic-column">
        <img src="img/psda-img3.jpg" alt="">
      </div>
      <div class="text-column">
        <h2 class="age-class" id="7to10">Ages 7 years and older</h2>
        <h4 class="class-type">Classical Ballet</h4>
          <p class="class-desc">
            <?php the_field('classical_ballet_info')?></p>
            <h4 class="class-type">Modern Jazz</h4>
              <p class="class-desc">
               <?php the_field('modern_jazz_info')?></p>
            <h4 class="class-type">Tap</h4>
              <p class="class-desc">
               <?php the_field('tap_info')?></p>
            <button class="purple">Registration Form</button>
      </div>
    </div>
  </div>

  <div class="classes-container">
    <div class="row">
      <div class="text-column">
        <h2 class="age-class" id="10to17">Ages 10 years and older</h2>
        <h4 class="class-type">Pointe (Toe Dancing)</h4>
          <p class="class-desc"><?php the_field('pointe_info')?></p>
            <h4 class="class-type">Hip Hop and Modern Dance (Horton)</h4>
              <p class="class-desc">
               <?php the_field('hiphop_info')?></p>
            <button class="purple">Registration Form</button>
        </div>
      <div class="pic-column">
          <img src="img/psda-img2.jpg" alt="">
      </div>
    </div>
  </div>


    <div class="classes-container">
    <div class="row">
      <div class="pic-column">
        <img src="img/psda-img4.jpg" alt="">
      </div>
      <div class="text-column">
        <h2 class="age-class" id="adult">Adult</h2>
          <p class="class-desc"><?php the_field('adult_info')?></p>
        <button class="purple">Registration Form</button>
      </div>
    </div>
  </div>
</main>

<?php get_footer();?>