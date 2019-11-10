<?php 

//Cria o Post Tipo conteudos
function create_redes_post_types() {
  register_post_type( 'redes',
      array(
          'labels' => array(
              'name' => __( 'Redes' ),
              'singular_name' => __( 'Redes' )
          ),
          'public' => true,
          'hierarchical' => true,
          'show_ui' => true,
          'publicly_queryable' => true,
          'exclude_from_search' => true,
          'menu_icon' => 'dashicons-images-alt',
          'supports' => array( 'title'),
          'rewrite' => array('slug' => 'redes', 'with_front' => false),
      )
  );
}
add_action( 'init', 'create_redes_post_types' );

function my_admin_menu_redes() { 
  add_submenu_page('options-general.php', 'Redes Sociais', 'Redes Sociais', 'manage_options', 'edit.php?post_type=redes'); 
}  
add_action('admin_menu', 'my_admin_menu_redes'); 

function remove_menus_redes() {
  remove_menu_page( 'edit.php?post_type=redes' );
}
add_action( 'admin_menu', 'remove_menus_redes' );


function get_redes() {

  $arr = array(
    'post_type' => 'redes',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC'
  );

  $query = new WP_Query($arr);
  $dados = [];

  while ($query->have_posts()) {
      $query->the_post();
      $post_id = get_the_ID();
      $dados[] = array(
        'link' => get_dados('url', $post_id),
        'imagem' => get_dados('imagem', $post_id)
      );
  } 

  return $dados;
}