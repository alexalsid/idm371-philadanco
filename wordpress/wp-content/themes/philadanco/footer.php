 <footer>
     <?php wp_footer(); ?> 
        <div class="logo">
            <a href="<?php echo home_url();?>"><img src=<?php echo get_template_directory_uri() . "/dist/img/logo_white.svg" ?> alt="logo"></a>
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
                Fax: (215)387-8203<br>
            </p>
        </div>


        <div class="socials">
            <a href="https://www.facebook.com/Philadanco/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/dist/img/facebook.svg"?>" alt="facebook" ></a>
            <a href="https://twitter.com/philadancoc" target="_blank"><img src="<?php echo get_template_directory_uri() . "/dist/img/twitter.svg"?>" alt="twitter" ></a>
            <a href="https://www.instagram.com/philadanco/" target="_blank"> <img src="<?php echo get_template_directory_uri() . "/dist/img/instagram.svg"?>" alt="instagram"></a>
             <a href="https://www.youtube.com/watch?v=E_b5imKKb-o" target="_blank"><img src="<?php echo get_template_directory_uri() . "/dist/img/youtube.svg" ?>" alt="youtube"></a>
        </div>


        <div class="mailing-list">
            <?php if( function_exists( 'mc4wp_show_form' ) ) {
                mc4wp_show_form(295);
            } ?>
        </div>
        <div class="copyright">
            <p>Copyright 2009-2018, PHILADANCO! All Rights Reserved</p>
        </div>

    </footer>

</body>

</html>