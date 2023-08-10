<?php 
include('Link.php');
// DB Connection Start Hear=========================================
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname ="registration";
    $chack = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($chack){
        echo "Connection Succesfull";
    }else{
        echo "Not Connected";
    }
// DB Connection End Hear=========================================



// valu input and query sent and chack START Hear=========================================
    $email =$_POST['email'];
    $pass = $_POST['pass'];
    $data = "SELECT * FROM registration_user WHERE email= '$email' && pass= '$pass'";
    $run = mysqli_query($chack,$data);
    $count = mysqli_num_rows($run);

    if($count){
        echo "Ok";
    }else{
        echo"Not Login";
    }
// valu input and query sent and chack END Hear=========================================



?>