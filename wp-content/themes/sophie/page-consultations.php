<?php get_header(); ?>

<main>
    <section class="hero-livres">
        <img alt="logo consultations" class="jewel" src="<?php echo get_field('logo_consultations')['sizes']['medium']; ?>">
        <img alt="hero illustation droite" class="svgHeroRight" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-right-desktop.svg"> 
        <img alt="hero illustation gauche" class="svgHeroLeft" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-left-desktop.svg">
        <div class="boxHero">
                <h1><?php the_field('titre_consultations'); ?></h1>
        </div> 
    </section>

    <section class="SectionLivres1">
        <div class="boxSectionLivres1">
                <div class="container">
                    <div class="text-grid">
                        <h2><?php the_field('titre_section_consultations'); ?></h2>
                        <p><?php the_field('paragraphe_section_consultations'); ?></p>
                    </div>
                    <div class="photo1"><img alt="image illustratrice consultations un" src="<?php echo get_field('consultations_img1')['sizes']['large']; ?>"></div>
                    <div class="photo2"><img alt="image illustratrice consultations deux" src="<?php echo get_field('consultations_img2')['sizes']['large']; ?>"></div>
                    <div class="photo3"><img alt="image illustratrice consultations trois" src="<?php echo get_field('consultations_img3')['sizes']['large']; ?>"></div>
                    <div class="photo4"><img alt="image illustratrice consultations quatre" src="<?php echo get_field('consultations_img4')['sizes']['large']; ?>"></div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/boutique'); ?>

</main>

<?php get_footer(); ?>