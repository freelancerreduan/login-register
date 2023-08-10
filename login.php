<?php 
    include('Link.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <h1 class="text-danger text-center">Login Form </h1>
            
            <form action="checkLogin.php" method="post">  
                <label for="email">Email: </label>
                <input type="email" class="form-control" name="email">
        
                <label for="pass"> Password: </label>
                <input type="password" class="form-control" name="pass">
        
                <input type="submit" class="form-control btn-warning my-3" name="login">
            </form>
        </div>
    </div>
</body>
</html>