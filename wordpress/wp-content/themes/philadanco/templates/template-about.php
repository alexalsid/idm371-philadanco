<?php

/* 

Template Name: About

*/

  //response generation function
  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){
    global $response;
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = $name . " sent a message to Philadanco! ";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

    get_header(); 
    get_template_part('hero'); /*Template Name: About Contact*/
?>

<main>
<div class="intro">
    <p><?php the_field('about_intro')?></p>
</div>

<div class="meet-team">
    <img srcset="<?php the_field('meet_team')?>" alt="">
    <div>
        <h3>Meet Philadanco</h3>
        <p><?php the_field('meet_team_blurb') ?><p>
        <button class="purple"><a href="<?php the_field('meet_team_link')?>">More</a></button>
    </div>
</div>


<div class="history">
    <blockquote><?php the_field('about_quote')?></blockquote>
    <div class="columns">
        <p><?php the_field('history_paragraph')?></p>
        <img src="<?php the_field('about_image')?>" alt="">
    </div>
    <p><?php the_field('history_paragraph_2') ?></p>
</div>

<div class="contact">
    <h2>
        Contact Us
    </h2>
      <div id="respond">
        <?php echo $response; ?>
        <form action="<?php the_permalink(); ?>" method="post">
          <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
          <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
          <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
          <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
          <input type="hidden" name="submitted" value="1">
          <p><input type="submit" class="purple"></p>
        </form>
      </div>
</div>

</main>



<?php 
wp_footer();
get_footer();
?>