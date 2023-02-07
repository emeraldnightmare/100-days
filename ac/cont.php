<?php
   $host = 'localhost';
   $dbname = 'epiz_33343188_furniture';
   $dbpassword = '';
   $dbuser = 'root';

    $connection = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

    // Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " + mysqli_connect_error();
    exit();
}
else {
   echo 'successfull';
}
?>
