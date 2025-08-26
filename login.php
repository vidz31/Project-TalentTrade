


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include('favicon.php'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/toastr.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/toastr.min.css">
    <script src="js/toastr.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: -webkit-linear-gradient(bottom, #093d4e, #d61605);
            background-repeat: no-repeat;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .card h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .card {
                width: 400px;
            }
        }

        #submit-btn {
            background: -webkit-linear-gradient(right, #093d4e, #d61605);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #093d4e;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 25px;
            transition: 0.25s;
            width: 153px;
            display: block;
            align-items:center;
        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #093d4e;
        }
    </style>
</head>

<body>
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <?php include('header.php'); ?>

    <div class="card">
        <h2>Login</h2>
        <form action="login_process.php" method="Post"> 
            <div class="form-group">
                <label for="username">User Email:</label>
                <input class="form-content" type="text" id="useremail" name="useremail" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-content" type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
            </div>
            <p>Don't have account yet?<a href="register.php" id="signup" style="font-weight:600; padding-left: 3px ; ">Register</a></p>
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="js/main.js"></script>
    <script src="js/toastr.min.js"></script>
</body>

</html>