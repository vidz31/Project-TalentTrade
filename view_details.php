<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Skils</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include('favicon.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <style>
        fieldset,
        label {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 20px;
        }

        h1 {
            font-size: 1.5em;
            margin: 10px;
        }

        /****** Style Star Rating Widget *****/

        .rating {
            border: none;
            margin-right: 49px;
        }

        .myratings {

            font-size: 85px;
            color: green;
        }

        .rating>[id^="star"] {
            display: none;
        }

        .rating>label:before {
            margin: 5px;
            font-size: 2.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating>.half:before {
            content: "\f089";
            position: absolute;
        }

        .rating>label {
            color: #ddd;
            float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating>[id^="star"]:checked~label,
        /* show gold star when clicked */
        .rating:not(:checked)>label:hover,
        /* hover current star */
        .rating:not(:checked)>label:hover~label {
            color: #FFD700;
        }

        /* hover previous stars in list */

        .rating>[id^="star"]:checked+label:hover,
        /* hover current star when changing rating */
        .rating>[id^="star"]:checked~label:hover,
        .rating>label:hover~[id^="star"]:checked~label,
        /* lighten current selection */
        .rating>[id^="star"]:checked~label:hover~label {
            color: #FFED85;
        }

        .reset-option {
            display: none;
        }

        .reset-button {
            margin: 6px 12px;
            background-color: rgb(255, 255, 255);
            text-transform: uppercase;
        }

        .checked {
            color: orange;
        }
    </style>
</head>

<body>
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <?php
    include('header.php');

    // session_start();
    include('connection.php');






    $skill_id = $_GET['skill_id'];
    $user_id = $_GET['user_id'];

    // $query = "SELECT skill_title, skill_desc,user_id FROM tbl_skill_master WHERE user_id = $user_id AND skill_id = $skill_id";
    $query = "SELECT * FROM tbl_skill_master WHERE user_id = $user_id AND skill_id = $skill_id";

    $result = mysqli_query($conn, $query);


    $query1 = "SELECT * from tbl_user_registration where id = '$user_id' and status = 0";
    $result1 = mysqli_query($conn, $query1);


    function calculateAverageRating($conn, $user_id, $skill_id)
    {
        $query = "SELECT AVG(rating) AS average_rating FROM tbl_review WHERE user_id = '$user_id' AND skill_id = '$skill_id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        return $row['average_rating'];
    }


    // Function to generate star icons based on the rating
    function printStarRating($averageRating)
    {

        $roundedRating = round($averageRating * 2) / 2;

        $totalStars = 5;

        $filledStars = floor($roundedRating);

        $halfStars = ceil($roundedRating - $filledStars);

        $emptyStars = $totalStars - $filledStars - $halfStars;


        for ($i = 0; $i < $filledStars; $i++) {
            echo '<span class="fa fa-star checked"></span>';
        }

        for ($i = 0; $i < $halfStars; $i++) {
            echo '<span class="fa fa-star-half-alt checked"></span>';
        }

        for ($i = 0; $i < $emptyStars; $i++) {
            echo '<span class="fa fa-star"></span>';
        }
    }

    $averageRating = calculateAverageRating($conn, $user_id, $skill_id);


    ?>
    <div class="container-fluid page-header py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/reg.jpg);position: relative;background-position: center center;background-repeat: no-repeat;background-size: cover;">
        <h1 class="text-center text-white display-6">View Details</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-white">View Details</li>
        </ol>
    </div>

    <div class="job-post-company pt-120 pb-120" style="margin-top:20px;">
        <div class="container">
            <div class="row justify-content-between">
                <?php
                // Check if the query was successful
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                ?>
                    <div class="col-xl-7 col-lg-8">
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <div class="small-section-tittle">
                                    <h4>Skill Title</h4>
                                </div>
                                <p><b style="font-size:25px;"><?php echo $row['skill_title']; ?></b> (<?php echo $row['skill_type']; ?>)</p>
                            </div>
                            <div class="post-details1 mb-50">
                                <div class="small-section-tittle">
                                    <h4>Skill Description</h4>
                                </div>
                                <p style="text-align:justify"><?php echo $row['skill_desc']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                    // Handle the case where the query fails
                    echo "Error: " . mysqli_error($conn);
                }
                ?>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3 mb-50">
                        <div class="small-section-tittle">
                            <h4>User Overview</h4>
                        </div>
                        <?php

                        if ($result1) {

                            $row1 = mysqli_fetch_assoc($result1);
                        ?>
                            <ul>
                                <li>User Name : <span><?php echo $row1['username']; ?></span></li>
                                <li>User Email : <span><?php echo $row1['useremail']; ?></span></li>
                                <li>Contact : <span><?php echo $row1['contact']; ?></span></li>
                                <li style="justify-content:start;">
                                    <?php
                                    // Print star icons based on the average rating
                                    printStarRating($averageRating);
                                    ?>
                                </li>
                            </ul>

                        <?php } ?>
                        <div class="apply-btn2" style="display:flex; justify-content:space-between">
                            <!-- <a href="chat.php?skill_id=<?php echo $skill_id; ?>&&unique_id=<?php echo $row1['unique_id']; ?>" class="btn btn-primary1" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); color:#fff;">Chat Now</a>
                            <a href="#" id="openModal" class="btn btn-warning" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); color:#fff;">Write Review</a> -->
                            <?php
                            $user_id_from_url = isset($_GET['user_id']) ? $_GET['user_id'] : null;
                            if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $user_id_from_url) {
                                // Display nothing if the session user_id matches the user_id from URL
                            } elseif (isset($_SESSION['user_id'])) {
                                // Display buttons only if the session user_id is set, but it doesn't match the user_id from URL
                                if ($row['skill_type'] == 'Teach') {
                                    echo '<a href="chat.php?skill_id=' . $skill_id . '&unique_id=' . $row1['unique_id'] . '" class="btn btn-primary1" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); color:#fff;">Chat Now</a>';
                                    echo '<a href="#" id="openModal" class="btn btn-warning" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); color:#fff;">Write Review</a>';
                                } else {
                                    echo '<a href="chat.php?skill_id=' . $skill_id . '&unique_id=' . $row1['unique_id'] . '" class="btn btn-primary1" style="box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); color:#fff;">Chat Now</a>';
                                }
                            }
                            ?>


                            <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" id="myForm">
                                                <input type="hidden" class="form-control" id="skill_id" name="skill_id" value="<?php echo $skill_id; ?>">
                                                <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Write Review</label>
                                                            <textarea name="review" class="form-control" id="review" cols="10" rows="5" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Give Rating</label>
                                                            <fieldset class="rating" id="ratingFieldset">
                                                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                                <input type="radio" class="reset-option" name="rating" value="reset" />
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" style="color:#fff;" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" style="color:#fff;" class="btn btn-warning">Save changes</button>
                                                </div>
                                            </form>
                                            <?php
                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $skill_id = $_POST["skill_id"];
                                                $user_id = $_POST["user_id"];
                                                $session_user_id = $_SESSION['user_id'];
                                                $review = $_POST["review"];
                                                $rating = $_POST["rating"];


                                                // Inserting data into the database
                                                $query = "INSERT INTO tbl_review (skill_id, user_id, session_user_id, review, rating, created_date) VALUES ('$skill_id', '$user_id', '$session_user_id', '$review', '$rating', NOW())";

                                                if (mysqli_query($conn, $query)) {
                                                    echo '<script>alert("Review added successfully!");</script>';
                                                    echo 'window.location.href = window.location.href;</script>';
                                                } else {
                                                    echo '<script>alert("Error: ' . $query . ' ' . mysqli_error($conn) . '");</script>';
                                                }

                                                mysqli_close($conn);
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <a href="#" class="btn btn-primary border-3  rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
    <?php include('footer.php'); ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="js/main.js"></script>
    <script src="javascript/users.js"></script>
    <script>
        $(document).ready(function() {
            $("#openModal").click(function() {
                $("#reviewModal").modal('show');
            });
        });
    </script>
    <script>
        function resetForm() {
            document.getElementById("reviewForm").reset();
        }


        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>

            resetForm();
        <?php endif; ?>
    </script>
    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            var ratingRadios = document.getElementsByName("rating");
            var ratingChecked = false;
            for (var i = 0; i < ratingRadios.length; i++) {
                if (ratingRadios[i].checked) {
                    ratingChecked = true;
                    break;
                }
            }
            if (!ratingChecked) {
                event.preventDefault(); // Prevent form submission
                document.getElementById("ratingFieldset").setAttribute("required", "required"); // Add required attribute to fieldset
                // Optionally, you can display a message to the user to indicate that rating is required
                alert("Please select a rating.");
            }
        });
    </script>
</body>

</html>