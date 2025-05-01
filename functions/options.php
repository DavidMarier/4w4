<?php

function mon_theme_supports() {

  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-height' => true,
    'flex-width'  => true,
));

}
add_action( 'after_setup_theme', 'mon_theme_supports' );


function theme_4w4_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');  
wp_enqueue_style('mon-style-style', get_stylesheet_uri()); 

wp_enqueue_script(
  'destination_restapi',
  get_template_directory_uri() . '/js/destination.js',
  array(),
  filemtime(get_template_directory() . 
  '/js/destination.js'),
  true
);

wp_enqueue_script(
  'carrousel.js',
  get_template_directory_uri() . '/js/carrousel.js',
  array(),
  filemtime(get_template_directory() . 
  '/js/carrousel.js'),
  true
);

}

/* 
*/
add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');






/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */


function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );



function generer_vague($couleur){
  ?> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur ?>" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,138.7C240,128,300,64,360,74.7C420,85,480,171,540,218.7C600,267,660,277,720,250.7C780,224,840,160,900,154.7C960,149,1020,203,1080,202.7C1140,203,1200,149,1260,144C1320,139,1380,181,1410,202.7L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg><?php
}

?>

