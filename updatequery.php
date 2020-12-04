<?php 
    include("config.php");

    
        $locality = $_POST["locality"];
        $type = $_POST["type"];
        $status = $_POST["status"];
        $img = $_POST["img"];
        $id = $_POST['id'];

        echo $id;
        $sql = "UPDATE house_details SET Locality='$locality', Type='$type', status='$status', img='$img' where House_id=$id";
        if(mysqli_query($conn,$sql)){
            header('location: owner.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }
  
?>
