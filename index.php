<?php include ('connection.php');
// session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Talent Trade</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include ('favicon.php'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/toastr.min.css">
    <script src="js/toastr.min.js"></script>

    <style type="text/css">
        .mbtn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #3498db;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            -webkit-transition: background-color 0.3s ease;
            -moz-transition: background-color 0.3s ease;
            -ms-transition: background-color 0.3s ease;
            -o-transition: background-color 0.3s ease;
        }

        .mbtn:hover {
            background-color: #2980b9;
            color: #fff;
        }
    </style>
</head>

<body>
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <?php include ('header.php'); ?>




    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">

                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 hero-header">

        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">Refine, Share, and Shape Your Skills.</h4>
                    <h1 class="mb-5 display-3 text-primary">Unlocking Hidden Skills, Empowering Growth.</h1>
                    <div class="position-relative mx-auto">
                        <form action="index.php" method="POST">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill"
                                type="text" name="searchval" placeholder="Search">
                            <button type="submit" name="submit"
                                class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100"
                                style="top: 0; right: 25%;">Submit Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="img/slide1.jpg" class="img-fluid w-100 h-100 bg-secondary rounded"
                                    alt="slide1">
                                <!-- <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a> -->
                            </div>
                            <div class="carousel-item rounded">
                                <img src="img/slide2.jpg" class="img-fluid w-100 h-100 rounded" alt="slide2">
                                <!-- <a href="#" class="btn px-4 py-2 text-white rounded">Vesitables</a> -->
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 mb-5">
        <div class="container-fluid py-5">
            <div class="text-center mx-auto" style="max-width: 700px;">
                <h1 class="display-4">Recent Skill</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="row">

                        <?php
                        //    if (isset($_POST['submit'])) {
                        //         $searchval = $_POST['searchval'];
                        //          $select_sql_user = "SELECT *  from tbl_skill_master   where   status=0 AND skill_title LIKE '%$searchval%' ORDER BY skill_id DESC";
                        //     }else{
                        //          $select_sql_user = "SELECT *  from tbl_skill_master   where   status=0 ORDER BY skill_id desc limit 10";
                        //     }
                        
                        // if (isset($_POST['submit'])) {
                        //     $searchval = $_POST['searchval'];
                        //     $select_sql_user = "SELECT * FROM tbl_skill_master WHERE status=0 AND skill_title LIKE '%$searchval%' AND skill_type = 'Teach' ORDER BY skill_id DESC";
                        // } else {
                        //     $select_sql_user = "SELECT * FROM tbl_skill_master WHERE status=0 AND skill_type = 'Teach' ORDER BY skill_id DESC LIMIT 10";
                        // }
                        
                        if (isset ($_POST['submit'])) {
                            $searchval = $_POST['searchval'];
                            $select_sql_user = "SELECT sm.*, ur.username 
                                            FROM tbl_skill_master sm
                                            INNER JOIN tbl_user_registration ur ON sm.user_id = ur.id
                                            WHERE sm.status=0 AND sm.skill_title LIKE '%$searchval%' AND sm.skill_type = 'Teach' 
                                            ORDER BY sm.skill_id DESC";
                        } else {
                            $select_sql_user = "SELECT sm.*, ur.username 
                                            FROM tbl_skill_master sm
                                            INNER JOIN tbl_user_registration ur ON sm.user_id = ur.id
                                            WHERE sm.status=0 AND sm.skill_type = 'Teach' 
                                            ORDER BY sm.skill_id DESC LIMIT 9";
                        }
                        // echo $select_sql_user; exit;
                        
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
                                                <a
                                                    href="view_details.php?skill_id=<?php echo $row['skill_id']; ?>&&user_id=<?php echo $row['user_id']; ?>"><img
                                                        src="<?php echo $image; ?>" alt="skill image"
                                                        style="height:100px; width:100px; mix-blend-mode: multiply"></a>
                                                <a
                                                    href="view_details.php?skill_id=<?php echo $row['skill_id']; ?>&&user_id=<?php echo $row['user_id']; ?>">
                                                    <h4>
                                                        <?php echo $row['skill_title']; ?> (<?php echo $row['skill_type']; ?>)
                                                    </h4>
                                                    <h6>
                                                        (<?php echo $row['username']; ?>)
                                                    </h6>
                                                </a>
                                            </div>
                                            <div class="job-tittle">
                                                <p style="text-align:justify;">
                                                    <?php
                                                    $description = $row['skill_desc'];
                                                    $short_description = implode(' ', array_slice(explode(' ', $description), 0, 20));
                                                    echo $short_description . '...';
                                                    ?>
                                                    <a href="view_details.php?skill_id=<?php echo $row['skill_id']; ?>&&user_id=<?php echo $row['user_id']; ?>"
                                                        class="view-more-btn">View More</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $count++;
                            }
                        } else { ?>

                            <h2>No Record Found </h2>

                        <?php } ?>

                    </div>
                    <div class="center-container" style="text-align:center; margin-top:50px">
                        <a href="allskill.php" class="mbtn btn-my">View More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include ('footer.php'); ?>

    <a href="#" class="btn btn-primary border-3  rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>