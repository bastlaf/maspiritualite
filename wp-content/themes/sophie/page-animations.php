<?php get_header(); ?>

<main>

    <section class="hero-livres">
        <img alt="logo hero" class="jewel" src="<?php echo get_field('logo_animations')['sizes']['medium']; ?>">
        <img alt="pattern hero droite" class="svgHeroRight" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-right-desktop.svg"> 
        <img alt="pattern hero gauche" class="svgHeroLeft" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-left-desktop.svg">
        <div class="boxHero">
            <h1><?php the_field('titre_animations'); ?></h1>
        </div> 
    </section>

    <section class="SectionLivres1">
        <div class="boxSectionLivres1">
                <div class="container">
                    <div class="text-grid">
                        <h2><?php the_field('titre_section_animations'); ?></h2>
                        <p><?php the_field('paragraphe_section_animations'); ?></p>

                    </div>
                    <div class="photo1"><img alt="image illustrative un" src="<?php echo get_field('animations_img1')['sizes']['large']; ?>"></div>
                    <div class="photo2"><img alt="image illustrative deux" src="<?php echo get_field('animations_img2')['sizes']['large']; ?>"></div>
                    <div class="photo3"><img alt="image illustrative trois" src="<?php echo get_field('animations_img3')['sizes']['large']; ?>"></div>
                    <div class="photo4"><img alt="image illustrative quatre" src="<?php echo get_field('animations_img4')['sizes']['large']; ?>"></div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="sectionAnim">
        <div class="boxSectionAnim">
            <h2><?php the_field('titre_section_planning'); ?></h2>
                <?php 
                /**
                * Setup query to show the ‘services’ post type with ‘8’ posts.
                * Output the title with an excerpt.
                */
                    $today = date( 'Y-m-d' );
                    $args = array(  
                        'post_type' => 'evenements',
                        'posts_per_page' => 4,
                        'orderby' => 'meta_value',
                        'meta_key' => 'datecpt',
                        'order' => 'ASC',
                        'meta_query' => [
                            'key' => 'datecpt',
                            'value' => $today,
                            'compare' => '>=',
                            'type' => 'DATE'
                        ],
                    );
                    
                    // Query CPT
                    $query = new WP_Query( $args ); 
                    if ($query->have_posts()) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                        <!-- <?php $category_image = get_field('imgcpt'); ?> -->
                        <div class="cardAnim" data-aos="fade-left" data-aos-duration="1000">
                            <div class="cardAnim2">
                                    <div class="photoAnim">
                                        <?php if($category_image){ ?>
                                            <img src="<?= $category_image ?>">
                                        <?php } else { ?>
                                        <img alt="pattern boutique" src="<?php echo get_field('image_par_defaut', 'option')['sizes']['large']; ?>">
                                        <?php } ?>
                                    </div>
                                    <h4><?= get_field('datecpt'); ?></h4>
                                    <h5><?= get_field('horairecpt'); ?></h5>
                                    <h3><?= get_the_title(); ?></h3>
                                    <h4><?= get_field('prixcpt'); ?></h4> 
                                </div>
                            </div> 
                        <?php endwhile;
                    else : ?>
                        <div class="cardAnim">
                        <div class="cardAnim2">
                            <div class="photoAnim">
                                <img alt="fond de carte animation" src="<?php echo get_field('image_par_defaut', 'option')['sizes']['large']; ?>">
                            </div>
                            <h4>Désolé, nous n'avons pas prévu d'événement dans les semaines à venir.</h4>
                        </div> 
                        </div>
                    <?php endif; wp_reset_query();
                    wp_reset_postdata(); 
                ?>
        </div>
    </section>

    <?php get_template_part('templates/boutique'); ?>

</main>

<?php get_footer(); ?>