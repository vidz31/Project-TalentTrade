


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <?php include('header.php'); ?>
    <?php
// session_start();
include('connection.php');
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
?>
    <div class="container-fluid page-header py-5"
        style=" background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/reg.jpg);position: relative;background-position: center center;background-repeat: no-repeat;background-size: cover;">
        <h1 class="text-center text-white display-6">Change Password</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-white">Change Password</li>
        </ol>
    </div>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Change Password</h1>
                <form action="changepass_process.php" method="Post" enctype="multipart/form-data">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <div class="form-item w-100">
                                        <label class="form-label my-3">Old Password <sup style="color:red;">*</sup></label>
                                        <input type="password" name="old_pass" placeholder="Enter Old Password" class="form-control" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">New Password <sup style="color:red;">*</sup></label>
                                        <input type="password" name="new_pass" placeholder="Enter New Password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-item w-100">
                        <button type="submit" name="submit" class="btn border-secondary py-3 px-4 text-uppercase text-primary"
                            style="float:right; width:25%; display:inline-block;">Submit</button>
                    </div>
                    <br>
                </form>

        </div>
    </div>


    <?php include('footer.php'); ?>

    <a href="#" class="btn btn-primary border-3  rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>