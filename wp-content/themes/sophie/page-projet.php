<?php get_header(); ?>

<main>
    <section class="hero-livres">
        <img alt="logo projet" class="jewel" src="<?php echo get_field('logo_projet')['sizes']['medium']; ?>">
        <img alt="hero illustration droite" class="svgHeroRight" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-right-desktop.svg"> 
        <img alt="hero illustration gauche" class="svgHeroLeft" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-left-desktop.svg">
        <div class="boxHero">
                <h1><?php the_field('titre_projet'); ?></h1>
        </div> 
    </section>

    <section class="SectionProjet1">
        <div class="boxSectionProjet1">
                <div class="textProjet">
                    <h2><?php the_field('titre_section_projet'); ?></h2>
                    <p><?php the_field('paragraphe_section_projet'); ?></p>
                </div>
                <div class="imgsProjet">
                    <div class="photoProjet1"><img alt="image illustratrice projet un"  src="<?php echo get_field('projet_img1')['sizes']['large']; ?>"></div>
                    <div class="photoProjet2"><img alt="image illustratrice projet deux"  src="<?php echo get_field('projet_img2')['sizes']['large']; ?>"></div>
                </div>
        </div>
    </section>
    <?php get_template_part('templates/contact'); ?>
</main>

<?php get_footer(); ?>