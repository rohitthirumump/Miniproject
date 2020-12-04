<?php 
include("config.php");

        $id = $_POST['id'];

        $sql = "delete from house_details where House_id= $id ";
        // echo  $id ;
        if(mysqli_query($conn, $sql)){
            echo "Record deleted";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
?>