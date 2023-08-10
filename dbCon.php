<?php
    include('Link.php');
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname ="registration";
    "<script> alert('Hello') </script>";
    // Connection Chack and variable decliar===========================================================
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($conn){
        // echo "Connection Ok";
    }else{
        echo  "<h2> Connection Faild </h2>";
    }
    if(isset($_POST['sent-data'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $con_pass = $_POST['con_pass'];

    }

    // SQL query Start heir for data sent form database =================================================
    $query = "INSERT INTO registration_user(name,email,pass,con_pass) values ('$name','$email','$pass','$con_pass')";
    $data = mysqli_query($conn,$query);

    if($data){
        // echo "Data Sent Success ";
        header("location:login.php");
    }else{
        echo "<br> Data Not Sent Form Database, plese Try Agin";
    }

?>