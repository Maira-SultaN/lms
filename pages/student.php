<div class="pagetitle">
      <h1>Students</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Students</li>
   
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Students</h5>

              <!-- No Labels Form -->
              <?php
  if (isset($_REQUEST['edit_student'])) {
    $id = $_REQUEST['edit_student'];
    $edit = mysqli_query($conn, "SELECT * FROM student WHERE id = '$id'");
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
                                <label for="inputState" class="form-label">Batch</label>
    <select id="inputState" name="batch" value="<?=@$pro_record['batch']?>" class="form-select">
    <option value="0">Select batch</option>
                 <?php
                 $cat = mysqli_query($conn,"SELECT * FROM batch ");
                 while ($data = mysqli_fetch_assoc($cat)) {
                ?>
                <option value="<?= $data['name']?>" <?php if (@$pro_record['batch']== $data['name']) {echo "selected";}?>><?= $data['name']?></option>
                <?php
                 }
                 ?>
    </select>

    </div>

      <input type="hidden" name= "id" value= "<?=@$pro_record['id']?>">
                <div class="text-center">
                  <button type="submit" name="add_student" class="btn btn-primary float-end">Add student</button>
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
              <h5 class="card-title">Student data</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped" id="example">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                <?php
$result = mysqli_query($conn, "SELECT * FROM student");
while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
      <td><?=$row['id']?></td>
     <td><?=$row['name']?></td>
     <td><?=$row['email']?></td>
    <td><?=$row['password']?></td>
    <td><?=$row['batch']?></td>
        <td><a href="?delete_student=<?=$row['id']?>" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i>Delete</a>
        <a href="?edit_student=<?=$row['id']?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i>edit</a></td>
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