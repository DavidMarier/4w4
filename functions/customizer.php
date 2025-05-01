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
      $nombreImages = get_theme_mod('nombre_images', 3);
      
      for ($k = 0; $k < $nombreImages; $k++) {
        $wp_customize->add_setting("hero_background_$k", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "hero_background_$k", array(
            'label' => sprintf(__('Image en background %d', 'theme_31w'), $k + 1),
            'section' => 'hero_section',
        )));
      }

      /// nombre d'images dans le carrousel
      $wp_customize->add_setting( 'nombre_images', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'default' => $nombreImages,
      ) );
      
      $wp_customize->add_control( 'nombre_images', array(
        'type' => 'number',
        'section' => 'hero_section',
        'label' => __( 'Nombre' ),
      ) );

      function nombre_images( $nombre, $setting ) {
        $nombre = absint( $nombre );
        return ( $nombre ? $nombre : $setting->default );
      }
      ////////////////////////////////////////////////// couleur du texte de la zone hero
      $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
      )));

      ////////////////////////////////////////////////// icônes sociales
      $nombre_icones = get_theme_mod('nombre_icones', 4);

      for ($k = 0; $k < $nombre_icones; $k++) {
        $wp_customize->add_setting("section_sociale_image_$k", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "section_sociale_image_$k", array(
            'label' => sprintf(__('Icônes sociales (Image) %d', 'theme_31w'), $k + 1),
            'section' => 'hero_section',
        )));
    
        $wp_customize->add_setting("section_sociale_lien_$k", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        $wp_customize->add_control("section_sociale_lien_$k", array(
            'label' => sprintf(__('Icônes sociales (Lien) %d', 'theme_31w'), $k + 1),
            'section' => 'hero_section',
            'type' => 'url',
        ));
    }

      ////// nombre d'icônes sociales
      $wp_customize->add_setting( 'nombre_icones', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint',
        'default' => $nombre_icones,
      ) );
      
      $wp_customize->add_control( 'nombre_icones', array(
        'type' => 'number',
        'section' => 'hero_section',
        'label' => __( 'Nombre' ),
      ) );

      function nombre_icones( $nombre, $setting ) {
        $nombre = absint( $nombre );
        return ( $nombre ? $nombre : $setting->default );
      }

      
      //////////////////////////////////////////////////////// Nouvelle section footer
      
        $wp_customize->add_section('footer_section', array(
          'title' => __('Section pied de page', 'theme_31w'),
          'priority' => 30,
      ));

      //// image du footer

      $wp_customize->add_setting('footer_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_background', array(
        'label' => __('Image en background', 'theme_31w'),
        'section' => 'footer_section',
      )));
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
      // Couleur du texte
      $wp_customize->add_setting('erreur_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'erreur_section',
      )));
      // Couleur des boutons et recherche
      $wp_customize->add_setting('erreur_bouton', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_bouton', array(
        'label' => __('Couleur des boutons', 'theme_31w'),
        'section' => 'erreur_section',
      )));

      }
      
      add_action('customize_register', 'theme_31w_customize_register');
?>