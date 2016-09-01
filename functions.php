<?php 
//Add menu
function register_my_menu() {
  register_nav_menu('main-nav',__( 'Main Nav' ));
}
add_action( 'init', 'register_my_menu' );

//custom excerpt
function custom_excerpt_more($more) {
return "&hellip;";
}
add_filter('excerpt_more', 'custom_excerpt_more');
//change the number of words in excerpt

function the_excerpt_max_charlength($charlength) {
  $excerpt = get_the_excerpt();
  $charlength++;

  if ( mb_strlen( $excerpt ) > $charlength ) {
    $subex = mb_substr( $excerpt, 0, $charlength - 5 );
    $exwords = explode( ' ', $subex );
    $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
    if ( $excut < 0 ) {
      echo mb_substr( $subex, 0, $excut );
    } else {
      echo $subex;
    }
    echo '&hellip;';
  } else {
    echo $excerpt;
  }
}