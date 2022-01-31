<?php get_header(); ?>

<main>
    <section class="hero-livres">
        <img alt="logo boutique" class="jewel" src="<?php echo get_field('logo_boutique')['sizes']['medium']; ?>">
        <img alt="illustration hero droite" class="svgHeroRight" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-right-desktop.svg"> 
        <img alt="illustration hero gauche" class="svgHeroLeft" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-intro-left-desktop.svg">
        <div class="boxHero">
                <h1><?php the_field('titre_boutique'); ?></h1>
        </div> 
    </section>

    <section class="SectionLivres1">
        <div class="boxSectionLivres1">
                <div class="container">
                    <div class="text-grid">
                        <h2><?php the_field('titre_section_boutique'); ?></h2>
                        <p><?php the_field('paragraphe_section_boutique'); ?></p>

                    </div>
                    <div class="photo1"><img alt="photo illustratrice boutique un" src="<?php echo get_field('boutique_img1')['sizes']['large']; ?>"></div>
                    <div class="photo2"><img alt="photo illustratrice boutique deux" src="<?php echo get_field('boutique_img2')['sizes']['large']; ?>"></div>
                    <div class="photo3"><img alt="photo illustratrice boutique trois" src="<?php echo get_field('boutique_img3')['sizes']['large']; ?>"></div>
                    <div class="photo4"><img alt="photo illustratrice boutique quatre" src="<?php echo get_field('boutique_img4')['sizes']['large']; ?>"></div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/boutique'); ?>

</main>

<?php get_footer(); ?>