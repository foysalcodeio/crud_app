<?php

    include 'connect.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
    
    $sql = "INSERT INTO `crud`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";

    $result = mysqli_query($con, $sql);

    if($result){
        // echo "Data inserted Successfully";
        header('location:display.php');
     }else{
         die(mysqli_error($con));
    }    
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD APP</title>
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 bg-primary bg-gradient text-white">
            CRUD Display Unit
    </nav>
    <div class="container" >
        <form method="post" >
            <div class="form-group mb-3" >
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
                
            </div>

            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>          
            
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>

    
  </body>
</html>