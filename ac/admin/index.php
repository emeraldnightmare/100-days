<?php
session_start();
// print_r($_SESSION);

$err = '';
include('../cont.php');
 if(isset($_POST["username"]) && isset($_POST["password"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    //echo $username.'<br>'.$password;
    $query = "SELECT * FROM `login` WHERE `username`= '$username'  AND `password`= '$password' AND `role` = 'admin'";
    $res = mysqli_query($connection,$query);
    $ress = mysqli_fetch_array($res,MYSQLI_ASSOC);

    
    if(isset($ress['id'])){
        $_SESSION["user"] = $username;
  echo '<script>location.replace("./header.php")</script>';      
      }else{
        $err = 'not an admin';
    }

 }



?>
<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <form  class = 'box' action="" method="POST">
        <h1>ADMIN</h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password" >
        <input type="submit" name="" value="login">

        <br>
        <div style="color:red"> 
       
        </div>
    </form>
    
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="./adminLogin.css">

</head>
<body>
    <!-- <form  class = 'box' action="" method="POST">
        <h1>ADMIN</h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password" >
        <input type="submit" name="" value="login">

        <br>
        <div style="color:red"> 
       
        </div>
    </form> -->
    <!-- partial:index.partial.html -->
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form class = 'box' action="" method="POST" >
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text"  name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">



                            <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                    <?php
                                    echo $err;
                                    ?>
                                </div>   
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name="" value="login"class="btn btn-outline-primary">LOGIN</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
<!-- partial -->
  
</body>
</html>