<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="<?php echo get_template_directory_uri(); ?>" alt="logo voyage" width="100" height="75">
            </figure>
            <label for="chk__burger" class="burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label>
            <input type="checkbox" id="chk__burger" class="chk__burger">
            <div class="entete__nav">
                <nav class="entete__menu"></nav>
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">SPORT</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">PLEINE NATURE</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">CROISIÈRE</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">AVENTURE</a>
                        <li class="menu__li">
                        <li class="menu__li">
                            <a class="menu__a" href="#">CULTUREL</a>
                        <li class="menu__li">
                        <li class="menu__li">
                            <a class="menu__a" href="#">REPOS</a>
                        <li class="menu__li">
                        <li class="menu__li">
                            <a class="menu__a" href="#">ZEN</a>
                        <li class="menu__li">
                        <li class="menu__li">
                            <a class="menu__a" href="#">ÉCONOMIQUE</a>
                        <li class="menu__li">
                        <li class="menu__li">
                            <a class="menu__a" href="#">FAVORITE</a>
                        <li class="menu__li">
                        <li class="menu__li">
                            <a class="menu__a" href="#">PAYS</a>
                        <li class="menu__li">
                    </ul>
                <div class="entete__recherche">
                    <form class="recherche">
                        <input type="text" class="recherche__input">
                        <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>