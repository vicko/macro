<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function registrar_sidebar(){
  register_sidebar(array(
   'name' => 'Sidebar notariado',
   'id' => 'sidebar-notariado',
   'description' => 'Columna de menu del teatro',
   'class' => 'sidebar',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => '</aside>',
   'before_title' => '<h2 class="widget-title">',
   'after_title' => '</h2>',
  ));
}
add_action( 'widgets_init', 'registrar_sidebar');






?>
