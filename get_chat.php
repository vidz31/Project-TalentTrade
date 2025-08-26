<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "connection.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $currentDate = null;

        $sql = "SELECT * FROM tbl_message LEFT JOIN tbl_user_registration ON tbl_user_registration.unique_id = tbl_message.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY created_at";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $messageTime = date('h:i A', strtotime($row['created_at']));
                $messageDate = date('Y-m-d', strtotime($row['created_at']));
                if($messageDate != $currentDate){
                    $output .= '<div class="date-divider" style="padding: 5px 12px 6px;text-align: center;text-shadow: 0 1px 0 rgba(255, 255, 255, .4);background-color: #fff;border-radius: 7.5px;box-shadow: 0 1px 0.5px rgba(var11,20,26, .13);">'.date('F d, Y', strtotime($row['created_at'])).'</div>';
                    $currentDate = $messageDate;
                }

                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                    <small class="text-muted">'.$messageTime.'</small>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="'.$row['profile'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                    <small class="text-muted">'.$messageTime.'</small>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send a message, they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }
?>
