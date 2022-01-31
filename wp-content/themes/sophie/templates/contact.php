<section class="section4" id="contact">
        <div class="boxSection4">
            <h2><?php the_field('contacttitre', 'option'); ?></h2>
            <h3><?php the_field('contactsoustitre', 'option'); ?></h3>
            <div class="boxCardContact">


            <a href="tel:<?php the_field('texte_contact_1', 'option'); ?>">
                <div class="cardContact" data-aos="fade-up" data-aos-duration="1000">
                    <img alt="logo contact un" class="imgHero" src="<?php the_field('logo_contact_1', 'option'); ?>">
                   <p><?php the_field('texte_contact_1', 'option'); ?></p>
                </div>
            </a>






            <a href="mailto:<?php the_field('texte_contact_2', 'option'); ?>">
                <div class="cardContact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <img alt="logo contact deux" class="imgHero" src="<?php the_field('logo_contact_2', 'option'); ?>">
                <p><?php the_field('texte_contact_2', 'option'); ?></p>
                </div>
            </a>





            <?php 
                $facebook = get_field('textecontact3', 'option');
                if( $facebook ): 
                    $facebook_url = $facebook['url'];
                    $facebook_title = $facebook['title'];
            ?>
            <a target="_blank" href="<?php echo esc_url( $facebook_url ); ?>">
                <div class="cardContact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <img alt="logo contact trois" class="imgHero" src="<?php the_field('logo_contact_3', 'option'); ?>">
               <p><?php echo esc_html( $facebook_title ); ?></p>
                <?php endif; ?>
                </div>
            </a>










            </div>
        
        </div>
    </section>