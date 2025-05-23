<?php get_header(); ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
            <?php
                if (has_post_thumbnail()) {
                the_post_thumbnail('large'); }
            ?>  
                <h2><?php the_title(); ?></h2>
                <div><?php the_content() ?>
                <?php the_category(); ?>
                <?php  $tableau = get_the_category(); 
                ?>
                <p>Température maximum: <?php the_field('temperature_maximum') ?>&#176;C</p>
                <p>Température minimum: <?php the_field('temperature_minimum') ?>&#176;C</p>
                <p>Température moyenne: <?php the_field('temperature_moyenne') ?>&#176;C</p>
            <?php endwhile; endif; ?>
            <p>Auteur: David Marier</p>
            <p>Date de publication : <?php echo get_the_date(); ?></p>
        </div>
    </section>
    <?php generer_vague("#0099ff", "#fff"); ?>
    <?php get_footer(); ?>
   
</body>
</html>