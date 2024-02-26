<?php 
    get_header(); 
?>

    <section id="about" class="about">
        <div class="about-skills no-cursor">
            <div class="about-skills-grid container ">

                <div class="about-header">
                    <h2 class="paint-font"><?php echo esc_html( get_field('about_me')['skills_title'] ); ?></h2>
                </div>

                <div class="about-skills-grid-bar style progressSection">
                    <div class="about-skills-bar-heading">
                        <h5><?php echo esc_html( get_field('about_me')['skill_name_1'] ); ?></h5>
                        <div class="value"><?php echo esc_html( get_field('about_me')['skill_level_1'] ); ?>&#37;</div> 
                    </div>
                    <div class="skill-container progress-container">
                        <div id="myBar" class="skill skill-level-<?php echo esc_html( get_field('about_me')['skill_level_1'] ); ?> progress-bar"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style progressSection">
                    <div class="about-skills-bar-heading">
                        <h5><?php echo esc_html( get_field('about_me')['skill_name_2'] ); ?></h5>
                        <div class="value"><?php echo esc_html( get_field('about_me')['skill_level_2'] ); ?>&#37;</div> 
                    </div>
                    <div class="skill-container progress-container">
                        <div id="myBar" class="skill skill-level-<?php echo esc_html( get_field('about_me')['skill_level_2'] ); ?> progress-bar"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style progressSection">
                    <div class="about-skills-bar-heading">
                        <h5><?php echo esc_html( get_field('about_me')['skill_name_3'] ); ?></h5>
                        <div class="value"><?php echo esc_html( get_field('about_me')['skill_level_3'] ); ?>&#37;</div> 
                    </div>
                    <div class="skill-container progress-container">
                        <div id="myBar" class="skill skill-level-<?php echo esc_html( get_field('about_me')['skill_level_3'] ); ?> progress-bar"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style progressSection">
                    <div class="about-skills-bar-heading">
                        <h5><?php echo esc_html( get_field('about_me')['skill_name_4'] ); ?></h5>
                        <div class="value"><?php echo esc_html( get_field('about_me')['skill_level_4'] ); ?>&#37;</div> 
                    </div>
                    <div class="skill-container progress-container">
                        <div id="myBar" class="skill skill-level-<?php echo esc_html( get_field('about_me')['skill_level_4'] ); ?> progress-bar"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style progressSection">
                    <div class="about-skills-bar-heading">
                        <h5><?php echo esc_html( get_field('about_me')['skill_name_5'] ); ?></h5>
                        <div class="value"><?php echo esc_html( get_field('about_me')['skill_level_5'] ); ?>&#37;</div> 
                    </div>
                    <div class="skill-container progress-container">
                        <div id="myBar" class="skill skill-level-<?php echo esc_html( get_field('about_me')['skill_level_5'] ); ?> progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-me">
            <div class="about-me-grid container" >
                <div class="about-header">
                    <h2 class="paint-font"><?php echo esc_html( get_field('about_me')['about_title'] ); ?></h2>
                </div>
                <div data-aos="fade-left" data-aos-offset="400" data-aos-ease="ease-in-out">
                    <?php echo esc_html( get_field('about_me')['about_me_description'] ); ?>
                    
                    <?php
                        if( get_field('about_me')['download_cv_btn'] == 'Show' ) {
                            ?>
                                <div class="about-me-btn">
                                    <a href="<?php echo esc_html( get_field('about_me')['cv_btn_url'] ); ?>" class="btn" download><?php echo esc_html( get_field('about_me')['cv_btn_text'] ); ?></a>
                                </div>
                            <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="title-grid pb-50">
            <div data-aos="zoom-in" data-aos-easing="linear" data-aos-delay="825" data-aos-offset="475" class="title white-font"><span class=""><?php echo esc_html( section_header(get_field('my_services')['title'] )); ?></div>
            <div class="title-bg dark-gray-font"><?php echo esc_html( get_field('my_services')['background_title'] ); ?></div>
        </div>
        
        <div class="wrapper-splide" data-aos="fade-up" data-aos-offset="450" data-aos-easing="ease-in">
            <div id="services-splide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                    <?php
                    if( have_rows('my_services') ) :
                        while( have_rows('my_services') ): the_row();
                            $s1 = get_sub_field('slide_1');
                            $s2 = get_sub_field('slide_2');
                            $s3 = get_sub_field('slide_3');
                            $s4 = get_sub_field('slide_4');
                            $s5 = get_sub_field('slide_5');
                            $s6 = get_sub_field('slide_6');

                            if (get_field('my_services')['number_of_services'] == 'Three' ) {
                                ?>
                                <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s1['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s1['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s1['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s2['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s2['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s2['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s3['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s3['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s3['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <?php
                            } elseif (get_field('my_services')['number_of_services'] == 'Four') {
                                ?>
                                <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s1['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s1['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s1['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s2['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s2['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s2['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s3['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s3['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s3['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                    <i class="<?php echo esc_html( $s4['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s4['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s4['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <?php
                            } elseif (get_field('my_services')['number_of_services'] == 'Five') {
                            ?>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s1['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s1['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s1['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s2['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s2['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s2['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s3['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s3['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s3['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                    <i class="<?php echo esc_html( $s4['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s4['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s4['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                    <i class="<?php echo esc_html( $s5['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html($s5['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s5['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <?php
                            } else {
                                ?>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s1['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s1['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s1['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s2['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s2['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s2['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                        <i class="<?php echo esc_html( $s3['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s3['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s3['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                    <i class="<?php echo esc_html( $s4['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html( $s4['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s4['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                    <i class="<?php echo esc_html( $s5['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html($s5['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s5['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="services-card-container">
                                    <div class="services-card-content">
                                    <i class="<?php echo esc_html( $s6['icon'] ); ?> card-icon"></i>
                                        <h3><?php echo esc_html($s6['title'] ); ?></h3>
                                        <p><?php echo esc_html( $s6['description'] ); ?></p>
                                    </div> 
                                </div>
                            </li>
                            <?php
                            }
                        endwhile; 
                    endif; ?>  
                    </ul>
                </div>
            </div>
        </div>   
    </section>

    <section id="portfolio" class="portfolio">
        <div class="title-grid px-40 portfolio-header">
            <div data-aos="zoom-in" data-aos-easing="linear" data-aos-delay="825" data-aos-offset="475" class="title black-font"><?php echo esc_html( section_header(get_field('my_portfolio')['title'] )); ?></div>
            <div class="title-bg light-gray-font"><?php echo esc_html( get_field('my_portfolio')['background_title'] ); ?></div>
        </div>
        <?php
            if( have_rows('my_portfolio') ) :
                while( have_rows('my_portfolio') ): the_row();
                    $p1 = get_sub_field('p1');
                    $p2 = get_sub_field('p2');
                    $p3 = get_sub_field('p3');
        ?>
        <div class="css-bg">
            <div class="portfolio-card-wrap-1">
                <div class="portfolio-card custom-1" style="position:relative; z-index:10;" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-cubic" data-aos-duration="600">
                    <h2 class="portfolio-title text-primary parallax"><?php echo esc_html($p1['title']); ?></h2>
                    <div class="portfolio-desc">
                        <img src="<?php echo esc_url($p1['logo']); ?>" alt="<?php echo esc_attr($p1['logo_alt']); ?>">
                        <p class="text-gray"><?php echo esc_html($p1['description']); ?></p>
                        <div class="portfolio-btn">
                            <div class="portfolio-btn-margin">
                                <a href="<?php echo esc_url($p1['code_link']); ?>" target="_blank"><button class="btn btn-outline">View Code</button></a>
                            </div>
                            <div class="portfolio-btn-margin">
                                <a href="<?php echo esc_url($p1['site_link']); ?>" target="_blank"><button class="btn">View Website!</button></a>
                            </div> 
                        </div>
                    </div>
                    <div class="portfolio-img-box">
                        <a href="<?php echo esc_url($p1['site_link']); ?>" target="_blank" rel="noopener noreferrer">  
                            <ul class="caption-style">
                                <li>
                                    <img class="" src="<?php echo esc_url($p1['site_pic']); ?>" alt="">
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h1>Click to View Now!</h1>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-box-right diagonal-wavy">
            <div class="portfolio-card-wrap-2">
                <div class="portfolio-card-right custom-2" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-out" data-aos-duration="600">
                    <h2 class="portfolio-title-right text-primary"><?php echo esc_html($p2['title']); ?></h2>
                    <div class="portfolio-desc-right">
                        <img src="<?php echo esc_url($p2['logo']); ?>" alt="<?php echo esc_url($p2['logo_alt']); ?>" />
                        <p class="text-gray"><?php echo esc_html($p2['description']); ?></p>
                        <div class="portfolio-btn-right">
                            <div class="portfolio-btn-margin">
                                <a href="<?php echo esc_url($p2['code_link']); ?>" target="_blank"><button class="btn btn-outline">View Code</button></a>
                            </div>
                            <div class="portfolio-btn-margin">
                                <a href="<?php echo esc_url($p2['site_link']); ?>" target="_blank"><button class="btn">View Website!</button></a>   
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-img-box-right">
                        <a href="<?php echo esc_url($p2['site_link']); ?>" target="_blank" rel="noopener noreferrer">
                            <ul class="caption-style">
                                <li>
                                    <img class="" src="<?php echo esc_url($p2['site_pic']); ?>" alt="">
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h1>Click to View Now!</h1>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </a>  
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-box hypnotic">
            <div class="portfolio-card-wrap-3">
                <div class="portfolio-card custom-1" data-aos="fade-right"  data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-offset="500">
                    <h2 class="portfolio-title text-primary"><?php echo esc_html($p3['title']); ?></h2>
                    <div class="portfolio-desc">
                        <img src="<?php echo esc_url($p3['logo']); ?>" alt="<?php echo esc_attr($p3['logo_alt']); ?>" />
                        <p class="text-gray"><?php echo esc_html($p3['description']); ?></p>
                        <div class="portfolio-btn">
                            <div class="portfolio-btn-margin">
                                <a href="<?php echo esc_url($p3['code_link']); ?>" target="_blank"><button class="btn btn-outline">View Code</button></a>
                            </div>
                            <div class="portfolio-btn-margin">
                                <a href="<?php echo esc_url($p3['site_link']); ?>" target="_blank"><button class="btn">View Website!</button></a>
                            </div> 
                        </div>
                    </div>
                    <div class="portfolio-img-box">
                        <a href="<?php echo esc_url($p3['site_link']); ?>" target="_blank" rel="noopener noreferrer">
                            <ul class="caption-style">
                                <li>
                                    <img class="" src="<?php echo esc_url($p3['site_pic']); ?>" alt="">
                                    <div class="caption">
                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h1>Click to View Now!</h1>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section> 
    
    <section id="testimonials" class="testimonials page-section">
        <div class="title-grid px-40">
            <div data-aos="zoom-in" data-aos-easing="linear" data-aos-delay="825" data-aos-offset="475" class="title black-font"><?php echo esc_html( section_header(get_field('testimonials')['title'] )); ?></span></div>
            <div class="title-bg light-gray-font"><?php echo esc_html( get_field('testimonials')['background_title'] ); ?></div>
        </div>
        
        <div class="wrapper-splide" data-aos="fade-up" data-aos-offset="450" data-aos-easing="ease-in">
            <div id="testimonial-splide" class="splide" >
                <div class="splide__track">
                    <ul class="splide__list">
                    <?php
                    if( have_rows('testimonials') ) :
                        while( have_rows('testimonials') ): the_row();
                            $t1 = get_sub_field('t1');
                            $t2 = get_sub_field('t2');
                            $t3 = get_sub_field('t3');
                            $t4 = get_sub_field('t4');
                            $t5 = get_sub_field('t5');
                            $t6 = get_sub_field('t6');

                            if (get_field('testimonials')['number_of_testimonials'] == 'Three' ) {
                                ?>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t1['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t1['name']); ?>, <?php echo esc_html($t1['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t1['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t2['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t2['name']); ?>, <?php echo esc_html($t2['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t2['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide"  >
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t3['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t3['name']); ?>, <?php echo esc_html($t3['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t3['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <?php
                            } elseif (get_field('testimonials')['number_of_testimonials'] == 'Four' ) {
                                ?>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t1['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t1['name']); ?>, <?php echo esc_html($t1['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t1['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t2['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t2['name']); ?>, <?php echo esc_html($t2['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t2['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide"  >
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t3['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t3['name']); ?>, <?php echo esc_html($t3['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t3['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide"  >
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t4['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t4['name']); ?>, <?php echo esc_html($t4['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t4['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                            <?php
                            } elseif (get_field('testimonials')['number_of_testimonials'] == 'Five' ) {
                                ?>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t1['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t1['name']); ?>, <?php echo esc_html($t1['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t1['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t2['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t2['name']); ?>, <?php echo esc_html($t2['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t2['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide"  >
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t3['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t3['name']); ?>, <?php echo esc_html($t3['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t3['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide"  >
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t4['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t4['name']); ?>, <?php echo esc_html($t4['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t4['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t5['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t5['name']); ?>, <?php echo esc_html($t5['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t5['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                            <?php
                            } else {
                                ?>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t1['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t1['name']); ?>, <?php echo esc_html($t1['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t1['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t2['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t2['name']); ?>, <?php echo esc_html($t2['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t2['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide"  >
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t3['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t3['name']); ?>, <?php echo esc_html($t3['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t3['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t4['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t4['name']); ?>, <?php echo esc_html($t4['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t4['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t5['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t5['name']); ?>, <?php echo esc_html($t5['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t5['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="testimonials-card-container">
                                        <blockquote>
                                            <div class="testimonials-card-header">
                                                <img class="testimonials-card-img" src="<?php echo esc_url($t6['pic']); ?>" alt="avatar">
                                                <span class="testimonials-card-author"><?php echo esc_html($t6['name']); ?>, <?php echo esc_html($t6['company']); ?></span>
                                            </div>
                                            <p class="testimonials-card-description">&ldquo;<?php echo esc_html($t6['description']); ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </li>
                            <?php
                            }
                            endwhile;
                        endif; 
                        ?>
                    </ul>
                </div>
            </div>
        </div> 
    </section>
    
    <div id="experiences" class="exp-edu parallax rotated-square">
        <?php
            if( have_rows('exp_edu') ) :
                while( have_rows('exp_edu') ): the_row();
                    $exp = get_sub_field('exp');
                    $edu = get_sub_field('edu');
        ?>
        <div class="exp-edu-grid exp-edu-wrapper">
            <div class="exp-edu-experiences" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-cubic"
            data-aos-duration="600">
                <h1 class="exp-edu-title paint-font">Experiences</h1>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box"><?php echo esc_html($exp['date']); ?></div>
                    <h4><?php echo esc_html($exp['job_title']); ?></h4>
                    <p><?php echo esc_html($exp['description']); ?></p>
                </div>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box"><?php echo esc_html($exp['date_2']); ?></div>
                    <h4><?php echo esc_html($exp['job_title_2']); ?></h4>
                    <p><?php echo esc_html($exp['description_2']); ?></p>
                </div>
            </div>
            <div class="exp-edu-education" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-cubic"
            data-aos-duration="600">
                <h1 class="exp-edu-title  paint-font">Education</h1>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box"><?php echo esc_html($edu['date']); ?></div>
                    <h4><?php echo esc_html($edu['job_title']); ?></h4>
                    <p><?php echo esc_html($edu['description']); ?></p>
                </div>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box"><?php echo esc_html($edu['date_2']); ?></div>
                    <h4><?php echo esc_html($edu['job_title_2']); ?></h4>
                    <p><?php echo esc_html($edu['description_2']); ?></p>
                </div>
            </div>
        </div>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div>
   
    <section id="contact" class="contact pt-40">
        <div class="title-grid">
            <div data-aos="zoom-in" data-aos-easing="linear" data-aos-delay="825" data-aos-offset="475" class="title black-font"><?php echo esc_html( section_header(get_field('contact')['title'] )); ?></span></div>
            <div class="title-bg light-gray-font"><?php echo esc_html(get_field('contact')['background_title']); ?></div>
        </div>
        
        <div class="contact-wrapper" data-aos="fade-up" data-aos-offset="500" data-aos-easing="ease-in">
            <div class="contact-form ">
                <form id="contact-form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <div class="contact-text-fields">
                        <input type="hidden" name="action" value="submit_contact_form">
                        <input id="name" class="text-input name-input" type="text" placeholder="Your Name" name="name" autocomplete="on" required>
                        <input id="email" class="text-input email-input" type="email" placeholder="Your E-Mail" name="email" autocomplete="on" required>
                        <input id="phone" class="text-input phone-input" type="text" placeholder="Your Phone" name="cell-number" autocomplete="on">
                        <textarea id="message" class="text-input message-input" type="text" name="message" placeholder="Your Message" autocomplete="on" required></textarea>
                        <?php wp_nonce_field( 'submit_contact_form', 'contact_form_nonce' ); ?>
                    </div>
                    <div class="contact-btn">
                        <button id="contact-submit" name="submit" type="submit" class="btn">Submit Form</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="contact-info contact-wrapper" data-aos="fade-up" data-aos-offset="350" data-aos-easing="ease-in">
            <div class="contact-info-card">
                <i class="fas fa-mobile-alt"></i>
                <h5>call us</h5>
                <a href="tel:+<?php echo esc_html(get_field('contact')['telephone_number']); ?>" class="a-blk"><?php echo esc_html(get_field('contact')['telephone_number']); ?></a>
            </div>
            <div class="contact-info-card">
                <i class="fas fa-home icon_house_alt"></i>
                <h5>Address</h5>
                <a href="<?php echo esc_html(get_field('contact')['google_map_link']); ?>" target="_blank" class="a-blk"><?php echo esc_html(get_field('contact')['address']); ?></a>
            </div>
            <div class="contact-info-card">
                <i class="fas fa-envelope"></i>
                <h5>Email</h5>
                <a href="mailto:<?php echo esc_html(get_field('contact')['e-mail']); ?>?subject=SUBJECT&body=BODY" class="a-blk"><?php echo esc_html(get_field('contact')['e-mail']); ?></a>
            </div>
        </div>
    </section>
        
<?php get_footer(); ?>