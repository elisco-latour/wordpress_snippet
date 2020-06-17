<?php
/**
Selectionner des posts bases sur un tag specifique 
Exemple ici" peche
*/
// Specifier les arguments de la requete
$args = array('tag' => 'peche',);

// Il est possible que le tag soit référencé par son id
// par exemple avec une etiquette dont le id = 15
// $agrs = array('tag' => 15);

// Exectuter la requete et sauvagarder la reponse dans $query
$query = new WP_Query($args);

// Utiliser la boucle de Wordpress pour afficher les resultats
// The Loop
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
/* Restore original Post Data */
wp_reset_postdata();

