<?php get_header(); ?>
<main>
    <section class="hero">
        <img class="jewel" alt="logo hero" src="<?php bloginfo('template_url'); ?>/img/ms-logo-nb-logo-pap.svg">
        <img class="svgHeroRight" alt="hero pattern droit" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-right-desktop.svg"> 
        <img class="svgHeroLeft" alt="hero pattern gauche" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-left-desktop.svg">

        <div class="boxHero">
            <div class="boxHeroText">
                <h1><?php the_field('titrehero'); ?></h1>
                <h2><?php the_field('sous-titrehero'); ?></h2>
                <h3><?php the_field('adressehero'); ?></h3>
            </div>
            <div class="boxHeroImg">
                <div class="imgHeroBox">
                    <img class="imgHero" alt="Image hero" src="<?php echo get_field('imghero')['sizes']['large']; ?>"> 
                </div>
            </div>
        </div> 

    </section>

    <section class="section1">
    <img class="butterfly2" alt="logo fond section" src="<?php bloginfo('template_url'); ?>/img/ms-logo-nb-logo-pap_pink.svg">
        <div class="boxSection1">
            <h2><?php the_field('titresectionservices'); ?></h2>

            <div class="boxCard">

                <div class="card" data-aos-duration="1000" data-aos="fade-up">
                    <div class="card--1">
                        <div class="card-background-svg">
                            <img alt="logo service un" src="<?php the_field('imgcarteservice1'); ?>">
                        </div>
                        <div class="card-title"><?php the_field('titrecarteservice1'); ?></div>
                        <div class="card-text"><?php the_field('textecarteservice1'); ?></div>
                    </div>
                    <div class="card--2">
                        <?php 
                            $buttonCarteService1 = get_field('btncarteservice1');
                            if( $buttonCarteService1 ): 
                                $buttonCarteService1_url = $buttonCarteService1['url'];
                                $buttonCarteService1_title = $buttonCarteService1['title'];
                        ?>
                        <a href="<?php echo esc_url( $buttonCarteService1_url ); ?>"><?php echo esc_html( $buttonCarteService1_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card--1">
                        <div class="card-background-svg">
                            <img alt="logo service deux" src="<?php the_field('imgcarteservice2'); ?>">
                        </div>
                        <div class="card-title"><?php the_field('titrecarteservice2'); ?></div>
                        <div class="card-text"><?php the_field('textecarteservice2'); ?></div>
                    </div>
                    <div class="card--2">
                        <?php 
                            $buttonCarteService2 = get_field('btncarteservice2');
                            if( $buttonCarteService2 ): 
                                $buttonCarteService2_url = $buttonCarteService2['url'];
                                $buttonCarteService2_title = $buttonCarteService2['title'];
                        ?>
                        <a href="<?php echo esc_url( $buttonCarteService2_url ); ?>"><?php echo esc_html( $buttonCarteService2_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="card--1">
                        <div class="card-background-svg">
                            <img alt="logo service trois" src="<?php the_field('imgcarteservice3'); ?>">
                        </div>
                        <div class="card-title"><?php the_field('titrecarteservice3'); ?></div>
                        <div class="card-text"><?php the_field('textecarteservice3'); ?></div>
                    </div>
                    <div class="card--2">
                        <?php 
                            $buttonCarteService3 = get_field('btncarteservice3');
                            if( $buttonCarteService3 ): 
                                $buttonCarteService3_url = $buttonCarteService3['url'];
                                $buttonCarteService3_title = $buttonCarteService3['title'];
                        ?>
                        <a href="<?php echo esc_url( $buttonCarteService3_url ); ?>"><?php echo esc_html( $buttonCarteService3_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('templates/boutique'); ?>

    <section class="section3">
        <div class="imgSection3--1">
            <img alt="photo magasin un" src="<?php the_field('imagecarre1'); ?>"> 
        </div>
        <div class="imgSection3--2">
            <img alt="photo magasin deux" src="<?php the_field('imagecarre2'); ?>">
        </div>
        <div class="imgSection3--3">
            <img alt="photo magasin trois" src="<?php the_field('imagecarre3'); ?>">
        </div>

    </section>






    <section class="sectionNews">
        <h2 class="titreNewsSection">Nouveautés</h2>
        <div class="boxSectionNews">
            <div class="boxNews">
    <?php 
        $args = array(  
            'post_type' => 'News',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );                        
        // Query CPT
        $query = new WP_Query( $args ); 
        if ($query->have_posts()) :
            while ( $query->have_posts() ) : $query->the_post(); 
    ?>
    <?php $category_image = get_field('image_de_la_nouveaute'); ?>
                <div class="newsItem">

                    <div class="boxItemhigh">
                        <div class="boxItemImg">
                            <img src="<?= $category_image ?>" alt="">
                        </div>

                        <h2><?php the_title(); ?></h2>

                        <?php the_field('texte_de_la_nouveaute'); ?>
                    </div>
                    <div class="boxItemLow">
                        <p><?php echo get_the_date(); ?></p>
                    </div>



                </div>
                
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
        <?php wp_reset_postdata();?> 
            </div>
        </div>
    </section>

    <?php get_template_part('templates/contact'); ?>

   
    


</main>


<?php get_footer(); ?>