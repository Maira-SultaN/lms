<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "lms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
function redirect($page, $time = 0)
{
    ?>
    <script>
        setTimeout(function() {
      window.location.href = "<?= $page?>";
    }, <?= $time?>);
    </script>
    <?php
}
function getMessage($msg, $sts, $title)
{
  if (!empty($msg)) {
    ?><script>
  swal({
          title: "<?= $title ?>",
          text: "<?= $msg ?>",
          type: "<?= $sts ?>",
          showCancelButton: false,
          confirmButtonClass: "btn-success",
          confirmButtonText: 'OK',
          closeOnConfirm: false
        });
  </script><?php
  }

    // echo '<div class="alert alert-' . $sts . '" role="alert">
    // <strong>' . $msg . ' </strong> 
    // </div>';
}

?>