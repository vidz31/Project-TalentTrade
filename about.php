<?php include('connection.php');
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

   <style>
    
    .section_all{
        padding-top: 50px;
        margin-top: 95px;
    }
.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color: #093d4e;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}   
   </style>
</head>

<body>
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <?php include('header.php'); ?>

    <section class="section_all bg-light" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <h3 class="font-weight-bold">Welcome To <span class="text-custom">Talent Trade</span></h3>
                            <p class="section_subtitle mx-auto text-muted"> Talent Trade is basically a "Skill Swap Hub Project" which  aims to revolutionize skill exchange within communities, promoting inclusivity, collaboration, and lifelong learning.  <br/>With its user-friendly platform and robust features, it seeks to empower individuals and maximize the utilization of talents worldwide.</p>
                            <div class="">
                                <i class=""></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-6">
                        <div class="about_header_main mt-3">
                            <h4 class="about_heading text-capitalize font-weight-bold mt-4">"Skill Swap Hub Project: Empowering Communities through Skill Exchange"</h4>
                            <p class="text-muted mt-3">It creates a comprehensive platform that fosters community engagement and shared learning by facilitating local skill exchange. This platform will feature a robust system for verifying and endorsing skills, promoting a diverse range of talents within the community. Moreover, it will be designed to be accessible to users of varying technological proficiency, ensuring scalability for future growth.




</p>

                            <p class="text-muted mt-3">Our approach emphasizes local community focus with plans for global expansion, integrating advanced algorithms and feedback systems to enhance skill connections and user experience while fostering partnerships with local organizations and accommodating diverse skill-sharing preferences.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img_about mt-3">
                            <img src="https://i.ibb.co/mvwgMMW/online-learning-student-jpg.webp" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">User-friendly interface</h5>
                                <p class="edu_desc mt-3 mb-0 text-muted"> Easy for everyone to use and helps them share skills and learn from each other.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fab fa-angellist"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Skill verification and endorsements</h5>
                                <p class="edu_desc mb-0 mt-3 text-muted"> Make sure people's skills are real and let others say they're good at something.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about_content_box_all mt-3">
                            <div class="about_detail text-center">
                                <div class="about_icon">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                                <p class="edu_desc mb-0 mt-3 text-muted">An accessible platform for users of varying technological proficiency, ensuring scalability for future growth.
 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    <?php include('footer.php'); ?>

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