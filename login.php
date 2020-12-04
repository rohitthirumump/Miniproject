<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            include("config.php"); 
            
        $id = $_POST["pid"];
        $password = $_POST["password"];
        $ur = $_POST["youare"];

        

        if($ur == "Owner"){

            $s = "select * from owner where owner_id='$id' and Password = '$password'";
            $result = mysqli_query($conn,$s);
            $n = mysqli_num_rows($result);
            if($n == 1){
                $_SESSION['id'] = $id;
               header('location: owner.php');
            } else {
                header('location: index.html');
            }
        } else if ($ur == "Customer"){
            $s = "select * from customer where cust_id='$id' and Password = '$password'";
            $result = mysqli_query($conn,$s);
            $n = mysqli_num_rows($result);
            if($n == 1){
                // echo "Welcome";
                $_SESSION['id'] = $id;
               header('location: home.html');
            } else {
                echo "error";
            header('location: index.html');
        } 
    }

        // if (mysqli_query($conn, $sql)) {
        //     echo "Registration successfully";
        // }
        // else {
        //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }
         
    ?>
</body>
</html>