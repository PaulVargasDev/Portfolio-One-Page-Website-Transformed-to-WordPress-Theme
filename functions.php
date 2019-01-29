<?php
function vargasdevScripts() {
wp_enqueue_style('vargasdev_style', get_stylesheet_uri());
wp_enqueue_style('vargasdev_lightboxstyle', get_theme_file_uri('/styles/lightbox.min.css'));
wp_enqueue_style('vargasdev_googlefonts', '//fonts.googleapis.com/css?family=Raleway');

wp_enqueue_script('vargasdev_mainjs', get_theme_file_uri('/scripts/main.js'), NULL, '1.0', TRUE); 
wp_enqueue_script('vargasdev_jquery', '//code.jquery.com/jquery-3.3.1.min.js', NULL, '1.0', FALSE);
wp_enqueue_script('vargasdev_particles', '//cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', NULL, '1.0', TRUE);
wp_enqueue_script('vargasdev_lightboxjs', get_theme_file_uri('/scripts/lightbox.min.js'), NULL, '1.0', TRUE); 
// wp_enqueue_script('vargasdev_particlesFunction', 'particlesJS.load('particles-js', '/scripts/particlesjs-config.json', 
// function(){
//     console.log(`particles.json loaded`);
// })', NULL, '1.0', TRUE); 

}

add_action('wp_enqueue_scripts', 'vargasdevScripts');

?>