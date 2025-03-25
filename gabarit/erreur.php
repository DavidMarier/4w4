<?php
    $erreur_titre = get_theme_mod('erreur_titre', 'Default Title');
    $erreur_description = get_theme_mod('erreur_description', 'Default Title');
?>

<section class="erreur">
    <div class="erreur__contenu">
        <h1 class="erreur__titre">
            <?= $erreur_titre ?>
        </h1>
        <p class="erreur__description">
            <?= $erreur_description ?>
        </p>
        <?php get_template_part('gabarit/icone-sociaux'); ?>
    </div>
</section>