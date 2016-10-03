<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Your shopping cart");
  
  //$conn = db_connect();
  //$query = "SELECT * FROM stats", $quantity)";
  //$result = $conn->query($query);
  //var_dump($result);
  
  do_html_footer();
?>
