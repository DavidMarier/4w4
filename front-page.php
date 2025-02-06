<?php get_header(); ?>
<h1>front-page.php</h1>
    <section class="hero">
        <div class="hero__contenu">
            <h1 class="hero__titre">
                <?php echo bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
                Découvrez des destinations uniques et innoubliables avec Voyage Sérénité.
                Nous vous offrons des expériences authentiques, des paysages à couper le
                souffle et des aventures sur mesure. Partez à la découverte du monde avec
                nous et créez des souvenirs imperissables.
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <p class="hero__telephone">
                524-254-7131
            </p>
            <button class="hero__bouton">
                S'inscrire
            </button>
            <div class="hero__icone-app">
                <img class="social" src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img class="social" src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img class="social" src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img class="social" src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>

    <section class="inscription">
        <form class="nom inscription__formulaire">
            Nom
            <input type="text" class="inscription__input" placeholder="Écrivez votre nom">
        </form>
        <form class="prenom inscription__formulaire">
            Prénom
            <input type="text" class="inscription__input" placeholder="Écrivez votre prénom">
        </form>
        <form class="courriel inscription__formulaire">
            Courriel
            <input type="text" class="inscription__input" placeholder="Écrivez votre courriel">
        </form>
        <form class="telephone inscription__formulaire">
            Téléphone
            <input type="text" class="inscription__input" placeholder="Écrivez votre téléphone">
        </form>
        <button class="inscription__bouton">
            S'inscrire
        </button>
    </section>

    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>

    <section class="promotion">
        <div class="carte carte--grande">
            <figure class="carte__image">
              <img src="images/paysages/img1.jpg" alt="Image de voyage1">
              <img src="images/paysages/img2.jpg" alt="Image de voyage2">
              <img src="images/paysages/img3.jpg" alt="Image de voyage3">
              <img src="images/paysages/img4.jpg" alt="Image de voyage4">
              <img src="images/paysages/img5.jpg" alt="Image de voyage5">
              <img src="images/paysages/img6.jpg" alt="Image de voyage6">
              <img src="images/paysages/img7.jpg" alt="Image de voyage7">
              <img src="images/paysages/img8.jpg" alt="Image de voyage8">
              <img src="images/paysages/img9.jpg" alt="Image de voyage9">
              <img src="images/paysages/img10.jpg" alt="Image de voyage10">
            </figure>
            <div class="carte__contenu">
              <h2 class="carte__titre">Nos destinations favorites</h2>
              <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
              <button class="carte__bouton carte__bouton--actif">Réserver</button>
            </div>
          </div>
    </section>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="populaire__contenu"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
</body>
</html>