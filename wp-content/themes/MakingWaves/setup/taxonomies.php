<?php
  /* <<<< TAXONOMIES >>>> */

  // Include core
  require_once(ABSPATH. 'wp-config.php');
  require_once(ABSPATH. 'wp-includes/wp-db.php');
  require_once(ABSPATH. 'wp-admin/includes/taxonomy.php');

  // Cats for locations
  // ---- Drop cat ----
  // wp_delete_category( $cat_ID );
  add_action( 'init', 'build_taxonomies', 0 );

  function build_taxonomies() {
    //wp_create_category('Atlanta');
  }

?>