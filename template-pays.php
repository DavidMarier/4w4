<?php
/*
Template Name: Pays
*/
//evenement
?>
<?php get_header(); ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
             
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>


                <p>Introduction: <?php the_field('introduction') ?></p>
                <p>Le conférencier est : <?php the_field('conferencier_evenement') ?></p>
                <p>Date et heure: <?php the_field('date_evenement'); ?>
                <p>Lieu: <?php the_field('lieu_evenement')?></p>

            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>