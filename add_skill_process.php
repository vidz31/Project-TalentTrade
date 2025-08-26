<?php
include('connection.php');
session_start();

if (isset($_POST['submit'])) {
  $host = 'upload/skill_image/';
  $skill_title = $_POST["skill_title"];
  $skill_type = $_POST["skill_type"];
  // $skill_image = $_POST["skill_image"];
  $skill_desc = $_POST["skill_desc"];
  $user_id = $_SESSION['user_id'];

  $fileinfo = basename($_FILES['skill_image']['name']);

  $file_path = $host . $fileinfo;
  $upload = $file_path;

  if (move_uploaded_file($_FILES['skill_image']['tmp_name'], $file_path)) {
    $query = "INSERT INTO tbl_skill_master(skill_title,skill_type,skill_image,skill_desc,user_id) values('$skill_title','$skill_type','$upload','$skill_desc','$user_id ')";
    if ($conn->query($query) === TRUE) {
      echo "<script>window.location.href = 'add_skills.php?resourceadd=true'</script>";
    } else {
      echo "<script>window.location.href = 'add_skills.php?error=true'
            alert('Error occured');</script>";
    }
  }
}

?>