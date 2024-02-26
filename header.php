<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" autocomplete="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="" />
    <?php session_start();
     wp_head();  ?>
</head>
<body <?php body_class(); ?> >
    
<header class="site-header">
    <div class="container">
        <div class="nav-bar">

            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__logo">
                <a href="<?php echo home_url(); ?>">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" media="(min-width: 1100px)" />
                        <img src="<?php echo get_template_directory_uri() . "/img/logoMobile2.png" ?>" alt="Site logo" />
                    </picture>
                </a>
            </div>

            <div class="site-header__logo-mobile">
                <a class="" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/logo-mobile.png" ?>" alt="Site logo mobile" />
                </a>
            </div>
                
            <?php
                $args = array(
                    'theme_location' => 'main-menu', 
                    'container' => 'nav', 
                    'container_class' => 'nav-bar__main-menu',
                );
                wp_nav_menu($args);
            ?> 

            
        </div><!--.nav-bar--> 
    </div><!--.container-->   
    <?php
        if(isset($_SESSION['status'])) {
            ?>
                <div class="success-message">
                    <strong><?= $_SESSION['status']; ?></strong> 
                    <button class="success-message-btn" onclick="this.parentElement.remove()">&#x2715;</button>
                </div>
            <?php

            unset($_SESSION['status']);
        }
    ?>
</header>

<div class="mastadon">
    <div class="container">
        <div class="" style="display: flex;">
            <div class="hero">
                <div class="hero-intro">
                    <div class="hero-intro-grid">
                        <div class="hero-intro-heading">
                            <h1 style="font-size: 40px;"><?php echo esc_html( get_field('hero_section')['hero_intro'] ); ?></h1>
                            <h1 style="font-size: 80px;"><?php echo esc_html( get_field('hero_section')['hero_title'] ); ?></h1>
                        </div>
                        
                        <div class="hero-intro-body" style="line-height: normal; font-weight: 400;">
                            <h2><?php echo esc_html( get_field('hero_section')['hero_description_title'] ); ?></h2>
                            <span><?php echo esc_html( get_field('hero_section')['hero_description'] ); ?></span>
                            
                        </div>

                        <?php
                            if( get_field('hero_section')['hero_button'] == 'Show' ) {
                                ?>
                                    <div>
                                        <a href="#portfolio"><button class="btn" style="display:inline-block;"><?php echo esc_html( get_field('hero_section')['button_text'] ); ?></button></a>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="hero-image">
                    <picture class="">
                        <source srcset="<?php echo get_template_directory_uri() . "/img/irelandcastlecrop6.png" ?>" media="(min-width: 960px)" />
                        <img srcset="<?php echo get_template_directory_uri() . "/img/irelandcastlecrop7.png" ?>" alt="" />
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>

<!---*-*-*-*-*-*-*-*--*-*-*- Scroll to Top Button -*-*-*-*-*-*-*-*--*-*-*--->
<div class="scroll">
    <i class="fas fa-long-arrow-alt-up scroll__arrow"></i>
</div>

<!---*-*-*-*-*-*-*-*--*-*-*- Mouse Trail -*-*-*-*-*-*-*-*--*-*-*--->

<div class="cursor">
    <div class="dot"><span></span></div>
    <div class="circle"></div>
</div>