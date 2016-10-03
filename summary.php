<?php
/**
 * Created by PhpStorm.
 * User: robo
 * Date: 10/2/16
 * Time: 8:19 PM
 */

  include ('book_sc_fns.php');
  include ('Summarize.php');
  // The shopping cart needs sessions, so start one
  session_start();
  do_html_header("Welcome to Book-O-Rama");

  print "<h2>Inventory Summary</h2>";

  $obj = new Summarize();

  print "<p>Total Number of Categories: ". $obj->getNumCategories(). "</p>";
  print "<p>Total Number of Books: ". $obj->getNumBooks(). "</p>";
  print "<p>Total Cost of Books: ". $obj->getTotalBookCost(). "</p>";
  print "<p>Average Cost of Books: ";
  printf("%.2f", $obj->getAvgBookCost());
  print " </p>";

  // if logged in as admin, show add, delete, edit cat links
  if(isset($_SESSION['admin_user'])) {
      display_button("admin.php", "admin-menu", "Admin Menu");
  }
  do_html_footer();
