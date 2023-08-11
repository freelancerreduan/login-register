<?php 
include('Link.php');
// DB Connection Start Hear=========================================
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname ="registration";
    $chack = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($chack){
        // echo "Connection Succesfull";
    }else{
        echo "Not Connected";
    }
// DB Connection End Hear=========================================



// valu input and query sent and chack START Hear=========================================
    if(isset($_POST['login'])){
        $email =$_POST['email'];
        $pass = $_POST['pass'];
        $data = "SELECT * FROM registration_user WHERE email= '$email' && pass= '$pass'";
        $run = mysqli_query($chack,$data);
        $count = mysqli_num_rows($run);
    }
    
    // Ematy Input Field chcak start hear
    if (empty($email)) {
        header('location:login.php');
      }else{
          echo "Email Added Successful <br>";
      }
    // Ematy Input Field chcak End hear
    




    // Chcak for Database valid info stert==================================
    if($count >=1){
        echo "<h2> Login Successful </h2>";
    }else{
        header('location:login.php');
        return "Apni age Registration koren ";
    }
    // Chcak for Database valid info Ends==================================

// valu input and query sent and chack END Hear=========================================



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page Views</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="#" method="post">
                <h1 class="text-center text-danger">Facebook Views </h1>
                <input type="submit" value="View My Facebook Acount " class="form-control" name="fb">
                
            </form>
        </div>
    </div>
</body>
</html>