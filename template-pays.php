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
<?php generer_vague("#84eaff ", "#d9f9ff "); ?>

<section class="menu-pays" style="background-color: #d9f9ff;">
    <div class="global">
        <ul class="menu-pays__liste">
        <?php
            $pays = [
                "france" => "France",
                "etats-unis" => "États-Unis",
                "canada" => "Canada",
                "argentine" => "Argentine",
                "chili" => "Chili",
                "belgique" => "Belgique",
                "maroc" => "Maroc",
                "mexique" => "Mexique",
                "japon" => "Japon",
                "italie" => "Italie",
                "islande" => "Islande",
                "chine" => "Chine",
                "grece" => "Grèce",
                "suisse" => "Suisse"
            ];
            ?>
            <?php foreach ($pays as $slug => $nom) : ?>
                <li class="menu-pays__item">
                    <button class="menu-pays__bouton" data-pays="<?php echo esc_attr($slug); ?>">
                        <?php echo esc_html($nom); ?>
                    </button>
                </li>
        <?php endforeach; ?>
        </ul>

        <section class="destinations">
            <div class="global destinations__contenu">
                <p></p>
            </div>
        </section>


    </div>
</section>

<?php
function enqueue_destination_script() {
    wp_enqueue_script('destination-js', get_template_directory_uri() . '/js/destination.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_destination_script');
?>



<?php generer_vague2("#84eaff ", "#d9f9ff"); ?>
<?php get_footer(); ?>
