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



function generer_vague($couleur, $couleur2){
  ?> <svg 
  xmlns="http://www.w3.org/2000/svg" 
  class="vague"
  style="top:10px; background-color: <?= $couleur2 ?>;"
  viewBox="0 0 1440 320">
      <path 
          fill="<?= $couleur ?>" 
          fill-opacity="1" 
          d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,154.7C672,149,768,203,864,213.3C960,224,1056,192,1152,176C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
  </svg><?php
}
function generer_vague2($couleur, $couleur2){
  ?> <svg 
  xmlns="http://www.w3.org/2000/svg" 
  class="vague"
  style="top:10px; background-color: <?= $couleur2 ?>;"
  viewBox="0 0 1440 320">
      <path 
          fill="<?= $couleur ?>" 
          fill-opacity="1" 
          d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,154.7C672,149,768,203,864,213.3C960,224,1056,192,1152,176C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
  </svg><?php
}

?>

