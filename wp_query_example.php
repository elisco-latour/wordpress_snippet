<?php
/**
Selectionner des articles relatifs a un autre en via l'etiquette de ce poste
*/

// Recuperer l'ID de l'article courant
$current_post_ID = get_the_ID();

// Recuperer l'etiauette liee a cet article
// get_the_tags() retourne normalement un tableau de tous les etiquettes du poste courant
// Ici nous recuperons juste le premier element de ce tableau en se basant sur le fait 
// Qu'il n'y a qu'une seule etiquette par article
$current_post_tag = get_the_tags($current_post_ID)[0];

// Specifier les arguments de la requete
$args = array('tag' => $current_post_tag,);

// Il est possible que le tag soit référencé par son id
// par exemple avec une etiquette dont le id = 15
// $agrs = array('tag' => 15);

// Exectuter la requete et sauvagarder la reponse dans $query
$query = new WP_Query($args);

// Utiliser la boucle de Wordpress pour afficher les resultats
]]
    
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // Aucun article trouber
}
/* Rester le contenu original */
wp_reset_postdata();

