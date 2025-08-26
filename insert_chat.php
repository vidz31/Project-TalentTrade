<?php
session_start();
if (isset ($_SESSION['unique_id'])) {
    include_once "connection.php";

    // Set the timezone to Indian Standard Time
    date_default_timezone_set('Asia/Kolkata');

    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty ($message)) {
        $currentDateTime = date('Y-m-d H:i:s');
        $sql = mysqli_query($conn, "INSERT INTO tbl_message (incoming_msg_id, outgoing_msg_id, msg, created_at) VALUES ({$incoming_id}, {$outgoing_id}, '{$message}', '{$currentDateTime}')") or die (mysqli_error($conn));
    }
} else {
    header("location: ../login.php");
}
?>  