<?php session_start(); ?>

<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.php" class="navbar-brand">
                <h1 class="text-primary display-6">
                    <img src="img/logo1.png" alt="Talent Trade Logo" class="logo">
                </h1>
            </a>

            <?php
            $current_page = basename($_SERVER['PHP_SELF']);

            // if(!isset($_SESSION['email'])) {
            //     echo "hi";}else{echo $_SESSION['email'];echo "--";}
            ?>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php"
                        class="nav-item nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                    <a href="about.php"
                        class="nav-item nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a>
                    <?php if (isset($_SESSION['email'])) { ?>
                        <a href="add_skills.php"
                            class="nav-item nav-link <?php echo ($current_page == 'add_skills.php') ? 'active' : ''; ?>">Add
                            Skills</a>

                             <a href="messenger.php"
                            class="nav-item nav-link <?php echo ($current_page == 'messenger.php') ? 'active' : ''; ?>">Chat</a>
                    <?php } ?>
                    <?php if (!isset($_SESSION['email'])) { ?>

                        <a href="login.php"
                            class="nav-item nav-link <?php echo ($current_page == 'login.php') ? 'active' : ''; ?>">Login</a>
                        <a href="register.php"
                            class="nav-item nav-link <?php echo ($current_page == 'register.php') ? 'active' : ''; ?>">Register</a>
                    <?PHP } ?>
                </div>
                <?php if (isset($_SESSION['email'])) { ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user fa-2x"></i>
                    <?php if (isset($_SESSION['email'])) { ?>Welcome
                                <?php echo $_SESSION['username']; ?>
                                <?php } ?>
                    </a>
                    <div class="dropdown-menu m-0 bg-secondary rounded-0">  
                    <a href="change_pass.php" class="nav-item nav-link <?php echo ($current_page == 'change_pass.php') ? 'active' : ''; ?>">Change Password</a>
                    <a href="logout.php" class="nav-item nav-link <?php echo ($current_page == 'logout.php') ? 'active' : ''; ?>">Logout</a>
                    </div>
                </div>
                <?php } ?>

            </div>
        </nav>
    </div>
</div>