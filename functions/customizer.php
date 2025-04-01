<?php
    function theme_31w_customize_register($wp_customize) {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        $wp_customize->add_section('hero_section', array(
          'title' => __('Hero Section', 'theme_31w'),
          'priority' => 30,
      ));
      //////////////////////////////////////////////////////// l'auteur
      $wp_customize->add_setting('hero_auteur', array(
        'default' => __('David Marier', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
      ));
      ////////////////////////////////////////////////// le courriel
      $wp_customize->add_setting('hero_courriel', array(
        'default' =>__('info@cmaisonneuve.qc.ca', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('hero_courriel', array(
        'label' => __('Courriel', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'link',
      ));
      
      ////////////////////////////////////////////////// image en background de la zone hero
      $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Image en background', 'theme_31w'),
        'section' => 'hero_section',
      )));
      ////////////////////////////////////////////////// couleur du texte de la zone hero
      $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
      )));
      
      //////////////////////////////////////////////////////// Nouvelle section footer
      
        $wp_customize->add_section('footer_section', array(
          'title' => __('Section pied de page', 'theme_31w'),
          'priority' => 30,
      ));
      ////////////////////////////////////////////////////////// Champ mission
      $wp_customize->add_setting('footer_mission', array(
        'default' => __('Mission du club de voyage', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'textarea',
      ));
      ///////////////////////////////////////////////////////// L'adresse
      $wp_customize->add_setting('footer_adresse', array(
        'default' => __('Adresse', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
      ));
      //////////////////////////////////////////////////////// Le téléphone
      $wp_customize->add_setting('footer_telephone', array(
        'default' => __('Telephone', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('footer_telephone', array(
        'label' => __('Telephone', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
      ));

      ////////////////////////////////////////////////////////////// Nouvelle section Erreur
      $wp_customize->add_section('erreur_section', array(
        'title' => __('Erreur Section', 'theme_31w'),
        'priority' => 30,
      ));
      // Titre
      $wp_customize->add_setting('erreur_titre', array(
        'default' => __('Titre', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('erreur_titre', array(
        'label' => __('Titre', 'theme_31w'),
        'section' => 'erreur_section',
        'type' => 'text',
      ));
      // Description
      $wp_customize->add_setting('erreur_description', array(
        'default' => __('Description', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('erreur_description', array(
        'label' => __('Description', 'theme_31w'),
        'section' => 'erreur_section',
        'type' => 'text',
      ));
      // Background
      $wp_customize->add_setting('erreur_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
        'label' => __('Image en background', 'theme_31w'),
        'section' => 'erreur_section',
      )));

      }
      
      add_action('customize_register', 'theme_31w_customize_register');
?>