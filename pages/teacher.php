

<div class="pagetitle">
  <h1>Teachers</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Teachers</li>

    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Teachers</h5>

          <!-- No Labels Form -->
          <?php
if (isset($_REQUEST['edit_teacher'])) {
$id = $_REQUEST['edit_teacher'];
$edit = mysqli_query($conn, "SELECT * FROM teacher WHERE id = '$id'");
@$pro_record =  mysqli_fetch_array($edit);
}
?>
          <form class="row g-3" method="post">
            <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?=@$pro_record['name']?>" required>
            </div>
            <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?=@$pro_record['email']?>" required>
            </div>
            <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?=@$pro_record['password']?>" required>
            </div>

            <div class="col-md-12">
                            <label for="exampleFormControlTextarea1"  class="form-label">Address</label>
        <textarea class="form-control" name="address" value="<?=@$pro_record['address']?>" id="exampleFormControlTextarea1" rows="3"><?=@$pro_record['address']?></textarea>
                            </div>


  <input type="hidden" name= "id" value= "<?=@$pro_record['id']?>">
            <div class="text-center">
              <button type="submit" name="add_teacher" class="btn btn-primary float-end">Add Teacher</button>
            </div>
          </form><!-- End No Labels Form -->

        </div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Teacher data</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped" id="example">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">address</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
            <?php
$result = mysqli_query($conn, "SELECT * FROM teacher");
while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
  <td><?=$row['id']?></td>
 <td><?=$row['name']?></td>
 <td><?=$row['email']?></td>
<td><?=$row['password']?></td>
<td><?=$row['address']?></td>
    <td><a href="?delete_teacher=<?=$row['id']?>" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i>Delete</a>
    <a href="?edit_teacher=<?=$row['id']?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i>edit</a></td>
  </tr>
  <?php
}
?>

            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>