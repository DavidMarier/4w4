<?php  
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$hero_background = get_theme_mod('hero_background', 'Default Title'); 
$couleur = get_theme_mod('couleur', 'Default Title');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
?>
<section class="hero" style="background-image: url('<?php echo $hero_background ?>'); background-repeat: no-repeat" >
    <div class="hero__contenu">
        <h1 class="hero__titre">
            <?php  bloginfo('name'); ?>
        </h1>
        <p class="hero__description">
        <?php  bloginfo('description'); ?>
        </p>
        <a href="" class="hero__courriel">
            <?= $hero_courriel ?>
        </a>
        <button class="hero__bouton">
            Inscription
        </button>
        <?php get_template_part('gabarit/icone-sociaux'); ?>
        <p class="hero__auteur">Auteur:<?php echo $hero_auteur;  ?></p>
    </div>
</section>