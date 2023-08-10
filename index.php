 <?php
 include('Link.php');

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
 </head>
 <body>

    <div class="container">
        <h2 class="text-danger text-center"> Registreation From With PHP  </h2>
        <div class="shadow  my-5 p-5 bg-body rounded">

            <form action="dbCon.php" method="POST">
                <label for="name" class="form-label">Full Name: </label>
                <input type="text" class="form-control"  name="name">
    
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email">
    
                <label for="pass" class="form-label">Password:</label>
                <input type="password" class="form-control" name="pass">
    
                <label for="con_pass" class="form-label">Confrime Password:</label>
                <input type="password" class="form-control" name="con_pass">    
    
                <input type="submit" value="Registar Now" class="form-control btn-success my-3" name="sent-data">
            </form>        
        </div>

    </div>
 </body>
 </html>