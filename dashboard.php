<!DOCTYPE html>
<html lang="en">

<head>
<title>Dashboard</title>
<?php
  include_once('inc/header.php');
  ?>
</head>

<body>

  <!-- ======= Header ======= -->
 <?php include ('inc/head.php') ; ?>
  <!-- End Header -->

  <?php
  include('inc/sidebar.php');
  ?>

  <main id="main" class="main">
<?php
include_once $page;
?>
   
  </main><!-- End #main -->

  <?php
  include_once('inc/footer.php');
  ?>
</body>

</html>