<?php
session_start();
$email=$_POST["email"];
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
	echo "<script>
	window.location.href = 'login.php'; // Redirect to login page
</script>";}
$q="select * from reg_user where email='$email' or username='$email' and status='ok'";
$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)>0)
{
	$_SESSION["email"]=$email;
	$row=mysqli_fetch_array($result);
	$r=$row["user_type"];
	
	if($r=="admin")
	{
		echo "<script>
            alert('Logging out');
        </script>";
		header('location:admin/login.php');
	}

}

mysqli_close($con)
?>