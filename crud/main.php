<? include 'Libs/load.php'; ?>
<?php
if (isset($_POST['delete_student'])) {
 $student_id = mysqli_real_escape_string(Database::getConnection(), $_POST['delete_student']);

 $query = "DELETE FROM students WHERE id='$student_id' ";
 $query_run = mysqli_query(Database::getConnection(), $query);

 if ($query_run) {
  $_SESSION['message'] = "Student deleted succefully";
  header("Location: /");
  exit(0);
 } else {
  $_SESSION['message'] = "Student not deleted";
  header("Location: /");
  exit(0);
 }
}

if (isset($_POST['update_student'])) {
 $student_id = mysqli_real_escape_string(Database::getConnection(), $_POST['student_id']);

 $name = mysqli_real_escape_string(Database::getConnection(), $_POST['name']);
 $email = mysqli_real_escape_string(Database::getConnection(), $_POST['email']);
 $phone = mysqli_real_escape_string(Database::getConnection(), $_POST['phone']);
 $course = mysqli_real_escape_string(Database::getConnection(), $_POST['course']);

 $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";
 $query_run = mysqli_query(Database::getConnection(), $query);

 if ($query_run) {
  $_SESSION['message'] = "Student Updated Successfully";
  header("Location: /");
  exit(0);
 } else {
  $_SESSION['message'] = "Student Not Updated";
  header("Location: /");
  exit(0);
 }
}


if (isset($_POST['save_student'])) {
 $name = mysqli_real_escape_string(Database::getConnection(), $_POST['name']);
 $email = mysqli_real_escape_string(Database::getConnection(), $_POST['email']);
 $phone = mysqli_real_escape_string(Database::getConnection(), $_POST['phone']);
 $course = mysqli_real_escape_string(Database::getConnection(), $_POST['course']);

 $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

 $query_run = mysqli_query(Database::getConnection(), $query);
 if ($query_run) {
  $_SESSION['message'] = "Student Created Successfully";
  header("Location: student_create.php");
  exit(0);
 } else {
  $_SESSION['message'] = "Student Not Created";
  header("Location: student_create.php");
  exit(0);
 }
}
