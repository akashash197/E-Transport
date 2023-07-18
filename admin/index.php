<?php
include("config/dbconnect.php");
session_start();
$msg="";

if(isset($_SESSION['Etransport_Admin']) || !empty($_SESSION['Etransport_Admin']))
{
	header("location:dashboard.php");
}

if(isset($_POST)  && !empty($_POST))
{
	$username=$_POST['username'];
	$userpassword=md5($_POST['userpassword']);

	$userquery="select * from tbl_user where email='".$username."' and password='".$userpassword."' and user_role='1'";

	$result = $conn->query($userquery);

	if ($result->num_rows > 0) 
	{
		$userdata = $result->fetch_assoc();
		$_SESSION['Etransport_Admin']['user_id']=$userdata['id'];
		$_SESSION['Etransport_Admin']['user_firstname']=$userdata['first_name'];
		$_SESSION['Etransport_Admin']['user_lastname']=$userdata['last_name'];
    $_SESSION['Etransport_Admin']['user_photo']=$userdata['profile_image'];
		header("location: dashboard.php");
		die();
	}
	else
	{
		$msg="User name or password is invalid.";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./index-css/index-style.css">

  <title><?php echo ADMIN_LOGIN_TITLE; ?></title>
  <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">

  
</head>

<body>
  <div class="card">
    <form class="form" method="post">

      <h3>Login</h3>
      <div class="input-field">
      <label><i class="fa fa-envelope"></i></label>
          <input type="text" placeholder="Enter your user name" name="username" required>
      </div>
      <div class="input-field ">
      <label><i class="fa fa-lock"></i></label>
        <input type="password" placeholder="Enter your password" name="userpassword" required>
    </div>

    
    <!-- <div class="reset-forgot"> -->
    <!-- <button type="reset" id="cancelbtn"> Cancel</button> -->
   
    <!-- </div>   -->
    
    
    <button type="submit">Login</button>
    <p style="color:tomato;"><?php echo $msg; ?></p>
    <p class="home-button"><a href="/etransport/index.php" target="_blank">Back to Home</a></p>
  
  </form>
    <div class="image">
      <div class="overlay">
        <h2>E - Transport</h2>
        <h3>The best way to get where you’re going</h3>
      </div>
    </div>
  </div>
</body>
</html>