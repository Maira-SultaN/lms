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

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      </div>
    </section>

  </main><!-- End #main -->

  <?php
  include_once('inc/footer.php');
  ?>
</body>

</html>