<?php
    $erreur_titre = get_theme_mod('erreur_titre', 'Default Title');
    $erreur_description = get_theme_mod('erreur_description', 'Default Title');
    $erreur_background = get_theme_mod('erreur_background', 'Default Title');
    $erreur_couleur = get_theme_mod('erreur_couleur', 'Default Title');
    $erreur_couleur2 = get_theme_mod('erreur_bouton', '#fff200');
?>

<section class="erreur" style="background-image: url('<?php echo $erreur_background ?>'); background-repeat: no-repeat">
    <div class="erreur__contenu">
        <h1 class="erreur__titre" style="color: <?php echo $erreur_couleur ?>;">
            <?= $erreur_titre ?>
        </h1>
        <p class="erreur__description" style="color: <?php echo $erreur_couleur ?>;">
            <?= $erreur_description ?>
        </p>
        <a href="http://localhost:81/wordpress" class="erreur__accueil" style="background-color: <?php echo $erreur_couleur2 ?>;">Retour à l'accueil</a>
        <?php wp_nav_menu(array(
                    "menu"=> "erreur",
                    "container" => "nav",
                    "container_class" => "erreur__menu"
                )); ?>
        <form  class="recherche-erreur">
            <input class="recherche-erreur__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
        </form>
    </div>
</section>

<style>
    #menu-erreur li{
        background-color: <?php echo $erreur_couleur2 ?>;  
    }
    .recherche-erreur__input{
        border-bottom: 2px solid <?php echo $erreur_couleur2 ?>;
    }
    .recherche-erreur__input::placeholder{
        color: <?php echo $erreur_couleur2 ?>;
    }
</style>