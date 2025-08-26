<?php include('connection.php');
// session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Skills</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include('favicon.php'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/toastr.min.css">
    <script src="js/toastr.min.js"></script>

</head>

<body>
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <?php include('header.php'); ?>



    <div class="container-fluid py-5 mb-5">
        <br><br><br>
        <div class="container-fluid py-5">
            <div class="text-center mx-auto">
                <form method="post" action="allskill.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group w-75 mx-auto d-flex">
                                <input type="search" class="form-control p-3" name="searchvalue" placeholder="Search With keywords" aria-describedby="search-icon-1">
                                <!-- <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span> -->
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select name="skill_type" id="" class="form-control" style="background-color:#fff;height:56px;">
                                <option value="">Skill Filter</option>
                                <option value="Learn">Learn</option>
                                <option value="Teach">Teach</option>
                            </select>
                        </div>
                        <div class="col-md-2">

                            <button  type="submit" style="color: #fff; margin-top:7px;" name="submit" class="btn btn-primary">Search</button>

                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="row">

                        <?php

                        // if (isset($_POST['submit'])) {
                        //     $searchval = $_POST['searchvalue'];
                        //     $skill_type = $_POST['skill_type'];

                        //     if ($searchval != NULL &&  $skill_type == "") {

                        //         $select_sql_user = "SELECT *  from tbl_skill_master where status=0 and skill_title like '%$searchval%' ORDER BY skill_id desc";
                        //     } elseif ($searchval == NULL &&  $skill_type !== "") {
                        //         $select_sql_user = "SELECT *  from tbl_skill_master where status=0 and skill_type='$skill_type' ORDER BY skill_id desc";
                        //     }
                        // } else {
                        //     $select_sql_user = "SELECT *  from tbl_skill_master where status=0 ORDER BY skill_id desc";
                        // }

                        if (isset($_POST['submit'])) {
                            $searchval = $_POST['searchvalue'];
                            $skill_type = $_POST['skill_type'];
                        
                            if ($searchval != NULL &&  $skill_type == "") {
                                $select_sql_user = "SELECT sm.*, ur.username 
                                                    FROM tbl_skill_master AS sm 
                                                    LEFT JOIN tbl_user_registration AS ur ON sm.user_id = ur.id 
                                                    WHERE sm.status=0 AND sm.skill_title LIKE '%$searchval%' 
                                                    ORDER BY sm.skill_id DESC";
                            } elseif ($searchval == NULL &&  $skill_type !== "") {
                                $select_sql_user = "SELECT sm.*, ur.username 
                                                    FROM tbl_skill_master AS sm 
                                                    LEFT JOIN tbl_user_registration AS ur ON sm.user_id = ur.id 
                                                    WHERE sm.status=0 AND sm.skill_type='$skill_type' 
                                                    ORDER BY sm.skill_id DESC";
                            }
                        } else {
                            $select_sql_user = "SELECT sm.*, ur.username 
                                                FROM tbl_skill_master AS sm 
                                                LEFT JOIN tbl_user_registration AS ur ON sm.user_id = ur.id 
                                                WHERE sm.status=0 
                                                ORDER BY sm.skill_id DESC";
                        }
                        
                        $result = $conn->query($select_sql_user);
                        if ($result->num_rows > 0) {
                            $count = 1;
                            while ($row = $result->fetch_assoc()) {
                                $image = $row["skill_image"];
                        ?>
                                <div class="col-md-4">
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img" style="display: flex; align-items: center; ">
                                                <a href="view_details.php?skill_id=<?php echo $row['skill_id']; ?>&&user_id=<?php echo $row['user_id']; ?>"><img src="<?php echo $image; ?>" alt="skill image" style="height:100px; width:100px; mix-blend-mode: multiply"></a>
                                                <a href="view_details.php?skill_id=<?php echo $row['skill_id']; ?>&&user_id=<?php echo $row['user_id']; ?>">
                                                    <h4>
                                                        <?php echo $row['skill_title']; ?> (<?php echo $row['skill_type']; ?>)
                                                    </h4>
                                                    <h6>
                                                        (<?php echo $row['username']; ?>)
                                                    </h6>
                                                </a>
                                            </div>
                                            <div class="job-tittle">
                                                <p>
                                                    <?php
                                                    $description = $row['skill_desc'];
                                                    $short_description = implode(' ', array_slice(explode(' ', $description), 0, 20));
                                                    echo $short_description . '...';
                                                    ?>
                                                    <a href="view_details.php?skill_id=<?php echo $row['skill_id']; ?>&&user_id=<?php echo $row['user_id']; ?>" class="view-more-btn">View More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $count++;
                            }
                        } else {  ?>

                            <h2>No Record Found </h2>

                        <?php   } ?>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php'); ?>

    <a href="#" class="btn btn-primary border-3  rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>
</html>