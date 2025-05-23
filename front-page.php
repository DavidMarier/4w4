<?php
/** 
 * modèle front-page.php permet d'afficher la page d'accueil
 * 
*/
?>

<?php get_header() ?>

<?php get_template_part('gabarit/hero'); ?>

    <!-- <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section> -->


    <section class="populaire">
        <div class="boiteflex global">
        
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (in_category('galerie')){
                the_content();
            } else { ?>         
            <?php get_template_part("gabarit/carte"); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

    </section>
 
    <!-- ////////////////////////////////////////////////  section rest-api -->
 
    <?php categories_liste("destination"); ?>
    <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>

    <?php generer_vague("#0099ff", "#fff"); ?>

    <?php get_footer(); ?>
</body>
</html>