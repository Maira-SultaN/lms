<div class="pagetitle">
      <h1>Courses</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Courses</li>
   
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Courses</h5>

              <!-- No Labels Form -->
              <?php
  if (isset($_REQUEST['edit_courses'])) {
    $id = $_REQUEST['edit_courses'];
    $edit = mysqli_query($conn, "SELECT * FROM courses WHERE id = '$id'");
    @$pro_record =  mysqli_fetch_array($edit);
  }
  ?>
              <form class="row g-3" method="post">
                <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?=@$pro_record['name']?>" required>
                </div>
                <div class="col-md-12">
                <label for="inputState" class="form-label">Status</label>
               <select id="inputState" name="status" value="<?=@$pro_record['status']?>" class="form-select">
                 <option value="0">Select status</option>
                 <option value="enable"  <?php if (@$pro_record['status']== "enable") {echo "selected";}?>>Enable</option>
                 <option value="disable" <?php if (@$pro_record['status']== "disable") {echo "selected";}?>>Disable</option>
                 
              </select>
                </div>
      <input type="hidden" name= "id" value= "<?=@$pro_record['id']?>">
                <div class="text-center">
                  <button type="submit" name="add" class="btn btn-primary float-end">Add Course</button>
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
              <h5 class="card-title">Course data</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped" id="example">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                <?php
$result = mysqli_query($conn, "SELECT * FROM courses");
while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
      <td><?=$row['id']?></td>
     <td><?=$row['name']?></td>
     
        <td><?=$row['status']?></td>
        <td><a href="?delete_courses=<?=$row['id']?>" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i>Delete</a>
        <a href="?edit_courses=<?=$row['id']?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i>edit</a></td>
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