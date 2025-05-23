<?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
    $footer_image = get_theme_mod('footer_background', 'Default Title');
    
    ?>

<footer>
    <div class="piedpage">
        <section class="piedpage__s1">
            <img class="image__footer" src="<?php echo esc_url($footer_image); ?>" alt="">
            <div class="piedpage__liens">
                <?php wp_nav_menu(array(
                        "menu"=> "externe",
                        "container" => "nav",
                        "container_class" => "piedpage__s1__externe"
                    )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <?= $footer_adresse ?>
                    <?= $footer_telephone ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?= $footer_mission; ?>
            </div>
        </section>
        <section class="piedpage__s2">
            <div class="piedpage__s2__liens">
                <?php wp_nav_menu(array(
                    "menu"=> "principal",
                    "container" => "nav",
                    "container_class" => "piedpage__s2__principal"
                )); ?>
                Lien vers le dépôt github : <a href="https://github.com/DavidMarier/4w4/tree/tp2">Github</a> 
            </div>
        </section>
      
        


    </div>
</footer>
<?php wp_footer() ?>

<script>

function ajusterFooter() {
    const footer = document.querySelector("footer");

    const hauteurBody = document.body.offsetHeight;
    const hauteurFenetre = window.innerHeight;

    const espace = hauteurFenetre - hauteurBody;

    if (espace > 0) {
        footer.style.marginTop = `${espace}px`;
    } 
}

window.addEventListener("load", ajusterFooter);
window.addEventListener("resize", ajusterFooter);

</script>