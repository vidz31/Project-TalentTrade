<?php
session_start();
require 'connection.php';
if(isset($_POST['submit']))
{
$oldpass= md5($_POST['old_pass']);
$newpassword= md5($_POST['new_pass']);
$email=$_SESSION['email'];

$sql=mysqli_query ($conn,"SELECT password FROM tbl_user_registration where password='$oldpass' && useremail='$email'");

//$num=mysqli_fetch_array($sql);
if($sql)
{
 $conn=mysqli_query($conn,"update tbl_user_registration set password='$newpassword' where useremail='$email'");

 echo "<script>window.location.href = 'login.php?password=true'
		alert('Password Change Successful');
 		</script>";
}
else
{
	 echo "<script>window.location.href = 'change_pass.php?error=true'
			alert('Error Ocurred in password Change');
	 		</script>";

}
}
