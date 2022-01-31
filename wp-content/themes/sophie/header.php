<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

    <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<body <?php body_class(); ?>>




<header class="header1">
    
    <div class="boxHeader100">
        <div class="boxHeader">
            <a href="<?php echo get_home_url()?>"><img alt="logo" src="<?php echo get_field('logo', 'option')['sizes']['large']; ?>"></a>

            <div class="menu">

                <?php
                    wp_nav_menu([
                        "menu" => "navigation desktop",
                        "container" => "",
                        "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
                        "theme_location" => "Dashboard",
                        'add_li_class'  => 'content__item'
                    ])
                ?>

            </div>

            <button id="btn" class="logoHamburger">
                <span id="span1"></span>
                <span id="span2"></span>
                <span id="span3"></span>
            </button>
        </div>
        <div id="menu" class="menuResp">
            <?php
                wp_nav_menu([
                    "menu" => "navigation desktop",
                    "container" => "",
                    "items_wrap" => '<ul class="sub-nav">%3$s</ul>',
                    "theme_location" => "Dashboard"
                ])
            ?>
        </div>
        <div class="opacity"></div>
    </div>
       

</header>