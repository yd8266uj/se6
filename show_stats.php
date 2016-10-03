<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Database Statistics");
  
  $conn = db_connect();
  $query = "SELECT * FROM stats";
  $result = $conn->query($query);
  echo $result['categories_count'];
  
  do_html_footer();
?>
