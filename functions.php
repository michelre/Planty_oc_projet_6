<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action('afficher_admin_si_connecte', 'ajouter_lien_admin');
function ajouter_lien_admin() {
    if(is_user_logged_in()) {
        echo '<a href="'. admin_url() .'" class="admin-link">Admin</a>';
    }
}



?>