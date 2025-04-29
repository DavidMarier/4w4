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

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,138.7C240,128,300,64,360,74.7C420,85,480,171,540,218.7C600,267,660,277,720,250.7C780,224,840,160,900,154.7C960,149,1020,203,1080,202.7C1140,203,1200,149,1260,144C1320,139,1380,181,1410,202.7L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>

    <?php get_footer(); ?>
</body>
</html>