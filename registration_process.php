<?php
include ('connection.php');

if (isset ($_POST['submit'])) {
  $host = 'upload/user_profile/';
  $username = $_POST["username"];
  $useremail = $_POST["useremail"];
  $password = md5($_POST["password"]);
  $confirm_password = md5($_POST["confirm_password"]);
  $contact = $_POST["contact"];
  $gender = $_POST["gender"];
  $fileinfo = basename($_FILES['profile']['name']);
  $ran_id = rand(time(), 100000000);
  $file_path = $host . $fileinfo;
  $upload = $file_path;

  $check_email_query = "SELECT * FROM tbl_user_registration WHERE useremail = '$useremail'";
  $check_email_result = mysqli_query($conn, $check_email_query);

  if (mysqli_num_rows($check_email_result) > 0) {
    echo "<script>alert('You Have Already Registered!!!');</script>";
    echo "<script>window.open('register.php','_self')</script>";
  } else {

    if (move_uploaded_file($_FILES['profile']['tmp_name'], $file_path)) {
      if ($password != $confirm_password) {
        echo "<script>alert('Password and Confirm password does not match');
              window.location.href = 'register.php?error=true'
            </script>";
      } else {
        $query = "INSERT INTO tbl_user_registration(unique_id,username,useremail,password,conffirm_password,contact,gender,profile) values('$ran_id','$username','$useremail','$password','$confirm_password','$contact','$gender','$upload')";
        if ($conn->query($query) === TRUE) {
          echo "<script>
              alert('Registration Complete');
              window.location.href = 'login.php?regadd=true'
          </script>";
        } else {
          echo "<script>
              alert('Registration Not Done! Error Occurred');
              window.location.href = 'register.php?error=true'
          </script>";
        }
      }
    }
  }
}

?>