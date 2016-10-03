<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Database Statistics");
  

 echo "<p>Please choose a category:</p>";

  $result =get_statistics();
  echo $result[0];
  
  do_html_footer();
?>
