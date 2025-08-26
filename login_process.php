<?php
session_start();
include('connection.php');

if (isset($_POST['submit'])) {
    $useremail = $_POST['useremail'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM `tbl_user_registration` WHERE useremail = '$useremail' AND password = '$password'";
    $data = mysqli_query($conn, $sql);
    $num = mysqli_fetch_array($data);

    if ($num > 0) {
        // Update login status to 'Active' in the database
        $user_id = $num['id'];
        $update_status_sql = "UPDATE `tbl_user_registration` SET login_status = 'Active' WHERE id = $user_id";
        mysqli_query($conn, $update_status_sql);

        // Store user information in session variables
        $_SESSION['email'] = $num['useremail'];
        $_SESSION['user_id'] = $num['id'];
        $_SESSION['username'] = $num['username'];
        $_SESSION['unique_id'] = $num['unique_id'];

        echo "<script>
                alert('Login successfully');
                window.location.href = 'index.php?login=true';
              </script>";
        exit; // Make sure to exit after redirect
    } else {
        echo "<script>
                alert('Incorrect login credentials');
                window.location.href = 'index.php?error=true'
              </script>";
        exit; // Make sure to exit after redirect
    }
}
?>
