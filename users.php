<?php
session_start();
include_once "connection.php";
$outgoing_id = $_SESSION['unique_id'];
//$sql = "SELECT * FROM tbl_user_registration WHERE NOT  unique_id = {$outgoing_id} ORDER BY id DESC";
$sql = "SELECT DISTINCT tbl_user_registration.unique_id, tbl_user_registration.username, tbl_user_registration.profile, tbl_user_registration.login_status
        FROM tbl_user_registration
        JOIN tbl_message ON (tbl_user_registration.unique_id = tbl_message.incoming_msg_id AND tbl_message.outgoing_msg_id = {$outgoing_id})
        OR (tbl_user_registration.unique_id = tbl_message.outgoing_msg_id AND tbl_message.incoming_msg_id = {$outgoing_id})";
$query = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($query) == 0) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($query) > 0) {

    include_once "data.php";
}
echo $output;
?>