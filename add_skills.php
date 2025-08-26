<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Skils</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include ('favicon.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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


    <?php include ('header.php'); ?>
    <?php
    // session_start();
    include ('connection.php');
    if (!isset ($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    ?>
    <div class="container-fluid page-header py-5"
        style=" background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(img/reg.jpg);position: relative;background-position: center center;background-repeat: no-repeat;background-size: cover;">
        <h1 class="text-center text-white display-6">Add Skills</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-white">Add Skills</li>
        </ol>
    </div>


    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Add Skills</h1>
            <form action="add_skill_process.php" method="Post" enctype="multipart/form-data">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="form-item w-100">
                            <label class="form-label my-3">Skill Title <sup style="color:red;">*</sup></label>
                            <input type="text" name="skill_title" placeholder="Enter Skill Title" class="form-control"
                                required>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Skill Type <sup style="color:red;">*</sup></label>
                                    <select name="skill_type" id="" class="form-control" required
                                        style="background-color:#fff;">
                                        <option value="">Select Skill Type</option>
                                        <option value="Learn">Learn</option>
                                        <option value="Teach">Teach</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Skill Image <sup style="color:red;">*</sup></label>
                                    <input type="file" name="skill_image" id="skillImage" class="form-control"
                                        accept="image/*" required>
                                    <small class="text-muted">Accepted formats: JPEG, PNG, GIF. Max size: 1MB</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-item w-100">
                            <label class="form-label my-3">Skill description <sup style="color:red;">*</sup></label>
                            <textarea name="skill_desc" class="form-control" spellcheck="false" cols="1" rows="5"
                                placeholder="Enter Your Description" required></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-item w-100">
                    <button type="submit" name="submit"
                        class="btn border-secondary py-3 px-4 text-uppercase text-primary"
                        style="float:right; width:25%; display:inline-block;">Submit</button>
                </div>
                <br>
            </form>

        </div>
    </div>
    <hr>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4">Display Skills</h1>
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sr No.</th>
                                <th scope="col">Skill Title</th>
                                <th scope="col">Skill Type</th>
                                <th scope="col">Skill Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php
                        // Query
                        $select_sql_user = "SELECT *  from tbl_skill_master   where user_id = '$user_id' and status=0";


                        $result = $conn->query($select_sql_user);

                        if ($result->num_rows > 0) {


                            $count = 1;

                            while ($row = $result->fetch_assoc()) {

                                $image = $row["skill_image"];
                                ?>

                                <tbody>
                                    <td>
                                        <?php echo $count; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['skill_title']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['skill_type']; ?>
                                    </td>
                                    <td><img src="<?php echo $image; ?>" style="height:50px;width: 50px;"></td>
                                    <td>
                                        <?php
                                        $description = $row['skill_desc'];
                                        $short_description = implode(' ', array_slice(explode(' ', $description), 0, 10));
                                        echo $short_description . '...';
                                        ?>
                                    </td>
                                    <td>
                                        <a href="edit_skills.php?skill_id=<?php echo $row['skill_id']; ?>"
                                            class="btn btn-primary" style="color:white; margin:3px;">Edit</a>
                                        <button class="btn btn-danger" style="color:white; margin:3px;" data-toggle="modal" data-target="#deleteModal<?php echo $row['skill_id']; ?>">Delete</button>
                                    </td>

                                    <!-- Add modal structure to your HTML inside the loop -->
                                    <div class="modal" id="deleteModal<?php echo $row['skill_id']; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this skill?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <a href="delete_skill.php?skill_id=<?php echo $row['skill_id']; ?>"
                                                        class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $count++;
                            }
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php include ('footer.php'); ?>

    <a href="#" class="btn btn-primary border-3  rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <!-- <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="js/main.js"></script>
    <script>
        document.getElementById('skillImage').addEventListener('change', function () {
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