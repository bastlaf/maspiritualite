<section class="section2" data-aos="fade-up" data-aos-duration="1000">
    <div class="boxSection2">
    <img alt="pattern fond boutique" class="svgHeroLeft" src="<?php bloginfo('template_url'); ?>/img/bg-pattern-how-we-work-desktop.svg">
        <h2><?php the_field('decouverte', 'option'); ?></h2>
        <div class="card--2">
            <?php 
                $BtnBoutique = get_field('lien_boutique', 'option');
                if( $BtnBoutique ): 
                $BtnBoutique_url = $BtnBoutique['url'];
                $BtnBoutique_title = $BtnBoutique['title'];
            ?>
            <a href="<?php echo esc_url( $BtnBoutique_url ); ?>"><?php echo esc_html( $BtnBoutique_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>