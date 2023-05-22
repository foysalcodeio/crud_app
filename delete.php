<?php

    include 'connect.php';

    if(isset($_GET['deleteid'])){

        $id = $_GET['deleteid'];

        $sql="DELETE FROM `crud` WHERE id=$id";

        $result=mysqli_query($con, $sql);

        if($result){
            //header("Location: index.php?msg=List Delete successfully");
            header('location:display.php?msg=List Delete successfully');
            
        }else{
            die(mysqli_error($con));
        }
    }

?>