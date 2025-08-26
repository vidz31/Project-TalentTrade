<?php
include ('connection.php');
if (isset ($_POST['submit'])) {
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $host = 'upload/skill_image/';
    $skill_id = $_POST['skill_id'];
    $skill_title = $_POST["skill_title"];
    $skill_type = $_POST["skill_type"];
    $skill_desc = $_POST["skill_desc"];
    $file_path = $_POST['img1'];
    $fileinfo = basename($_FILES['skill_image']['name']);


    if (!empty ($fileinfo)) {
        $file_path = $host . basename($fileinfo);
        $old_image_path = basename($_POST['img1']);


        if (file_exists($host . $old_image_path)) {
            unlink($host . $old_image_path);
        }


        move_uploaded_file($_FILES['skill_image']['tmp_name'], $host . $fileinfo);


        $update_sql = "UPDATE `tbl_skill_master` SET skill_title='$skill_title', skill_type='$skill_type',skill_desc='$skill_desc', skill_image='$file_path' WHERE skill_id='$skill_id'";
    } else {

        $update_sql = "UPDATE `tbl_skill_master` SET skill_title='$skill_title', skill_type='$skill_type',skill_desc='$skill_desc' WHERE skill_id='$skill_id'";
    }

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>window.location.href = 'add_skills.php?editsell=true'</script>";
    } else {
        echo "<script>window.location.href = 'add_skills.php?error=true'</script>";
    }
}
