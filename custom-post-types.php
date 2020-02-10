<?php
/**
* ......................
*/

/**
 * Enrégistrer un type de post personnalisé
 *
 * Pour comprendre d'où provient les clés des labels essaie de rgarder du côté
 * de la fonction get_post_type_labels().
 */

function jma_events_custom_post_type() {
    $labels = array(
        'name'                  => _x( 'Evènements', 'Le nom du post personalisé', 'textdomain' ),
        'singular_name'         => _x( 'Evènement', 'Nom singulier du type de poste', 'textdomain' ),
        'menu_name'             => _x( 'Evènements', 'Le texte du menu Admin', 'textdomain' ),
        'name_admin_bar'        => _x( 'Evènement', 'Nouvel ajout au niveau de la barre d\'outils ', 'textdomain' ),
        'add_new'               => __( 'Ajouter', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un nouvel évènement', 'textdomain' ),
        'new_item'              => __( 'Nouvel évènement', 'textdomain' ),
        'edit_item'             => __( 'Modifier l\'évènement', 'textdomain' ),
        'view_item'             => __( 'Voir l\'évènement', 'textdomain' ),
        'all_items'             => __( 'Tous les évènements', 'textdomain' ),
        'search_items'          => __( 'Rechercher des évènements', 'textdomain' ),
        'parent_item_colon'     => __( 'Evènement parent:', 'textdomain' ),
        'not_found'             => __( 'Acun évènement trouvé', 'textdomain' ),
        'not_found_in_trash'    => __( 'Aucun évènement rouvé dans la corbeille', 'textdomain' ),
        'featured_image'        => _x( 'Image de couverture l\'évènement', 'textdomain' ),
        'set_featured_image'    => _x( 'Définir une image de couverture de l\'évènement', 'textdomain' ),
        'remove_featured_image' => _x( 'Enlever l\'image de couverture l\'évènement', 'textdomain' ),
        'use_featured_image'    => _x( 'Utiliser en tant qu\'image de couverture', 'textdomain' ),
        'archives'              => _x( 'Archives des évènements', 'textdomain' ),
        'insert_into_item'      => _x( 'Insérer dans l\'évènement', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploadeer dans cet évènement','textdomain' ),
        'filter_items_list'     => _x( 'Filtrer la liste des évènements','textdomain' ),
        'items_list_navigation' => _x( 'Navigation de la liste des évènements','textdomain' ),
        'items_list'            => _x( 'Liste des évènements', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'evenements' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        // Les clés par défaut dans le core de Wordpress
        // supports          => array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats') 
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'Evènements', $args );
}
 
add_action( 'init', 'jma_events_custom_post_type' );
