<?php wp_footer(); ?>



<footer>
    
    <div class="boxTextFooter">
    <img alt="logo footer" src="<?php echo get_field('logo_footer', 'option')['sizes']['large']; ?>">

        <?php while( have_rows('jours', 'option') ): the_row();?>
            <div class="boxHoraire">
                <p class="footerJour"><?= get_sub_field( 'jour' )?></p>
                <?php while( have_rows('heures', 'option') ): the_row();?>
                    <p class="footerHeure"><?= get_sub_field( 'heure' )?></p>
                <?php endwhile; ?>
            </div>
        <?php endwhile; ?>

    </div>
    <div class="BoxMention">
    <a href="<?php echo home_url();?>/mentionslegales" title="mentions légales">Mentions légales</a>
    </div>
            
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>
