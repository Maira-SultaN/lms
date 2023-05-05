<?php
include_once('function.php');
if (isset($_REQUEST['login'])) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $query = "SELECT email, password FROM admin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $check = mysqli_num_rows($result);
    echo $check;
if ($check == 1) {
  $_SESSION['email'] = $email;
$_SESSION['password'] = $password;
redirect("dashboard.php", 3000);

}else{
  echo "invalid";
}
 
}

// courses
if (isset($_REQUEST['add'])) {
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $status = $_REQUEST['status'];

  if (empty($id)) {
   
    $sql =  mysqli_query($conn, "INSERT INTO courses(name, status) VALUES ('$name','$status')");
if ($sql) {
  $title="Course Added";
 $msg="New course registered!";
 $sts="success";
redirect("pages/course.php", 5000);
}
 else{
echo mysqli_error($conn);
}
  }else{
    $q = "UPDATE courses SET name='$name', status='$status' WHERE id = '$id'";
    $edit_courses = mysqli_query($conn, $q);
    if ($edit_courses) {
      $title="Course Updated";
      $msg="New course Updated!";
      $sts="success";
    redirect("pages/course.php", 5000);
    
    } else{
    echo mysqli_error($conn);
    }
  }
 

}
if (isset($_REQUEST['delete_courses'])) {
  $id = $_REQUEST['delete_courses'];
  $query ="DELETE FROM courses WHERE id='$id'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $title="Course Deleted";
    $msg="Selected Course Deleted!";
    $sts="danger";
    redirect("pages/course.php", 3000);
  }
}





// batch
if (isset($_REQUEST['add_batch'])) {
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $course = $_REQUEST['course'];
  $status = $_REQUEST['status'];

  if (empty($id)) {
   
    $sql =  mysqli_query($conn, "INSERT INTO batch(name, course, status) VALUES ('$name','$course','$status')");
if ($sql) {
  $title="Batch Added";
  $msg="New Batch registered!";
  $sts="success";
redirect("pages/batch.php", 3000);
}
 else{
echo mysqli_error($conn);
}
  }else{
    $q = "UPDATE batch SET name='$name', status='$status', course='$course' WHERE id = '$id'";
    $edit_batch = mysqli_query($conn, $q);
    if ($edit_batch) {
      $title="Batch Updated";
      $msg="New Batch Updated!";
      $sts="success";
    redirect("pages/batch.php", 3000);
    
    } else{
    echo mysqli_error($conn);
    }
  }
 

}
if (isset($_REQUEST['delete_batch'])) {
  $id = $_REQUEST['delete_batch'];
  $query ="DELETE FROM batch WHERE id='$id'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $title="Batch Deleted";
    $msg="Selected Batch Deleted!";
    $sts="danger";
    redirect("pages/batch.php", 1000);
  }
}

// student
if (isset($_REQUEST['add_student'])) {
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $batch = $_REQUEST['batch'];
  if (empty($id)) {
   
    $sql =  mysqli_query($conn, "INSERT INTO student(name, email, password, batch) VALUES ('$name','$email','$password','$batch')");
if ($sql) {
  $title="Student Added";
  $msg="New Student registered!";
  $sts="success";
redirect("pages/student.php", 3000);
}
 else{
echo mysqli_error($conn);
}
  }else{
    $q = "UPDATE student SET name='$name', password='$password', email='$email', batch='$batch' WHERE id = '$id'";
    $edit_student = mysqli_query($conn, $q);
    if ($edit_student) {
      $title="Student Updated";
      $msg="New Student Updated!";
      $sts="success";
    redirect("pages/student.php", 3000);
    
    } else{
    echo mysqli_error($conn);
    }
  }
 

}
if (isset($_REQUEST['delete_student'])) {
  $id = $_REQUEST['delete_student'];
  $query ="DELETE FROM student WHERE id='$id'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $title="Student Deleted";
    $msg="Selected Student Deleted!";
    $sts="danger";
    redirect("pages/student.php", 3000);
  }
}

// teacher

if (isset($_REQUEST['add_teacher'])) {
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  $address = $_REQUEST['address'];
  if (empty($id)) {
   
    $sql =  mysqli_query($conn, "INSERT INTO teacher(name, email, password, address) VALUES ('$name','$email','$password','$address')");
if ($sql) {
  $title="Teacher Added";
  $msg="New Teacher registered!";
  $sts="success";
redirect("pages/teacher.php", 3000);
}
 else{
echo mysqli_error($conn);
}
  }else{
    $q = "UPDATE teacher SET name='$name', password='$password', email='$email', address='$address' WHERE id = '$id'";
    $edit_teacher = mysqli_query($conn, $q);
    if ($edit_teacher) {
      $title="Teacher Updated";
      $msg="New Teacher Updated!";
      $sts="success";
    redirect("pages/teacher.php", 3000);
    
    } else{
    echo mysqli_error($conn);
    }
  }
 

}
if (isset($_REQUEST['delete_teacher'])) {
  $id = $_REQUEST['delete_teacher'];
  $query ="DELETE FROM teacher WHERE id='$id'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $title="Teacher Deleted";
    $msg="Selected Teacher Deleted!";
    $sts="danger";
    redirect("pages/teacher.php", 3000);
  }
}
?>

