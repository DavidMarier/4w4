<?php  
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$couleur = get_theme_mod('couleur', 'Default Title');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
$nombre_images = get_theme_mod('nombre_images', 3);
$nombre_icones = get_theme_mod('nombre_icones', 4);

for ($k = 0; $k < $nombre_icones; $k++) {
    $section_sociale_image[$k] = get_theme_mod("section_sociale_image_".$k, '');
    $section_sociale_lien[$k] = get_theme_mod("section_sociale_lien_".$k, '');
} 

for ($k=0; $k<$nombre_images; $k++){
$hero_backgrounds[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
}
?>
<section class="hero">
    <!-- ///////////////////////////////////////////////// hero__carrousel -->
    <?php foreach ($hero_backgrounds as $background): ?>
        <div class="hero__carrousel" style="background-image: url('<?php echo esc_url($background); ?>');"></div>
    <?php endforeach; ?>

    <div class="hero__radio">
        <?php foreach ($hero_backgrounds as $background): ?>
            <label for="">
                <input 
                    class="hero__radio__input" 
                    type="radio" 
                    name="carrousel" 
                    data-id_carrousel="<?php echo $index; ?>" 
                >
            </label>
        <?php endforeach; ?>
    </div>
    <!-- ///////////////////////////////////////////////// hero__contenu -->
    <div class="hero__contenu global">
    <?php for ($i = 0; $i < $nombre_images; $i++): ?>
        <div class="hero__animation">
            <h1 class="hero__titre">
                <?php bloginfo("name"); ?>
            </h1>
            <p class="hero__description">
                <?php bloginfo("description"); ?>
            </p>
        </div>
    <?php endfor; ?>
        <a href="" class="hero__courriel">
            <?php echo $hero_courriel;  ?></p>
        </a>
        <button class="hero__bouton">
            Inscription
        </button>
        <div class="hero__icone-app">
            <?php for ($i = 0; $i< $nombre_icones; $i++): ?>
                <a href="<?php echo esc_url($section_sociale_lien[$i]); ?>">
                    <img src="<?php echo esc_url($section_sociale_image[$i]); ?>" alt="icone">
                </a>
            <?php endfor; ?>
        </div>
        <p>Auteur:<?php echo $hero_auteur;  ?></p>
        </div>
    </section>

