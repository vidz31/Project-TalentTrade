
<?php 
  session_start();
  include_once "connection.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<link rel="stylesheet" href="style.css">
<?php //include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM tbl_user_registration WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="<?php echo $row['profile']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['username']; ?></span>
            <p><?php echo $row['login_status']; ?></p>
          </div>
        </div>
        <a href="index.php" class="logout">Back</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
