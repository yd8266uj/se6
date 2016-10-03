<?php
  include ('book_sc_fns.php');
  // The shopping cart needs sessions, so start one
  session_start();

  do_html_header("Database Statistics");
  $result =get_statistics();
printf("Categories: %d<br>\n",$result["categories_count"]);
printf("Total Number of Books: %d<br>\n",$result["books_count"]);
printf("Total Cost of the Books: %f<br>\n",$result["books_total_price"]);
printf("Average Cost of the Book: %f<br>\n",$result["books_average_price"]);
 
  do_html_footer();
?>
