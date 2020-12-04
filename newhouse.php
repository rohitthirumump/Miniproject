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
       
        $hid = $_POST["hid"];
        $locality = $_POST["locality"];
        $type = $_POST["type"];
        $status = $_POST["status"];
        $oid = $_POST["oid"];
        $img = $_POST["img"];

        $password = $_POST["password"];

        $oid_sql = "select * from owner where Password = '$password' and owner_id = '$oid' ";
        $result = mysqli_query($conn, $oid_sql);

        if(mysqli_num_rows($result) > 0) { 
            $sql = "INSERT INTO house_details values ('$hid','$locality', '$type', '$status', '$oid', '$img')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

         } else { ?>
            <script> alert("You are not a registered owner"); 
                setTimeout(function () {
                window.location.href= 'http://localhost/Miniproject/signup.html'; // the redirect goes here
                },3000);
            </script>     
        <?php 
            // header("Location: http://localhost/Miniproject/signup.html");
        }
         
    ?>

</body>
</html>