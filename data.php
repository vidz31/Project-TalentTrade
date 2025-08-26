<?php
while ($row = mysqli_fetch_assoc($query)) {
    $sql2 = "SELECT * FROM tbl_message WHERE (incoming_msg_id = {$row['unique_id']}
            OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
            OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    $result = (mysqli_num_rows($query2) > 0) ? $row2['msg'] : "No message available";
    $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;

    $you = "";
    if (isset ($row2['outgoing_msg_id'])) {
        $you = ($outgoing_id == $row2['outgoing_msg_id']) ? "You: " : "";
    }

    $offline = ($row['login_status'] == "Offline now") ? "offline" : "";
    $hid_me = ($outgoing_id == $row['unique_id']) ? "hide" : "";

    $output .= '<a href="chat.php?unique_id=' . $row['unique_id'] . '">
                <div class="content">
                <img src="' . $row['profile'] . '" alt="">
                <div class="details">
                    <span>' . $row['username'] . "</span>
                    <p>" . $you . $msg . '</p>
                </div>
                </div>
                <div class="' . $offline . '"><i class="fas fa-circle"></i></div>
            </a>';
}
?>