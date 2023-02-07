<?php
session_start();
// print_r($_SESSION);

$err = '';
include('../cont.php');
 if(isset($_POST["username"]) && isset($_POST["password"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    //echo $username.'<br>'.$password;
    $query = "SELECT * FROM `admin` WHERE `username`= '$username'  AND `password`= '$password' AND `role` = 'admin'";
    $res = mysqli_query($connection,$query);
    $ress = mysqli_fetch_array($res,MYSQLI_ASSOC);

    
    if(isset($ress['id'])){
        $_SESSION["user"] = $username;
  echo '<script>location.replace("./dashboard.php")</script>';      
      }else{
        $err = 'not an admin';
    }

 }



?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - simple responsive login form</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="./adminLogin.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="wrapper">

		<div class="container mt-4">
   
		<form class="form-signin" action="" method="POST">
			<h2 class="form-heading text-center">
				Admin Login Form
			</h2>
			<input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />

			<input type="password" class="form-control" name="password" placeholder="Password" required="" autofocus="" />

			<?php
			echo $err;
			?>
			<button  type="submit" name="" value="login" class="btn btn-lg btn-dark btn-block">
				Login
			</button>
		</form>

		</div>

	</div>

<!-- partial -->


</body>
</html>
