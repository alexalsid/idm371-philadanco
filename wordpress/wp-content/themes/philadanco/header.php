<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php the_title()?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <nav class="nav">


        <div id="logo">
            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri() . '/dist/img/logo.svg'?>" alt="go home"></a>
        </div>



        <div class="menu-cont">
            <div id="exit">
                <img src="<?php echo get_template_directory_uri() . '/dist/img/exit.svg' ?>">
</div>


<?php
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
            ]);

            ?>
            

        </div>

        <div id="burger">
            <svg width="40px" height="22px" viewBox="0 0 40 22" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 52.6 (67491) - http://www.bohemiancoding.com/sketch -->
                <title>burger</title>
                <desc>Created with Sketch.</desc>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Mobile" transform="translate(-10.000000, -19.000000)" fill="#010101">
                        <g id="Header" transform="translate(10.000000, 6.000000)">
                            <g id="nav">
                                <g id="burger" transform="translate(0.000000, 13.000000)">
                                    <rect id="Rectangle" x="0" y="0" width="40" height="2"></rect>
                                    <rect id="Rectangle-Copy-2" x="0" y="10" width="40" height="2"></rect>
                                    <rect id="Rectangle-Copy-3" x="0" y="20" width="40" height="2"></rect>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </nav>