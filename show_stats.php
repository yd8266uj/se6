<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Database Statistics");
  $result =get_statistics();
printf("Categories: %d<br>\n",$result["categories_count"]);
printf("Total Number of Books: %d<br>\n",$result["books_count"]);
printf("Total Cost of the Books: %d<br>\n",$result["books_total_cost"]);
printf("Average Cost of the Book: %d<br>\n",$result["books_average_cost"]);
 
  do_html_footer();
?>
