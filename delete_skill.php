<?php
include('connection.php');

$skill_id = $_GET['skill_id'];

// Retrieve the skill information before deletion
$select_query = "SELECT * FROM tbl_skill_master WHERE skill_id = '$skill_id'";
$result = mysqli_query($conn, $select_query);

if ($result && $row = mysqli_fetch_assoc($result)) {
    // Get the image file path
    $image_path = $row['skill_image'];

    // Delete the image file
    if (file_exists($image_path)) {
        unlink($image_path); // Delete the file
    }

    // Delete the skill from the database
    $query = "DELETE FROM tbl_skill_master WHERE skill_id = '$skill_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>window.location.href = 'add_skills.php?deleteskill=true'</script>";
    } else {
        echo "Error deleting skill: " . mysqli_error($conn);
    }
} else {
    echo "Skill not found.";
}

?>

