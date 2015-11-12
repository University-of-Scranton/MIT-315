<?php
  function check_isset( $variable ) {
    if ( isset( $variable ) ) {
      echo '<p>It is set</p>';
    } else {
      echo '<p>Nope!</p>';
    }
  }
  $a = '';
  $b = null;
  $c = "Hello World";

  check_isset( $a );
  check_isset( $b );
  check_isset( $c );
  check_isset( $d );


?>
