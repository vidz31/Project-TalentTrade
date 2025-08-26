<?php
session_start();
include('connection.php');

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $update_status_sql = "UPDATE `tbl_user_registration` SET login_status = 'Offline' WHERE id = $user_id";
    mysqli_query($conn, $update_status_sql);

    session_destroy();

    header("Location: login.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
