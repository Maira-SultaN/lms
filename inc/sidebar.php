<?php if (!empty($_REQUEST['nav'])) {
	$get_nav=$_REQUEST['nav'];
}else{
	$get_nav='home';
} 
	$page="pages/".$get_nav.".php";
?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="dashboard.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Manage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li>
                <a href="dashboard.php?nav=course">
                    <i class="bi bi-circle"></i><span>Courses</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?nav=batch">
                    <i class="bi bi-circle"></i><span>Batch</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?nav=student">
                    <i class="bi bi-circle"></i><span>Students</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?nav=teacher">
                    <i class="bi bi-circle"></i><span>Teachers</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?nav=home">
                    <i class="bi bi-circle"></i><span>home</span>
                </a>
            </li>

        </ul>
    </li><!-- End Forms Nav -->


  <li class="nav-heading">Pages</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->
<?php
            getMessage(@$msg, @$sts, @$title);
            ?>