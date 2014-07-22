<ul>

<?php
  $i    = 0;
  $args = array(
    'post_type' => 'jurors',
    'order' => 'ASC'
  );
  $jurors = new WP_Query( $args );
  if( $jurors->have_posts() ) {
    while( $jurors->have_posts() ) { $jurors->the_post(); ?>
        <li class="juror-single row">
          <div class="large-4 columns <?php if ( $jurors->current_post%2 !== 0 ) { echo "fl-right"; } ?>"><?php echo get_the_post_thumbnail($page->ID, 'list-size'); ?></div>
          <div class="large-8 columns">
            <?php the_title( '<h4>', '</h4>' ); ?>
            <?php the_content() ?>
          </div>
        </li>
      <?php
    }
  }
  else {
    echo 'Ruh roh no jurors!';
  }
?>

</ul>