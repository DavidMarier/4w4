<?php  
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$couleur = get_theme_mod('couleur', 'Default Title');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
$nombreImages = get_theme_mod('nombre_images', 3);


for ($k=0; $k<$nombreImages; $k++){
$hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
}
?>
<section class="hero">
    <!-- ///////////////////////////////////////////////// hero__carrousel -->
    <?php foreach ($hero_background as $index => $background): ?>
        <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($background); ?>');"></div>
    <?php endforeach; ?>

    <div class="hero__radio">
        <?php foreach ($hero_background as $index => $background): ?>
            <input 
                class="hero__radio__input" 
                type="radio" 
                name="carrousel" 
                data-id_carrousel="<?php echo $index; ?>" 
                <?php echo $index == 0 ? 'checked="checked"' : ''; ?>
            >
        <?php endforeach; ?>
    </div>
    <!-- ///////////////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global">
        <div class="hero__animation">
            <h1 class="hero__titre">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            </p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre">
                Lorem ipsum dolor sit amet.
            </h1>
            <p class="hero__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing.
            </p>
        </div>
        <a href="" class="hero__courriel">
            <?php echo $hero_courriel;  ?></p>
        </a>
        <button class="hero__bouton">
            Inscription
        </button>
        <div class="hero__icone-app">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
        </div>
        <p>Auteur:<?php echo $hero_auteur;  ?></p>
        </div>
    </section>

