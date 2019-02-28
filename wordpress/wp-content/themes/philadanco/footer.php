 <footer>
     <?php wp_footer(); ?> 
        <div class="logo">
            <img src=<?php echo get_template_directory_uri() . "/dist/img/logo_white.svg" ?> alt="logo">
        </div>
        <nav>
            
<?php
            wp_nav_menu([
                'theme_location'  => 'footer',
                'container'       => 'ul',
            ]);

            ?>
        </nav>

        <div class="contact">
            <h4>CONTACT</h4>
            <p>
                9 North Preston St-Philadanco Way<br>
                Philadelphia, PA 19104<br>
                Telephone: (215)387-8200<br>
                Fax: (215)387-823<br>
            </p>
        </div>


        <div class="socials">
            <a href=""><img src="<?php echo get_template_directory_uri() . "/dist/img/facebook.svg" ?>" alt="facebook"></a>
            <a href=""><img src="<?php echo get_template_directory_uri() . "/dist/img/twitter.svg" ?>" alt="twitter"></a>
            <a href=""> <img src="<?php echo get_template_directory_uri() . "/dist/img/instagram.svg" ?>" alt="instagram"></a>
             <a href=""><img src="<?php echo get_template_directory_uri() . "/dist/img/youtube.svg" ?>" alt="youtube"></a>
        </div>


        <div class="mailing-list">
            <h5>Join Our Mailing List</h5>
            <form>
                <input type="text">
               <button class="yellow">Send</button>
            </form>
        </div>
        <div class="copyright">
            <p>Copyright 2009-2018, PHILADANCO! All Rights Reserved</p>
        </div>

    </footer>

</body>

</html>