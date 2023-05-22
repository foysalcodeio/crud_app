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
    <div class="container my-1">
        <button class="btn btn-primary text-white my-5"><a href="user.php" class="text-light">Add User</a></button>
    </div>



    <div class="container justify-content-center">

    <table class="table table-striped table-borderless text-center">
        <!-- header-border -->
        <thead class="table-dark">
            <tr >
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Operation</th>
            </tr>
        </thead>

        <!-- list-start -->

        <tbody>

        <?php 
            include 'connect.php';
            $sql = "SELECT * FROM `crud`";
            $res = mysqli_query($con, $sql);

            // if($res){
            //     $row = mysqli_fetch_assoc('$res');
            //     echo $row['id'];
            // }

            while($row = mysqli_fetch_assoc($res)){
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile =$row['mobile'];
                $password = $row['password'];

                echo '
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                </tr>';
            }
        ?>
        


        <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>123</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>231</td>
            </tr> -->

            

        </tbody>
    </table>

    </div>

    
  </body>
</html>