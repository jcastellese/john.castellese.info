 <?php 
  function enqueue_theme_scripts() {
    if (!is_admin()) {
      wp_enqueue_style('main', get_template_directory_uri() . '/style.css', false, null, 'screen');


    }
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

  ?>