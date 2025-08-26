<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include('favicon.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <div class="container-fluid page-header py-5"
        style=" background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/reg.jpg);position: relative;background-position: center center;background-repeat: no-repeat;background-size: cover;">
        <h1 class="text-center text-white display-6">Registration</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-white">Register</li>
        </ol>
    </div>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Register Your Details</h1>
            <form action="registration_process.php" method="Post" enctype="multipart/form-data">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="form-item w-100">
                            <label class="form-label my-3">User Name <sup style="color:red;">*</sup></label>
                            <input type="text" name="username" placeholder="Enter your Full Name" class="form-control"
                                required>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-lg-12">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">User Email <sup style="color:red;">*</sup></label>
                                    <input type="email" name="useremail" placeholder="Enter Your Valid Email"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Password <sup style="color:red;">*</sup></label>
                                    <input type="password" name="password" placeholder="Enter ******** Password"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Confirm Password <sup
                                            style="color:red;">*</sup></label>
                                    <input type="password" name="confirm_password" placeholder="Re-Enter Password"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Mobile No <sup style="color:red;">*</sup></label>
                                    <input type="number" name="contact" placeholder="Enter Your Mobile No"
                                        class="form-control" onkeypress="limitchar(event)" required/>
                                </div>
                                <script> 
                                    function limitchar(event)
                                    {
                                        var inputval=event.target.value;
                                        if(inputval.length>9)
                                        {
                                            event.preventDefault();
                                        }
                                    }
                                </script>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Gender <sup style="color:red;">*</sup></label>
                                    <select name="gender" id="" class="form-control" required
                                        style="background-color:#fff;">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-item w-100">
                            <label class="form-label my-3">Profile Pic <sup style="color:red;">*</sup></label>
                            <input type="file" name="profile" id="profile" class="form-control" accept="image/*"
                                required>
                            <small class="text-muted">Accepted formats: JPEG, PNG, GIF. Max size: 1MB</small>
                        </div>

                    </div>
                </div>
                <br>
                <div class="form-item w-100">
                    <button type="submit" name="submit"
                        class="btn border-secondary py-3 px-4 text-uppercase text-primary"
                        style="float:right; width:25%;">Submit</button>
                </div>
                <br>
            </form>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- <script src="lib/lightbox/js/lightbox.min.js"></script> -->
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="js/main.js"></script>
    <script>
        document.getElementById('profile').addEventListener('change', function () {
            var fileInput = this;
            var maxSize = 1024 * 1024;

            if (fileInput.files.length > 0) {
                var fileSize = fileInput.files[0].size;

                if (fileSize > maxSize) {
                    alert('Image size should not exceed 1MB.');
                    fileInput.value = '';
                    return false;
                }

                var allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (allowedTypes.indexOf(fileInput.files[0].type) === -1) {
                    alert('Invalid image format. Please upload a JPEG, PNG, or GIF image.');
                    fileInput.value = '';
                    return false;
                }
            }
        });
    </script>
</body>

</html>